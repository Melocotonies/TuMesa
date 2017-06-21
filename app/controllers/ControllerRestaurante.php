<?php

class ControllerRestaurante extends BaseController {

    public function signin() {
        //Comprobamos si es una petición ajax
        if (Request::ajax()) {
            //Obtenemos los datos del formulario
            $input = array(
                'email' => Input::get('email'),
                'nombre' => Input::get('nombre'),
                'password' => Hash::make(Input::get('password'))
            );
            //Creamos un nuevo cliente con los datos del formulario
            $restaurante = new Restaurante($input);
            $restaurante->save();
            if ($restaurante) {
                return Response::json(array('success' => true, 'message' => 'Te has registrado correctamente.'));
            }
        }
    }

    public function indexRestaurantes() {
        $rows = Restaurante::all();
        return View::make('modules/restaurantes/restaurantes')->with('restaurantes', $rows);
    }
    
    public function informacion() {
        return View::make('modules/restaurantes/informacion');
    }
    
    public function tuRestaurante() {
        return View::make('modules/restaurantes/tuRestaurante');
    }

    public function cuenta() {
        return View::make('modules/restaurantes/cuenta');
    }

    public function changePass() {
        //Comprobamos si es una petición ajax
        if (Request::ajax()) {
            //Datos del formulario
            $currentPassword = Input::get('currentPassword');
            $password = Input::get('password');
            
//            $restaurante = Restaurante::find(Auth::user()->id);
            $restaurante = Auth::user();
            //Comprobamos que la contraseña actual introducida es correcta
            if (Hash::check($currentPassword, $restaurante->getAuthPassword())) {
                //Actualizamos la contraseña
                $restaurante->password = Hash::make($password);
                if ($restaurante->save()) {
                    return Response::json(array('success' => true, 'message' => 'La contraseña se ha actualizado correctamente'));
                }
            }else{
                return Response::json(array('success' => false, 'message' => 'La contraseña actual introducida es incorrecta'));
            }
        }
    }

}
