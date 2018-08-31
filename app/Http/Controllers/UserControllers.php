<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index(){  return view('Home/index');}
  
    public function menu(){  return view('Home/menu')->with('/public/images');}
  
}
