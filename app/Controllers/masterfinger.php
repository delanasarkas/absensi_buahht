<?php

namespace App\Controllers;

class Masterfinger extends BaseController
{
    public function index()
    {
        return view('pages/selectfinger/index');
    }

    public function tambah()
    {
        return view('pages/selectfinger/tambah');
    }

    public function edit()
    {
        return view('pages/selectfinger/edit');
    }

    public function detail()
    {
        return view('pages/selectfinger/detail');
    }
    
    public function index2()
    {
        return view('pages/datafinger/index2');
    }

    public function detail2()
    {
        return view('pages/datafinger/detail2');
    }
}
