<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('website.index');
    }
    public function daftarkaryawan(){
        return view('website.daftarkaryawan');
    }
}
