<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarpetasController extends Controller
{
    public function index(){
        return view('carpetas.index');

    }
    public function create(){
        return view('carpetas.create');

    }
    public function show($carpetas){
        return view('carpetas.show',['carpetas'=>$carpetas]);

    }
}
