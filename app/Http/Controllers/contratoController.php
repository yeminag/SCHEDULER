<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contratoController extends Controller{
    public function index(){
        $carrera = carrera::all();
        return $carrera;
    }
}
