<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nivelController extends Controller{
    public function index(){
        $nivel = nivel::all();
        return $nivel;
    }

    public function store(Request $request){
        $nivel = nivel::create(create($request->all()));
        return $nivel;
        }
}
