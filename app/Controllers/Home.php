<?php

namespace App\Controllers;
use App\Models\ModelUser;
use CodeIgniter\HTTP\Message;

class Home extends BaseController
{

    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    public function index()
    {
        $data = [
            
             'title' => 'title'
        ];
        return view('v_login', $data);
    }

    public function CekLogin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'is_unique' => '{field} is empty !!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} is empty !!',
                    ]
                ],
         ])) {
            $email = $this->request->getPost('email');
            $password = ($this->request->getPost('password'));
            $cek_login = $this->ModelUser->LoginUser($email, $password);
            if ($cek_login) {
                //jika login berhasil
                session()->set('id_user', $cek_login['id_user']);
                session()->set('name_user', $cek_login['name_user']);
                session()->set('level', $cek_login['level']);
                if ($cek_login['level'] == 1) {
                    return redirect()->to(base_url('Admin'));
                } else {
                    return redirect()->to(base_url('Selling'));
                }
            }else {
                //gagal login
                session()->setFlashdata('MessageGagal', 'E-mail or Password not correct');
                return redirect()->to(base_url('Home'));

            }
         }else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Home'))->WithInput('validation', \Config\Services::validation());
         }
    }

    public function LogOut()
    {
        session()->remove('id_user');
        session()->remove('name_user');
        session()->remove('level');
        session()->setFlashdata('Message', 'Your LogOut');
        return redirect()->to(base_url('Home'));
    }
}