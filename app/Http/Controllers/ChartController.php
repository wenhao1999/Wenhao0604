<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart;

class ChartController extends Controller
{
    public function index()
    {
       $charts = Chart::all();
       return view('google-bars-chart',['charts' => $charts]);   
    }
}
