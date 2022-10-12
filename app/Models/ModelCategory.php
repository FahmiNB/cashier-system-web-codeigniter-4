<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Model;

class ModelCategory extends Model
{
    protected $table = 'tbl_category';
    protected $column_order = ['id_category', 'name_category',];
    protected $column_search = ['name_category'];
    protected $order = ['id' => 'DESC'];
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

    function showData($keyword = null, $start = 0, $length = 0 )
    {
        $builder = $this->table("tbl_category");
        if ($keyword) {
            $arr_keyword = explode(" ", $keyword);
            for ($x = 0; $x < count($arr_keyword); $x++) {

                $builder = $builder->orLike('name_category', $arr_keyword[$x]);
            }
        }
        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        return $builder->orderBy('name_category', 'asc')->get()->getResult();
    }

    // public function book_add($data) {
         
    //     $query = $this->db->table($this->table)->insert($data);
        
    //     return $this->db->insertID();
    // }

    public function Alldata()
    {
        return $this->db->table('tbl_category')
            ->get()
            ->getResultArray();

    }

    private function getDatatablesQuery()
    {
         
        {
            $i = 0;
            foreach ($this->column_search as $item) {
                if ($this->request->getPost('search')['value']) {
                    if ($i === 0) {
                        $this->dt->groupStart();
                        $this->dt->like($item, $this->request->getPost('search')['value']);
                    } else {
                        $this->dt->orLike($item, $this->request->getPost('search')['value']);
                    }
                    if (count($this->column_search) - 1 == $i)
                        $this->dt->groupEnd();
                }
                $i++;
            }
    
            if ($this->request->getPost('order')) {
                $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
            } else if (isset($this->order)) {
                $order = $this->order;
                $this->dt->orderBy(key($order), $order[key($order)]);
            }
    }
}
 
    public function getDatatables()
    {
        $this->getDatatablesQuery();
        if ($this->request->getPost('length') != -1)
            $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
        $query = $this->dt->get();
        return $query->getResult();
    }

    public function countFiltered()
    {
        $this->getDatatablesQuery();
        return $this->dt->countAllResults();
    }

    public function countAll()
    {
        $tbl_storage = $this->db->table($this->table);
        return $tbl_storage->countAllResults();
    }
 

    public function InsertData($data) {

        $this->db->table('tbl_category')->insert($data);
    }

    public function UpdateData($data) {
        $this->db->table('tbl_category')
            ->where('id_category', $data['id_category'])
            ->update($data);
    }

    public function DeleteData($data) {
        $this->db->table('tbl_category')
            ->where('id_category', $data['id_category'])
            ->delete($data);
    }
}