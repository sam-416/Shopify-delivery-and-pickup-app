<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallApp extends Controller
{
    public function index(){
        return view('install.install');
    }
}
