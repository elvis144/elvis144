@extends('layouts.plantilla')

@section('title','rol')

@section('content')
    <h1>Bienvenido a la seccion rol</h1>
    <a href=" {{rol.create}} "> Crear rol </a>
    <br>
    <a href=" {{rol.edit, $rol}} "> Editar rol</a>
    <ul>
        @foreach ($rol as $rol)
            <li>
                <a href="{{ route('rol.show'), $rol->id_rol}}"> {{$rol->nombre}} </a>
            </li>
        @endforeach
    </ul>

    {{ $rol->links }}
@endsection
