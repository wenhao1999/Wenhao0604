<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Total;
class TotalController extends Controller
{
    public function index()
    {
       $totals = Total::all();
       return view('google-b-chart',['totals' => $totals]);   
    }
}
