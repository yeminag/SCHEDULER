<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aulaController extends Controller{
    public function index(){
        $aula = aula::all();
        return $aula;
    }

    public function store(Request $request){
        $aula = aula::create(create($request->all()));
        return $aula;
        }

}
