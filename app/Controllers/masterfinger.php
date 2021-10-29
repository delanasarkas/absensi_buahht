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

}
