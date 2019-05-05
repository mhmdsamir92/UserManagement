<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class companyController extends Controller
{
  
  public function __construct()
  {
    $this->middleware('auth:company');
  }

  public function index()
  {
  	return view('company');

  }
    

 
}