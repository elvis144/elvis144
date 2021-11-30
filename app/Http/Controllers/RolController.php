<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){
        return view('rol.index');

    }
    public function create(){
        return view('rol.create');

    }

    public function store(Request $request){

        $request->validate([
            'id_rol' => 'required',
            'nombre' => 'required',
            'cedula' => 'required',
            'descripcion' => 'required',
            'estado' => 'required'
        ]);

        $rol = new rol();

        $rol->id_rol = $request->id_rol;
        $rol->nombre = $request->nombre;
        $rol->cedula = $request->cedula;
        $rol->descripcion = $request->descripcion;
        $rol->estado = $request->estado;

        $rol->save();
        return redirect()->route('rol.show', $rol);
    }
    public function show($rol){
        return view('rol.show',['rol'=>$rol]);

    }
    public function edit(rol $rol){

        return view('rol.edit', compact('rol'));
    }

    public function update(Request $request, rol $rol){

        $request->validate([
            'id_rol' => 'required',
            'nombre' => 'required',
            'cedula' => 'required',
            'descripcion' => 'required',
            'estado' => 'required'
        ]);

        $rol->id_rol = $request->id_rol;
        $rol->nombre = $request->nombre;
        $rol->cedula = $request->cedula;
        $rol->descripcion = $request->descripcion;
        $rol->estado = $request->estado;

        $rol->save();
        return redirect()->route('rol.show', $rol);
    }
}
