<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function login()
    {
        return view('user.login', [
            'kelolalogo' => logo::where('status', '1')->get(),
        ]);
    }
    public function register()
    {
        return view('user.register', [
            'kelolalogo' => logo::where('status', '1')->get(),
        ]);
    }
}
