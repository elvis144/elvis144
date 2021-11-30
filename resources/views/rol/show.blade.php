@extends('layouts.plantilla')

@section('title','rol '. $rol->nombre)

@section('content')
    <h1> Bienvenido a la seccion rol: {{ $rol->nombre }}</h1>
@endsection
