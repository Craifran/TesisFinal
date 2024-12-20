<?php

namespace App\Controllers;

use App\Models\UserModel;  

class RegisterController extends BaseController
{
    public function index(){
        return view('register');
    }

    public function register()
    {
        // Toma los datos
        $Nombre = $this->request->getPost('Nombre');
        $Contraseña = $this->request->getPost('Contraseña');
        $Email = $this->request->getPost('Email');

        // Hashea la contraseña
        $hashedPassword = password_hash($Contraseña, PASSWORD_DEFAULT);

        // Instancia un usermodel nuevo
        $model = new UserModel();

        // Llama la funcion registro del modelo
        $data = [
            'Nombre'=> $Nombre,
            'Contraseña' => $hashedPassword,
            'Email' => $Email
        ];

        $model->register($data);
        return view('Login');
    }
}