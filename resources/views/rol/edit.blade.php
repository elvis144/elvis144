@extends('layouts.plantilla')

@section('title','Editar rol')

@section('content')
    <h1>En esta seccion podras editar un rol</h1>
    <form action="{{ route('rol.update', $rol) }}" method="POST">
        @csrf
        @method('put')
        <label for="">
            Id rol: <input type="text" name="id_rol" value="{{old('id_rol', $rol->id_rol)}} ">
        </label>
        <br>
        <label for="">
            Nombre: <input type="text" name="nombre" value=" {{old('nombre', $rol->nombre)}} ">
        </label>
        <br>
        <label for="">
            Cedula: <input type="text" name="cedula" value=" {{old('cedula', $rol->cedula)}} ">
        </label>
        <br>
        <label for="">
            descripcion: <input type="text" name="descripcion" value=" {{old('descripcion', $rol->descripcion)}} ">
        </label>
        <br>
        <label for="">
            estado: <input type="number" name="estado" value=" {{old('estado', $rol->estado)}} ">
        </label>
        <br>
        <button type="submit">ACTUALIZAR</button>
    </form>
@endsection
