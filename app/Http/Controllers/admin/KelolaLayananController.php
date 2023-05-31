<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\layanan;
use App\Models\logo;
use Illuminate\Http\Request;

class KelolaLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelolalayanan = layanan::latest()->get();
        return view('admin.layanan', [
            'kelolalogo' => logo::where('status', '1')->get()
        ], compact('kelolalayanan'));
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
        $tambahlayanan = layanan::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('assets/layanan', $request->file('gambar')->getClientOriginalName());
            $tambahlayanan->gambar = $request->file('gambar')->getClientOriginalName();
            $tambahlayanan->save();
        }
        return redirect()->route('kelolalayanan');
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
        $updatelogo = logo::findorfail($id);
        $updatelogo->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('assets/logo', $request->file('gambar')->getClientOriginalName());
            $updatelogo->gambar = $request->file('gambar')->getClientOriginalName();
            $updatelogo->save();
        }
        return redirect()->route('kelolalogo')->with('toast_success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  
    }
}
