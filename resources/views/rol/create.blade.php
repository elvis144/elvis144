@extends('layouts.plantilla')

@section('title','Crear rol')

@section('content')
    <h1>En esta seccion podras agregar un rol</h1>
    <form action="{{ route('rol.store') }}" method="POST">
        @csrf
        <label for="">
            Id_rol: <input type="text" name="id_rol" value="{{old('id_rol')}}">
        </label>
        <br>
        
        <label for="">
            Nombre: <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        <br>
        <label for="">
            Cedula: <input type="text" name="cedula" value="{{old('cedula')}}">
        </label>
        @error('cedula')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label for="">
            descripcion: <input type="number" name="descripcion" value="{{old('descripcion')}}">
        </label>
        <br>
        <label for="">
            estado: <input type="text" name="estado" value="{{old('estado')}}">
        </label>
        <br>
        <button type="submit">REGISTRAR</button>
    </form>
@endsection
