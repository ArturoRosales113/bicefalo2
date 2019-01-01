<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
     return view('frontend.home.home');
    }
    public function nosotros()
    {
     return view('frontend.nosotros.nosotros');
    }
    public function servicios()
    {
     return view('frontend.servicios.servicios');
    }

    public function contacto()
    {
     return view('frontend.contacto.contacto');
    }

}
