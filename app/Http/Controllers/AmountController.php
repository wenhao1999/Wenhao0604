<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amount;
class AmountController extends Controller
{
    public function index()
    {
       $amounts = Amount::all();
       return view('google-achart-chart',['amounts' => $amounts]);   
    }
}
