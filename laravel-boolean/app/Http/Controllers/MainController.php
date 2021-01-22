<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function holaTodos() {
    $hombre = 'Marco';
    $mujer = 'Veronica';
    return view('saludos', compact('hombre', 'mujer'));
  }
}
