<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController

{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }
    public function index()
    {
        $data = [
            'tittle' => 'Master Data',
            'subTittle' => 'User',
            'menu' => 'masterData',
            'submenu' => 'user',
            'page' => 'v_user',
            'User' => $this->ModelUser->AllData(),
       ];
       return view('v_template', $data);
    }

    public function InsertData()
    {
        $data = [
            'name_user' => $this->request->getpost('name_user'),
            'email' => $this->request->getpost('email'),
            'password' => $this->request->getpost('password'),
            'level' => $this->request->getpost('level'),
        ];
        $this->ModelUser->InsertData($data);
        session()->setFlashdata('Message','Data add complete !! yey');
        return redirect()->to('User');
    }

    public function UpdateData($id_user)
    {
        $data = [
            'id_user' => $id_user,
            'name_user' => $this->request->getPost('name_user'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level')
        ];

        $this->ModelUser->UpdateData($data);
        session()->setFlashdata('Message','Data update complete !! yey');
        return redirect()->to('User');
    }

    public function DeleteData($id_user)
    {
        $data = [
            'id_user' => $id_user
        ];

        $this->ModelUser->DeleteData($data);
        session()->setFlashdata('Message','Data deleted complete !! yey');
        return redirect()->to('User');
    }
}