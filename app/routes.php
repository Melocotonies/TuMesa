<?php

//PÁGINA PRINCIPAL
Route::get('/', "BaseController@index");

//PÁGINA CON INFORMACIÓN SOBRE Tu Mesa
Route::get('sobreNosotros', "BaseController@sobreNosotros");

/**
 * RUTAS DE RESTAURANTES
 */
//REGISTRO DE RESTAURANTES
Route::post('signin', "ControllerRestaurante@signin");

//INICIO DE SESIÓN DE RESTAURANTES
Route::post('login', "SessionsController@login");

//CIERRE DE SESIÓN DE RESTAURANTES
Route::get('logout', "SessionsController@logout");

//PÁGINA DE INICIO DE RESTAURANTES
Route::get('restaurantes', "ControllerRestaurante@indexRestaurantes")->before('auth');

//PÁGINA OPCIONES DE CUENTA
Route::get('cuenta', "ControllerRestaurante@cuenta");

//PÁGINA DE INFORMACIÓN
Route::get('informacion', "ControllerRestaurante@informacion");

//PÁGINA TU RESTAURANTE
Route::get('tuRestaurante', "ControllerRestaurante@tuRestaurante");

//CAMBAIR CONTRASEÑA
//PÁGINA OPCIONES DE CUENTA
Route::post('changePass', "ControllerRestaurante@changePass");
