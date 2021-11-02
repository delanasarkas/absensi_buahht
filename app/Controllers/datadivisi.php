<?php

namespace App\Controllers;

class datadivisi extends BaseController
{
    public function index()
    {
        return view('pages/divisi/index');
    }

    public function edit()
    {
        return view('pages/divisi/edit');
    }

    public function detail()
    {
        return view('pages/divisi/detail');
    }
}
