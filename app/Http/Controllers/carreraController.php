<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carreraController extends Controller{
    public function index(){
        $carrera = carrera::all();
        return $carrera;
    }

    public function store(Request $request){
        $carrera = carrera::create(create($request->all()));
        return $carrera;
        }
}
