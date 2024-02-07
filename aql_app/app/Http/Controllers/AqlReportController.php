<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AqlReportController extends Controller
{
    public function index()
    {
        return view('aql_report_1');
    }

    public function make_comment()
    {
        return view('aql_report_2');
    }
}
