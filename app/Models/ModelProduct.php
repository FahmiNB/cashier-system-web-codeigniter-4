<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class ModelProduct extends Model
{
    protected $table = 'tbl_product';
    // protected $column_order = ['id_category', 'name_category',];
    // protected $column_search = ['name_category'];
    // protected $order = ['id' => 'DESC'];
    protected $mRequest;
    protected $db;
    protected $dt;

    public function __construct(RequestInterface $request)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table($this->table);

    }
    public function Alldata()
    {
        return $this->db->table('tbl_product')
            ->join('tbl_category','tbl_category.id_category=tbl_product.id_category')
            ->join('tbl_unit','tbl_unit.id_unit=tbl_product.id_unit')
            ->orderBy('id_product','Decs')
            ->get()
            ->getResultArray();
    }
    public function InsertData($data) {

        $this->db->table('tbl_product')->insert($data);
    }

    public function UpdateData($data) {
        $this->db->table('tbl_product')
            ->where('id_product', $data['id_product'])
            ->update($data);
    }

    public function DeleteData($data) {
        $this->db->table('tbl_product')
            ->where('id_product', $data['id_product'])
            ->delete($data);
    }
}