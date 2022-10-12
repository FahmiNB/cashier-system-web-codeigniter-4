<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUnit;
use App\Models\ModelUnitAjax;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\RequestInterface;

class UnitAjax extends BaseController
{

    public function index()
    {
        $unit = new ModelUnitAjax;
        $data = [
            'tampilUnitAjax' => $unit->findAll()
       ];

       d($unit->findAll());
    }

}