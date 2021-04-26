<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueTesteController extends Controller
{
  public function index()
  {
    return view('teste_vue');
  }
}
