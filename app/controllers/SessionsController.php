<?php

class SessionsController extends BaseController {

    public function login() {
        //Comprobamos si es una petición ajax
        if (Request::ajax()) {
            //Obtenemos los datos del formulario
            $input = Input::all();
            //Validamos los datos
            $attempt = Auth::attempt([
                        'email' => $input['email'],
                        'password' => $input['password']
            ]);

            if ($attempt) {
                return Response::json(array('success' => true, 'message' => 'ok'));
            }
            return Response::json(array('success' => false, 'message' => 'Los datos de inicio de sesión son incorrectos'));
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::guest('/');
    }

}
