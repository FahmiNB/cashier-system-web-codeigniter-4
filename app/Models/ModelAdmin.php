<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function DetailData()
    {
        return $this->db->table('tbl_setting')
            ->where('id','1')
            ->get()
            ->getRowArray();
    }

    public function UpdateData($data) {
        $this->db->table('tbl_setting')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function chart()
    {
        return $this->db->table("tbl_detail_sell")
        ->join('tbl_sell','tbl_sell.no_code=tbl_detail_sell.no_code')
        ->where('month(tbl_sell.date_sell)', date('m'))
        ->where('year(tbl_sell.date_sell)', date('Y'))
        ->select('tbl_sell.date_sell')
        ->groupBy('tbl_detail_sell.code_product')
        ->selectSum('tbl_detail_sell.total_price')
        ->selectSum('tbl_detail_sell.profit')
        ->get()->getResultArray();
    }

    public function IncomeToday()
    {
        return $this->db->table("tbl_detail_sell")
        ->join('tbl_sell','tbl_sell.no_code=tbl_detail_sell.no_code')
        ->where('tbl_sell.date_sell', date('Y-m-d'))
        ->groupBy('tbl_sell.date_sell')
        ->selectSum('tbl_detail_sell.total_price')
        ->get()->getRowArray();
    }

    public function IncomeMonth()
    {
        return $this->db->table("tbl_detail_sell")
        ->join('tbl_sell','tbl_sell.no_code=tbl_detail_sell.no_code')
        ->where('month(tbl_sell.date_sell)', date('m'))
        ->where('year(tbl_sell.date_sell)', date('Y'))
        ->groupBy('month(tbl_sell.date_sell)')
        ->selectSum('tbl_detail_sell.total_price')
        ->get()->getRowArray(); 
    }

    public function IncomeYear()
    {
        return $this->db->table("tbl_detail_sell")
        ->join('tbl_sell','tbl_sell.no_code=tbl_detail_sell.no_code')
        ->where('year(tbl_sell.date_sell)', date('Y'))
        ->groupBy('year(tbl_sell.date_sell)')
        ->selectSum('tbl_detail_sell.total_price')
        ->get()->getRowArray(); 
    }
    public function TotalProduct()
    {
        return $this->db->table('tbl_product')->countAll();
    }

    public function TotalCategory()
    {
        return $this->db->table('tbl_category')->countAll();
    }

    public function TotalUnit()
    {
        return $this->db->table('tbl_unit')->countAll();
    }

    public function TotalUser()
    {
        return $this->db->table('tbl_user')->countAll();
    }

}
