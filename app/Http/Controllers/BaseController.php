<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Base;
class BaseController extends Controller
{
    public function index()
    {
       $bases = Base::all();
       return view('google-a-chart',['bases' => $bases]);   
    }
}
