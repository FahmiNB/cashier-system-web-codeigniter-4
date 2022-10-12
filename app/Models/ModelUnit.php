<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class ModelUnit extends Model
{
    protected $table = 'tbl_unit';
    protected $primaryKey = 'id_unit';
    protected $alloweFields = [
        'name_unit'
    ];
    // protected $column_order = ['id_unit', 'name_unit',];
    // protected $column_search = ['name_unit'];
    // protected $order = ['id' => 'DESC'];
    // protected $request;
    

    function searchAndDisplay($keyword = null, $start = 0, $length = 0 )
    {
        $builder = $this->table("tbl_unit");
        if ($keyword) {
            $arr_keyword = explode(" ", $keyword);
            for ($x = 0; $x < count($arr_keyword); $x++) {
                
                $builder = $builder->orLike('name_unit', $arr_keyword[$x]);
            }
        }
        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        return $builder->orderBy('name_unit')->get()->getResult();
    }

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'name_unit'   => 'required|min_length[10]|max_length[60]',
        'title'       => 'required|min_length[10]|max_length[60]',
        'author'      => 'required',
        'description' => 'required|min_length[10]|max_length[200]',
    ];
    

    

    public function Alldata()
    {
        return $this->db->table('tbl_unit')
            ->get()
            ->getResultArray();

    }
    public function InsertData($data) {

        $this->db->table('tbl_unit')->insert($data);
    }

    public function UpdateData($data) {
        $this->db->table('tbl_unit')
            ->where('id_unit', $data['id_unit'])
            ->update($data);
    }

    public function DeleteData($data) {
        $this->db->table('tbl_unit')
            ->where('id_unit', $data['id_unit'])
            ->delete($data);
    }

    
}
