@extends('layout')

@section('title')
Tu Mesa - {{Auth::user()->nombre;}}
@stop

@section('content')
<!--<a class="ui green label" href="mailto:{{Auth::user()->email;}}?Subject=Hello%20again">
  {{Auth::user()->nombre;}}
</a>-->
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
    <h2>Conócenos</h2>
    <p>{{Auth::user()->descripcion;}}</p>
    <div class="centrado">
        <div class="ui left floated segment">
            <h4>Fotos</h4>
        </div>
        <div class="ui right floated segment">
            <h4>Vídeos</h4>
        </div>
    </div>
</div>
@stop