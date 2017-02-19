<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function gallery()
    {
        return view('galeri');
    }

    public function contact()
    {
        return view('hubungi');
    }

    public function service()
    {
        return view('layanan');
    }

    public function mitra()
    {
        return view('mitra');
    }

    public function order()
    {
        return view('order');
    }

    public function about()
    {
        return view('tentang');
    }

}
