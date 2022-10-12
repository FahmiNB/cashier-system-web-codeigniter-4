<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelReport extends Model
{
    public function DataDays($date) 
    {
        return $this->db->table("tbl_detail_sell")
        ->join('tbl_product','tbl_product.code_product=tbl_detail_sell.code_product')
        ->join('tbl_sell','tbl_sell.no_code=tbl_detail_sell.no_code')
        ->where('tbl_sell.date_sell', $date)
        ->select('tbl_detail_sell.code_product')
        ->select('tbl_product.name_product')
        ->select('tbl_detail_sell.modal')
        ->select('tbl_detail_sell.selling_price')
        ->groupBy('tbl_detail_sell.code_product')
        ->selectSum('tbl_detail_sell.qty')
        ->selectSum('tbl_detail_sell.total_price')
        ->selectSum('tbl_detail_sell.profit')
        ->get()->getResultArray();
    }

    public function DataMonth($month, $year) 
    {
        return $this->db->table("tbl_detail_sell")
        ->join('tbl_sell','tbl_sell.no_code=tbl_detail_sell.no_code')
        ->where('month(tbl_sell.date_sell)', $month)
        ->where('year(tbl_sell.date_sell)', $year)
        ->select('tbl_sell.date_sell')
        ->groupBy('tbl_detail_sell.code_product')
        ->selectSum('tbl_detail_sell.total_price')
        ->selectSum('tbl_detail_sell.profit')
        ->get()->getResultArray();
    }

    public function DataYear($year) 
    {
        return $this->db->table("tbl_detail_sell")
        ->join('tbl_sell','tbl_sell.no_code=tbl_detail_sell.no_code')
        ->where('year(tbl_sell.date_sell)', $year)
        ->select('month(tbl_sell.date_sell)as month')
        ->groupBy('month(tbl_detail_sell.code_product)')
        ->selectSum('tbl_detail_sell.total_price')
        ->selectSum('tbl_detail_sell.profit')
        ->get()->getResultArray();
    }
}
