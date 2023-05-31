<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\logo;
use App\Models\slider;

class KelolaSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelolaslider = slider::latest()->get();
        return view('admin.slider', [
            'kelolalogo' => logo::where('status', '1')->get()
        ], compact('kelolaslider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambahslider = slider::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('assets/slider', $request->file('gambar')->getClientOriginalName());
            $tambahslider->gambar = $request->file('gambar')->getClientOriginalName();
            $tambahslider->save();
        }
        return redirect()->route('kelolaslider')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = slider::findorfail($id);
        $delete->delete();
        return redirect()->route('kelolaslider')->with('success', 'Data berhasil dihapus');
    }
}
