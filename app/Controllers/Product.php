<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCategory;
use App\Models\ModelProduct;
use App\Models\ModelUnit;
use Config\Services;

class Product extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->ModelProduct = new ModelProduct($request);
        $this->ModelCategory = new ModelCategory($request);
        $this->ModelUnit = new ModelUnit();
    }
    public function index()
    {
        $data = [
            'tittle' => 'Master Data',
            'subTittle' => 'Product',
            'menu' => 'masterData',
            'submenu' => 'product',
            'page' => 'v_product',
            'Product' => $this->ModelProduct->AllData(),
            'Category' => $this->ModelCategory->AllData(),
            'Unit' => $this->ModelUnit->AllData(),
        ];
        return view('v_template', $data);
     }

     public function InsertData()
     {
         if ($this->validate([
            'code_product' => [
                'label' => 'Code Product',
                'rules' => 'is_unique[tbl_product.code_product]',
                'errors' => [
                    'is_unique' => '{field} the code already exists, enter another code !!',
                ]
            ],
            'id_unit' => [
                'label' => 'unit',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} not yet selected !!',
                    ]
                ],
            'id_category' => [
            'label' => 'category',
            'rules' => 'required',
            'errors' => [
                    'required' => '{field} not yet selected !!',
                    ]
                ]
         ])){
            $purchasePrice = str_replace(",","", $this->request->getPost('purchase_price'));
            $sellingPrice = str_replace(",","", $this->request->getPost('selling_price'));
            $data = [
                'code_product' => $this->request->getPost('code_product'),
                'name_product' => $this->request->getPost('name_product'),
                'id_category' => $this->request->getPost('id_category'),
                'id_unit' => $this->request->getPost('id_unit'),
                'purchase_price' => $purchasePrice,
                'selling_price' => $sellingPrice,
                'stock' => $this->request->getPost('stock'),
            ];

            $this->ModelProduct->InsertData($data); 
            session()->setFlashdata('message','Data add complete !! yey' );
            return redirect()->to(base_url('Product'));
         } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Product'))->WithInput('validation', \Config\Services::validation());
         }
    }

    public function UpdateData($id_product)
    {
        if ($this->validate([
           'id_unit' => [
               'label' => 'unit',
               'rules' => 'required',
               'errors' => [
                   'required' => '{field} not yet selected !!',
                   ]
               ],
           'id_category' => [
           'label' => 'category',
           'rules' => 'required',
           'errors' => [
                   'required' => '{field} not yet selected !!',
                   ]
               ]
        ]) ){
           $purchasePrice = str_replace(",","", $this->request->getPost('purchase_price'));
           $sellingPrice = str_replace(",","", $this->request->getPost('selling_price'));
           $data = [
               'id_product' => $id_product,
               'name_product' => $this->request->getPost('name_product'),
               'id_category' => $this->request->getPost('id_category'),
               'id_unit' => $this->request->getPost('id_unit'),
               'purchase_price' => $purchasePrice,
               'selling_price' => $sellingPrice,
               'stock' => $this->request->getPost('stock'),
           ];

           $this->ModelProduct->UpdateData($data); 
           session()->setFlashdata('message','Data update complete !! yey' );
           return redirect()->to(base_url('Product'));
        } else {
           session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
           return redirect()->to(base_url('Product'))->WithInput('validation', \Config\Services::validation());
        }
   }

   public function DeleteData($id_product)
    {
        $data = [
            'id_product' => $id_product
        ];

        $this->ModelProduct->DeleteData($data);
        session()->setFlashdata('Message','Data deleted complete !! yey');
        return redirect()->to('Product');
    }
}