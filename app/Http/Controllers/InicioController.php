<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("inicio");
    }
    public function jueg(){
        return view("juegos");
    }
}


