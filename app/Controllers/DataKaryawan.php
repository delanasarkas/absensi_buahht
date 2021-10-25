<?php

namespace App\Controllers;

class DataKaryawan extends BaseController
{
    public function index()
    {
        {
           return view('pages/datakaryawan/index.php');
        }
    }

    public function tambah()

        {
            return view('pages/datakaryawan/tambah.php');
        }
}
