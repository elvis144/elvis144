<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        return view('departamento.index');

    }
    public function create(){
        return view('departamento.create');

    }
    public function show($departamento){
        return view('departamento.show',['departamento'=>$departamento]);

    }
}
