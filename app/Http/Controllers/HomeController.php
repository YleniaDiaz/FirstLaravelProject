<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  //__invoke() el controlador solo tiene una ruta
  public function __invoke()
  {
    return view('home');
  }
}
