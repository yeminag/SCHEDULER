<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materiaMallaController extends Controller{
    public function index(){
        $materiaMalla = carrera::all();
        return $materiaMalla;
    }

    public function store(Request $request){
        $materiaMalla = materiaMalla::create(create($request->all()));
        return $materiaMalla;
        }
}
