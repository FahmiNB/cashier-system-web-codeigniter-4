<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class ModelUnitAjax extends Model
{
    protected $table      = 'tbl_Unit';
    protected $primaryKey = 'id_unit';
}
