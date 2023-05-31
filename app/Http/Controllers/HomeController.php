<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home', [
            'kelolalogo' => logo::where('status', '1')->get(),
        ]);
    }
}
