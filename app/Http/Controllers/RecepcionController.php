<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecepcionController extends Controller
{
    public function index(){
        return view('recepcion.index');

    }
    public function create(){
        return view('recepcion.create');

    }
    public function show($recepcion){
        return view('recepcion.show',['recepcion'=>$recepcion]);

    }
}
