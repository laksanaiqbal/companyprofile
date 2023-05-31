<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\logo;
use Illuminate\Http\Request;

class homeadmincontroller extends Controller
{
    public function index()
    {
        return view('admin.homeadmin', [
            'kelolalogo' => logo::where('status', '1')->get()
        ]);
    }
}
