@extends('layout')

@section('title')
Tu Mesa - Principal
@stop

@section('content')
<div class="ui segment">
    <h2>Restaurantes más populares</h2>
    <div class="centrado">
    <div class="ui stackable items">
        <div class="item">
            <div class="image">
                <img src="../public/img/restaurante1.jpg">
            </div>
            <div class="content">
                <div class="meta">
                    <div class="ui rating">
                        <i class="icon active"></i>
                        <i class="icon active"></i>
                        <i class="icon active"></i>
                        <i class="icon"></i>
                        <i class="icon"></i>
                    </div>
                </div>
                <div class="name">Restaurante</div>
                <p class="description">Descripción</p>
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="../public/img/restaurante2.jpg">
            </div>
            <div class="content">
                <div class="meta">
                    <div class="ui rating">
                        <i class="icon active"></i>
                        <i class="icon active"></i>
                        <i class="icon active"></i>
                        <i class="icon active"></i>
                        <i class="icon"></i>
                    </div>
                </div>
                <div class="name">Restaurante</div>
                <p class="description">Descripción</p>
            </div>
        </div>
    </div>
    </div>
</div>
@stop