<?php

namespace App\Controllers;
use App\Models\UsersModel;

class DataKaryawan extends BaseController
{
    public function index()
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();

            $users = $db->query("SELECT a.nik, a.username, a.is_active, b.nama_divisi FROM users a, divisi b WHERE a.id_divisi = b.id_divisi AND a.id_role != 1")->getResult('array');

            $data = [
                'user' => $users
            ];

            return view('pages/datakaryawan/index.php', $data);
        }
    }

    public function tambah()
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();

            $divisi = $db->query("SELECT * FROM divisi")->getResult('array');

            $data = [
                'divisi' => $divisi
            ];

            return view('pages/datakaryawan/tambah', $data);
        }

    }

    public function prosesTambah()
    {
        // INISIAL MODEL USERS
        $users = new UsersModel();

        // GET FIELD NAME YANG DIKIRIM
        $nik = $this->request->getVar('nik');
        $name = $this->request->getVar('name');
        $phone = $this->request->getVar('phone');
        $divition = $this->request->getVar('divition');
        $address = $this->request->getVar('address');

        // VALIDASI
        $validator = $this->validate([
            'nik' => 'required|min_length[6]',
            'name' => 'required|min_length[3]',
            'phone' => 'required|min_length[10]',
            'divition' => 'required',
            'address' => 'required|min_length[6]',
        ]);

        if(!$validator){
            $db = \Config\Database::connect();

            $divisi = $db->query("SELECT * FROM divisi")->getResult('array');

            return view('pages\datakaryawan\tambah', [
                'validation' => $this->validator,
                'divisi' => $divisi
            ]);
        } else {
            $users->save([
                'id_role' => 2,
                'id_divisi' => $divition,
                'nik' => $nik,
                'email' => strtolower($name.'@gmail.com'),
                'username' => ucwords($name),
                'alamat' => ucwords($address),
                'no_tlp' => $phone,
                'password' => md5($name.'123!'),
                'is_active' => true,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
    
            session()->setFlashdata('success', 'Tambah karyawan berhasil');
            return redirect()->to('/karyawan');
        }

    }
    
    public function edit()
    {
        return view('pages/datakaryawan/edit');
    }

    public function detail()
    {
        return view('pages/datakaryawan/detail');
    }

    public function delete()
    {
        return view('pages/datakaryawan/delete');
    }
}
