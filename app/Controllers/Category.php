<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCategory;
use Config\Services;

class Category extends BaseController
{

    public function __construct()
    {
        $request = Services::request();
        $this->ModelCategory = new ModelCategory($request);
        
    }
    public function index()
    {
        $data = [
            'tittle' => 'Master Data',
            'subTittle' => 'Category',
            'menu' => 'masterData',
            'submenu' => 'category',
            'page' => 'v_category',
            'Category' => $this->ModelCategory->AllData(),
       ];
       return view('v_template', $data);
    }

    function categoryAjax() {
        // var_dump('sad');
        // die;
        $request = Services::request();

        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw']: '';
        $keyword = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value']: '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start']: '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length']: '';

        $this->ModelCategoryServerSide = new ModelCategory($request);
        $data = $this->ModelCategoryServerSide->showData($keyword, $start, $length);
        $totalData = $this->ModelCategoryServerSide->showData($keyword);

        $output = array (
            'draw' => intval($param['draw']),
            'recordsTotal' => count($totalData),
            'recordsFiltered' => count($totalData),
            'data' => $data
        );

        echo json_encode($output);

    }

    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new ModelCategory($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];

                // $editButton = "<button type=\"button\" class=\"btn btn-primary btn-sm my-1\" onclick=\"editData(" . $list['id_user'] . ")\"><i class=\"fa fa-edit\"></i> </button>";
				// $deleteButton = "<button type=\"button\" class=\"btn btn-danger btn-sm my-1\" onclick=\"deleteData(" . $list['id_user'] . ")\"><i class=\"fa fa-trash-alt\"></i> </button>";

                $row[] = $no;
                $row[] = $list->name_category;
                // $row[] = $editButton;
                // $row[] = $deleteButton;
                
                
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }

    public function ajax_edit($id) {
        $request = Services::request();
        $this->CategoryAjax_model = new ModelCategory($request);
 
        $data = $this->CategoryAjax_model->get_by_id($id);
 
        echo json_encode($data);
    }

    public function InsertData()
    {
        $data = ['name_category' => $this->request->getpost('name_category')];
        $this->ModelCategory->InsertData($data);
        session()->setFlashdata('Message','Data add complete !! yey');
        return redirect()->to('Category');
    }

    public function UpdateData($id_category)
    {
        $data = [
            'id_category' => $id_category,
            'name_category' => $this->request->getPost('name_category')
        ];

        $this->ModelCategory->UpdateData($data);
        session()->setFlashdata('Message','Data update complete !! yey');
        return redirect()->to('Category');
    }

    public function DeleteData($id_category)
    {
        $data = [
            'id_category' => $id_category
        ];

        $this->ModelCategory->DeleteData($data);
        session()->setFlashdata('Message','Data deleted complete !! yey');
        return redirect()->to('Category');
    }

    
}