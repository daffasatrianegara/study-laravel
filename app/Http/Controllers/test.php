<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function index() {
        $nama = 'daffa';
        return view('pages.components.blog', compact('nama'));
    }
}
