<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
        
    }
    public function index()
    {
        $data = [
            'tittle' => 'Dashboard',
            'subTittle' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'v_admin',
            'chart' => $this->ModelAdmin->chart(),
            'IncomeDays' => $this->ModelAdmin->IncomeToday(),
            'IncomeMonth' => $this->ModelAdmin->IncomeMonth(),
            'IncomeYear' => $this->ModelAdmin->IncomeYear(),
            'TProduct' => $this->ModelAdmin->TotalProduct(),
            'TCategory' => $this->ModelAdmin->TotalCategory(),
            'TUnit' => $this->ModelAdmin->TotalUnit(),
            'TUser' => $this->ModelAdmin->TotalUser()
        ];
        return view('v_template', $data);
    }

    public function Setting()
    {
        $data = [
            'tittle' => 'Setting',
            'subTittle' => 'Entwo Kasir Shop',
            'menu' => 'setting',
            'submenu' => '',
            'page' => 'v_setting',
            'setting' => $this->ModelAdmin->DetailData(),

        ];
        return view('v_template', $data);
    }

    // public function Selling()
    // {
    //     $data = [
    //         'tittle' => 'Selling',
    //         'subTittle' => '',
    //         'menu' => 'selling',
    //         'submenu' => '',
    //          'page' => 'v_selling'
    //     ];
    //     return view('v_template', $data);
    // }

    public function UpdateSetting()
    {
        $data = [
            'id' => '1',
            'name_shop' => $this->request->getPost('name_shop'),
            'address' => $this->request->getPost('address'),
            'no_phone' => $this->request->getPost('no_phone'),
            'description' => $this->request->getPost('description'),

        ];

        $this->ModelAdmin->UpdateData($data);
        session()->setFlashdata('Message','Data update complete !! yey');
        return redirect()->to('Admin/Setting');
    }

    public function Check()
    {

    }

}