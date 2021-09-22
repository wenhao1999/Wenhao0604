<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
class DataController extends Controller
{
    public function index()
    {
       $data = Data::all();
       return view('google-ba-chart',['data' => $data]);   
    }
}
