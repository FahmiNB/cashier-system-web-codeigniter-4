<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSell extends Model
{
    public function NoCode()
    {
        $date = date('Ymd');
        $query = $this->db->query("SELECT MAX(RIGHT(no_code,4)) as no_sort from tbl_sell where Date(date_sell)='$date'");
        $result = $query->getRowArray();
        if ($result['no_sort'] > 0) {
            $tmp = $result['no_sort'] + 1;
            $kd = sprintf("%04s", $tmp);
        } else {
            $kd = "0001";
        }
        $no_code = date("Ymd") . $kd ;
        return $no_code;

    }

    public function CheckProduct($code_product)
    {
        return $this->db->table('tbl_product')
            ->join('tbl_category','tbl_category.id_category=tbl_product.id_category')
            ->join('tbl_unit','tbl_unit.id_unit=tbl_product.id_unit')
            ->where('code_product',$code_product)
            ->get()
            ->getRowArray();

    }

    public function AllProduct()
    {
        return $this->db->table('tbl_product')
            ->join('tbl_category','tbl_category.id_category=tbl_product.id_category')
            ->join('tbl_unit','tbl_unit.id_unit=tbl_product.id_unit')
            ->orderBy('id_product', 'DESC')
            ->where('stock > 0')
            ->get()
            ->getResultArray();
    }
    
    public function InsertSell($data)
    {
        $this->db->table('tbl_sell')->insert($data);
    }

    public function InsertDetailSell($data)
    {
        $this->db->table('tbl_detail_sell')->insert($data);
    }
    
}