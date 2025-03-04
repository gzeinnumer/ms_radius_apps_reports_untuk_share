<?php

namespace App\Http\Controllers;

use App\Models\ReportsModel;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    function index()
    {
        $sent = ['data' => ReportsModel::orderBy('id', 'desc')->get()];
        return view('reports.index', $sent);
    }
}
