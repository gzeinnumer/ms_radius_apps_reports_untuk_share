<?php

namespace App\Http\Controllers;

use App\Models\CronJobTaskModel;
use Illuminate\Http\Request;

class CronJobTaskController extends Controller
{
    function index()
    {
        $sent = ['data' => CronJobTaskModel::orderBy('id', 'desc')->get()];
        return view('cronjobtask.index', $sent);
    }
}
