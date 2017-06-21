@extends('layout')

@section('title')
Tu Mesa - Cuenta
@stop

@section('content')
<div class="ui segment">
    <h2>Cuenta</h2>
    <div class="ui small form cuenta">
        <div class="field">
            <label>Nombre del restaurante<a href="editarNombre"><i class="pencil icon"></i></a></label>
            <input type="text" placeholder="{{Auth::user()->nombre;}}" disabled>
        </div>
        <div class="field">
            <label>Correo electrónico<a href="editarCorreo"><i class="pencil icon"></i></a></label>
            <input type="text" placeholder="{{Auth::user()->email;}}" disabled>
        </div>
        <div class="field">
            <div class="ui tiny teal button changePass"><h5>Cambiar contraseña</h5></div>
        </div>
        <div class="field">
            <div class="ui left floated tiny teal button delete"><h5>Borrar cuenta</h5></div>
            <div class="ui right small floated teal button delete"><h5>Guardar</h5></div>
        </div>
    </div>
</div>

<!-- FORMULARIO CAMBIAR CONTRASEÑA -->
<form class="ui small modal changePass">
    <div class="ui inverted black header form">
        <i class="close icon"></i>
        <div class="tituloModal">Cambiar contraseña</div>
    </div>
    <div class="content form">
        <div class="ui form changePass">
            <div class="field">
                <div class="ui left labeled icon input">
                    <input type="password" name="currentPassword" placeholder="Contraseña actual">
                    <i class="lock icon"></i>
                </div>
            </div>
            <div class="field">
                <div class="ui left labeled icon input">
                    <input type="password" name="password" placeholder="Nueva contraseña">
                    <i class="lock icon"></i>
                </div>
            </div>
            <div class="field">
                <div class="ui left labeled icon input">
                    <input type="password" name="password2" placeholder="Repite la nueva contraseña">
                    <i class="lock icon"></i>
                </div>
            </div>
            <div class="botonFormulario">
                <div class="ui small teal submit button">Cambiar</div>
            </div>
        </div>
    </div>
</form>
@stop