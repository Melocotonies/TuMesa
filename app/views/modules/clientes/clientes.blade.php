@extends('layout')

@section('titulo')
    Clientes
@stop

@section('contenido')
    Clientes:
    <hr>
    @foreach($clientes as $cliente) 
        <p>Nombre: {{ $cliente->nombre }}</p>
        <p>Apellidos: {{ $cliente->apellidos }}</p>
        <hr>
    @endforeach
@stop