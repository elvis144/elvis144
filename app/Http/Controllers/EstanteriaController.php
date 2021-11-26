<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstanteriaController extends Controller
{
    public function index(){
        return view('estanteria.index');

    }
    public function create(){
        return view('estanteria.create');

    }
    public function show($estanteria){
        return view('estanteria.show',['estanteria'=>$estanteria]);

    }
}
