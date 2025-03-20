<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function products()
  {
    return view('products');
  }

  public function register()
  {
    return view('register');
  }

public function  productId()
  {
    return view(' productId');
  }
 
}

