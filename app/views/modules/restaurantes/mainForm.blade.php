@extends('restaurantes')

@section('descripcion')
<div class="ui form">
    <div class="field">
        <label>Descríbelo</label>
        <textarea></textarea>
    </div>
    <div class="botonFormulario">
        <div class="ui small teal animated button siguiente2">
            <div class="visible content">Siguiente</div>
            <div class="hidden content">
                <i class="right arrow icon"></i>
            </div>
        </div>
    </div>
</div>
@stop
@section('tipo')
@stop
@section('direccion')
@stop
@section('contacto')
@stop
@section('horarios')
@stop
@section('formasDePago')
@stop
@section('otrosDatos')
@stop
@section('fotos')
@stop
@section('videos')
@stop
@section('distribucion')
@stop
@section('tema')
@stop

@section('forms')
<form class="ui small modal datosRestaurante1">
    <div class="ui inverted black header form">
        <div class="tituloModal">Completa tu perfil en unos pocos pasos</div>
    </div>
    <div class="content form">
        <div class="ui form">
            <div class="field">
                <label>Nombre del restaurante</label>
                <input type="text" value="{{Auth::user()->nombre;}}" disabled>
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Descríbelo</label>
                    <textarea></textarea>
                </div>
                <div class="grouped field">
                    <label>Clasifícalo</label>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="tipo">
                            <label>Bufete</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="tipo">
                            <label>Comida italiana</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="tipo">
                            <label>Comida china</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="tipo">
                            <label>Comida japonesa</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="botonFormulario">
                <div class="ui small teal animated button siguiente2">
                    <div class="visible content">Siguiente</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form class="ui small modal datosRestaurante2">
    <div class="ui inverted black header form">
        <div class="tituloModal">Datos de contacto</div>
    </div>
    <div class="content form">
        <div class="ui form login">
            <div class="field">
                <label>Dirección</label>
                <input type="text">
            </div>
            <div class="field">
                <label>Horarios</label>
                <div class="two fields">
                    <div class="field">
                        <label>Desayunos de </label>
                        <input type="number" id="stepper1" min="00" max="24" value="00" size="2">
                    </div>
                    <div class="field">
                        <label>a </label>
                        <input type="number" id="stepper1" min="00" max="24" value="00" size="2">
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Comidas de </label>
                        <input type="number" id="stepper1" min="00" max="24" value="00" size="2">
                    </div>
                    <div class="field">
                        <label>a </label>
                        <input type="number" id="stepper1" min="00" max="24" value="00" size="2">
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Cenas de </label>
                        <input type="number" id="stepper1" min="00" max="24" value="00" size="2">
                    </div>
                    <div class="field">
                        <label>a </label>
                        <input type="number" id="stepper1" min="00" max="24" value="00" size="2">
                    </div>
                </div>
                <label>Cerrado en </label>
                <div class="fields">
                    <div class="ui selection dropdown">
                        <input type="hidden" name="gender">
                        <div class="default text">Meses</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="1">Enero</div>
                            <div class="item" data-value="0">Febrero</div>
                            <div class="item" data-value="1">Marzo</div>
                            <div class="item" data-value="0">Abril</div>
                            <div class="item" data-value="1">Mayo</div>
                            <div class="item" data-value="0">Junio</div>
                            <div class="item" data-value="1">Julio</div>
                            <div class="item" data-value="0">Agosto</div>
                            <div class="item" data-value="1">Septiembre</div>
                            <div class="item" data-value="0">Octubre</div>
                            <div class="item" data-value="1">Noviembre</div>
                            <div class="item" data-value="0">Diciembre</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="botonFormulario">
                <div class="ui icon buttons">
                    <div class="ui small teal animated button anterior1">
                        <div class="visible content">Anterior</div>
                        <div class="hidden content">
                            <i class="left arrow icon"></i>
                        </div>
                    </div>
                    <div class="ui bottom attached small teal animated button siguiente3">
                        <div class="visible content">Siguiente</div>
                        <div class="hidden content">
                            <i class="right arrow icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop