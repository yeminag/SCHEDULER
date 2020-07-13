<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materiaController extends Controller{
    public function index(){
        $materia = materia::all();
        return $materia;
    }

    public function store(Request $request){
        $materia = materia::create(create($request->all()));
        return $materia;
        }
}
