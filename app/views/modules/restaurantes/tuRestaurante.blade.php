@extends('layout')

@section('title')
Tu Mesa - {{Auth::user()->nombre;}}
@stop

@section('content')
<div class="ui inverted small menu block menuRestaurante">
    <a class="active item">
        <i class="home icon"></i> Inicio
    </a>
    <a class="item">
        <i class="text file icon"></i> Carta
    </a>
    <a class="item">
        <i class="info letter icon"></i> Información
    </a>
    <a class="item">
        <i class="food icon"></i> Tu restaurante
    </a>
</div>
<div class="ui segment">
    <div class="ui two column divided grid">
        <div class="row">
            <div class="column">
                <h2>Mesas</h2>
                <input type="number" placeholder="Número de mesas">
            </div>
            <div class="column">
                <div class="ui segment">

                </div>
            </div>
        </div>
    </div>
</div>
@stop