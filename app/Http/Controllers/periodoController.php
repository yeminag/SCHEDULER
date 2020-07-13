<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class periodoController extends Controller{
    public function index(){
        $periodo = periodo::all();
        return $periodo;
    }

    public function store(Request $request){
        $periodo = periodo::create(create($request->all()));
        return $periodo;
        }
}
