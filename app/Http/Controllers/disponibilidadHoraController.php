<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class disponibilidadHoraController extends Controller{
    public function index(){
        $disponibilidadHora = carrera::all();
        return $disponibilidadHora;
    }

    public function store(Request $request){
        $disponibilidadHora = disponibilidadHora::create(create($request->all()));
        return $disponibilidadHora;
        }
}
