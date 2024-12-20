<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function LoginView()
    {
        return view('login');
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        // Obtener datos del formulario
        $email = $this->request->getPost('Email');
        $password = $this->request->getPost('Contraseña');

        // Buscar usuario en la base de datos por el campo 'Email'
        $user = $model->where('Email', $email)->first();
        if ($user) {
            // Verificar la contraseña
            if (password_verify($password, $user['Contraseña'])) {
                // Si los datos coinciden, establecer la sesión y redirigir a 'menu.php'
                $session->set('Email', $user['Email']);
                $session->set('Nombre', $user['Nombre']); 
                $session->set('ID_Usuario', $user['ID_Usuario']); 
                return redirect()->to('/menu');
            } else {
                $session->setFlashdata('error', 'Usuario no encontrado.');
                return view('login'); 
            }
        }
    }

    public function RetRes()
    {
        return view('Register');
    }

}