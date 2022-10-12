<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUnit;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\RequestInterface;

class Unit extends BaseController
{

    public function __construct()
    {
        $this->ModelUnit = new ModelUnit();

    }

    public function index()
    {
        $data = [
            'tittle' => 'Master Data',
            'subTittle' => 'Units',
            'menu' => 'masterData',
            'submenu' => 'unit',
            'page' => 'v_unit',
            'Unit' => $this->ModelUnit->AllData(),
       ];
       return view('v_template', $data);
    }

    public function store()
    {
        $units = new ModelUnit;
        $data = [
            'name_unit' => $this->request->getPost('name_unit'),
        ];
        $units->save($data);
        $data = ['status'=>'Units insert success !! yey'];
        return $this->response->setJSON($data);
    }
    

    function UnitAjax() {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start']: '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length']: '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['length'] : '';

        $dataUnit = new \App\Models\ModelUnit();
        $data = $dataUnit->searchAndDisplay($search_value,$start,$length);
        $total_count = $dataUnit->searchAndDisplay($search_value);

        $json_data = array(
            'draw' => intval(['draw']),
            'recordsTotal' => count($total_count),
            'recordsFiltered' => count($total_count),
            'data' => $data
        );
        echo json_encode($json_data);
    }

    public function InsertData()
    {
        $data = ['name_unit' => $this->request->getpost('name_unit')];
        $this->ModelUnit->InsertData($data);
        session()->setFlashdata('Message','Data add complete !! yey');
        return redirect()->to('Unit');
    }

    public function UpdateData($id_unit)
    {
        $data = [
            'id_unit' => $id_unit,
            'name_unit' => $this->request->getPost('name_unit')
        ];

        $this->ModelUnit->UpdateData($data);
        session()->setFlashdata('Message','Data update complete !! yey');
        return redirect()->to('Unit');
    }

    public function DeleteData($id_unit)
    {
        $data = [
            'id_unit' => $id_unit
        ];

        $this->ModelUnit->DeleteData($data);
        session()->setFlashdata('Message','Data deleted complete !! yey');
        return redirect()->to('Unit');
    }
}