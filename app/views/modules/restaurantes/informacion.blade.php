@extends('layout')

@section('title')
Tu Mesa - Cuenta
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
    <h2>Tipo de restaurante</h2>
    <a>{{Auth::user()->tipo;}}</a>
    <h2>Ubicación</h2>
    <div>C/ {{Auth::user()->calle;}}, {{Auth::user()->num;}} {{Auth::user()->cp;}} {{Auth::user()->ciudad;}}</div> 
    <div>Mapa aquí</div>
    <div class="ui two column divided grid">
        <div class="row">
            <div class="column">
                <h2>¿Cómo llegar?</h2>
                <h2>Formas de pago</h2>
                <h2>Otros datos</h2>
                <h4>Zona de fumadores: {{Auth::user()->zonaFumadores}}</h4>
                <h4>Número máximo de personas: {{Auth::user()->maxPersonas}}</h4>
                <h2>Contacto</h2>
                <h4>Teléfono: {{Auth::user()->telefono}}</h4>
                <h4>Correo electrónico: {{Auth::user()->correo}}</h4>
            </div>
            <div class="column">
                <h2>Horarios</h2>
                <h4>Desayunos de ... a ...</h4>
                <h4>Comidas de ... a ...</h4>
                <h4>Cenas de ... a ...</h4>
                <h4>Cerrado en ...</h4>
            </div>
        </div>
    </div>
</div>
@stop