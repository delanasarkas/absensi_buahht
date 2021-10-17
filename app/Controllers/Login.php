<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
	{
        if(session()->get('logged_in')){
            return redirect()->back();
        } else {
            return view('pages\auth\login');
        }
	}

    public function submit()
	{
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $validator = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if(!$validator){
            return view('pages\auth\login', [
                'validation' => $this->validator
            ]);
        } else {
            if ($email == 'admin@gmail.com' && $password == 'admin123!') {
                session()->set([
                    'logged_in' => TRUE
                ]);
                session()->setFlashdata('success', 'Anda berhasil login');
                return redirect()->to('/');
            } else {
                session()->setFlashdata('error', 'Username & Password Tidak Valid');
                return redirect()->back();
            }
        }

	}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
