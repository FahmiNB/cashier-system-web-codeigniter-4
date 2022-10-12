<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSell;

class Selling extends BaseController
{
    public function __construct()
    {
        $this->ModelSell = new ModelSell();
    }

    public function index()
    {
        $cart = \Config\Services::cart();
        $data = [
            
            'title' => 'Selling',
            'no_code' => $this->ModelSell->NoCode(),
            'cart' => $cart->contents(),
            'grand_total' => $cart->total(),
            'product' => $this->ModelSell->AllProduct(),
       ];
       return view('v_selling', $data);
    }

    public function CheckProduct() 
    {
     $code_product = $this->request->getPost('code_product');
     $product = $this->ModelSell->CheckProduct($code_product);
     if ($product == null) {
        $data =  [
            'name_product' => '',
            'name_category' => '',
            'name_unit' => '',
            'selling_price' => ''
        ];
     } else {
        $data = [
            'name_product' => $product['name_product'],
            'name_category' => $product['name_category'],
            'name_unit' => $product['name_unit'],
            'selling_price' => $product['selling_price'],
            'purchase_price' => $product['purchase_price']
        ];
     }
     echo json_encode($data);
    }

    public function InsertCart()
    {
        $cart = \Config\Services::cart();

// Insert an array of values
        $cart->insert(array(
        'id'      => $this->request->getPost('code_product'),
        'qty'     => $this->request->getPost('qty'),
        'price'   => $this->request->getPost('selling_price'),
        'name'    => $this->request->getPost('name_product'),
        'options' => array(
            'name_category' => $this->request->getPost('name_category'), 
            'name_unit' => $this->request->getPost('name_unit'),
            'modal' => $this->request->getPost('purchase_price')
            )
        ));
        return redirect()->to(base_url('Selling'));
    }

    public function ViewCart()
    {
        $cart = \Config\Services::cart();
        $data = $cart->contents();
        echo dd($data);
    }

    public function ResetCart()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->to(base_url('Selling'));
    }

    public function RemoveItemCart($rowid) 
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to(base_url('Selling'));
    }

    public function SaveTransaction()
    {
        $cart = \Config\Services::cart();
        $product = $cart->contents();
        $no_code = $this->ModelSell->NoCode();
        $buyed = str_replace(",","", $this->request->getPost('buyed'));
        $refund = str_replace(",","", $this->request->getPost('refund'));
        //save to tbl_detail_sell
        foreach ($product as $key => $value) {
            $data = [
                'no_code' => $no_code,
                'code_product' => $value['id'],
                'selling_price' => $value['price'],
                'modal' => $value['options']['modal'],
                'qty' => $value['qty'],
                'total_price' => $value['subtotal'],
                'profit' => ($value['price'] - $value['options']['modal']) * $value['qty']
            ];
        $this->ModelSell->InsertDetailSell($data);
        }
    
        $data = [
            'no_code' => $no_code,
            'date_sell' => date('Y-m-d'),
            'hour' => date('H:i:s'),
            'grand_total' => $cart->total(),
            'buyed'=> $buyed,
            'refund' => $refund,
            'id_user' => session()->get('id_user'),
        ];
        $this->ModelSell->InsertSell($data);

        session()->setFlashdata('Message', 'Transaction saved !!');
        $cart->destroy();
        return redirect()->to('Selling');
    }
    
}