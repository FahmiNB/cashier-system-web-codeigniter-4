<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCategory;
use App\Models\ModelProduct;
use App\Models\ModelUnit;
use App\Models\ModelAdmin;
use App\Models\ModelReport;
use Config\Services;
class Report extends BaseController
{
    public function __construct()
    {
        $request = Services::request();
        $this->ModelProduct = new ModelProduct($request);
        $this->ModelCategory = new ModelCategory($request);
        $this->ModelUnit = new ModelUnit();
        $this->ModelAdmin = new ModelAdmin();
        $this->ModelReport = new ModelReport();
        
    }

    public function PrintDataProduct()
    {
        $data = [
            'title' => 'Report data Product',
            'Product' => $this->ModelProduct->AllData(),
            'web' => $this->ModelAdmin->DetailData(),
            'page' => 'report/v_print_report_product'
       ];
       return view('report/v_template_print_report', $data);
    }


    public function ReportDays()
    {
        $data = [
            'tittle' => 'Report',
            'subTittle' => 'Report Days',
            'menu' => 'Report',
            'submenu' => 'Report-Days',
            'page' => 'Report/v_report_days',
            'Category' => $this->ModelCategory->AllData(),
       ];
       return view('v_template', $data);
    }

    public function ViewReportDays()
    {
        $date = $this->request->getPost('date');
        $data = [
            'dataDays' => $this->ModelReport->DataDays($date),
            'web' => $this->ModelAdmin->DetailData(),
            'title' => 'Report Days',
            'date' => $date,
        ];

        $response = [
            'data' => view('report/v_table_report_days', $data)
        ];

        echo json_encode($response);
    }

    public function PrintDataDays($date)
    {
        $data = [
            'title' => 'Report data Days',
            'web' => $this->ModelAdmin->DetailData(),
            'page' => 'report/v_print_report_days',
            'dataDays' => $this->ModelReport->DataDays($date),

       ];
       return view('report/v_template_print_report', $data);
    }

    public function ReportMonth()
    {
        $data = [
            'tittle' => 'Report',
            'subTittle' => 'Report Month',
            'menu' => 'Report',
            'submenu' => 'Report-Month',
            'page' => 'Report/v_report_month',
            'Category' => $this->ModelCategory->AllData(),
       ];
       return view('v_template', $data);
    }

    public function ViewReportMonth()
    {
        $month = $this->request->getPost('month');;
        $year = $this->request->getPost('year');;
        $data = [
            'dataMonth' => $this->ModelReport->DataMonth($month, $year),
            'web' => $this->ModelAdmin->DetailData(),
            'title' => 'Report Month',
            'month' => $month,
            'year' => $year,
        ];

        $response = [
            'data' => view('report/v_table_report_month', $data)
        ];

        echo json_encode($response);
    }

    public function PrintDataMonth($month, $year)
    {
        $data = [
            'title' => 'Report data month',
            'web' => $this->ModelAdmin->DetailData(),
            'page' => 'report/v_print_report_month',
            'dataMonth' => $this->ModelReport->DataMonth($month, $year),
            'month' => $month,
            'year' => $year,
       ];
       return view('report/v_template_print_report', $data);
    }

    public function ReportYear()
    {
        $data = [
            'tittle' => 'Report',
            'subTittle' => 'Report Year',
            'menu' => 'Report',
            'submenu' => 'Report-Year',
            'page' => 'Report/v_report_year',
            'Category' => $this->ModelCategory->AllData(),
       ];
       return view('v_template', $data);
    }

    public function ViewReportYear()
    {
        $year = $this->request->getPost('year');
        $data = [
            'dataYear' => $this->ModelReport->DataYear( $year),
            'web' => $this->ModelAdmin->DetailData(),
            'title' => 'Report Year',
            'year' => $year,
        ];

        $response = [
            'data' => view('report/v_table_report_year', $data)
        ];

        echo json_encode($response);
        // echo dd($this->ModelReport->DataYear(2022));
    }

    public function PrintDataYear($year)
    {
        $data = [
            'title' => 'Report data year',
            'web' => $this->ModelAdmin->DetailData(),
            'page' => 'report/v_print_report_year',
            'dataYear' => $this->ModelReport->DataYear($year),
            'year' => $year,
       ];
       return view('report/v_template_print_report', $data);
    }
}