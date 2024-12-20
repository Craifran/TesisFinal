<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;  // Asegúrate de tener un modelo para los usuarios

class PerfilController extends BaseController
{
    public function valida()
    {
        // Verifica la sesión antes de permitir el acceso a la vista
        $session = session();
        if (!$session->has('user')) {
            return view('perfil');
        }
        return view('perfil');
    }

    /*public function update()
    {
        // Cargar el modelo de usuario
        $userModel = new UserModel();

        // Obtener los datos del formulario
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hasheando la contraseña
        ];

        // Actualizar el usuario en la base de datos
        $userModel->update(session()->get('user_id'), $data);

        // Redirigir a la vista perfil con un mensaje de éxito
        return redirect()->to('perfil')->with('message', 'Información actualizada correctamente.');
    }*/

    public function update()
    {
        $session = session();
        
        $model = new UserModel();
        $email = $this->request->getPost('email');

        $data = [
            'id' => $this->request->getPost('id'),
            'Email' => $this->request->getPost('email'),
            'Nombre' => $this->request->getPost('nombre'),
            'Patente' => $this->request->getPost('patente'),
            'Contraseña' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Asegúrate de que la contraseña se está encriptando correctamente
        ];
        var_dump($data);
        
        $model = new UserModel();

        $model->UpdateUser ($data);

        $user = $model->where('Email', $email)->first();
        $session->set('Email', $user['Email']);
        $session->set('Nombre', $user['Nombre']); 
        $session->set('ID_Usuario', $user['ID_Usuario']); 

        return redirect()->to('/menu');
    }
    


    public function RetMen()
    {
        $session = session();
        
        // Get all session data
        $data['user'] = $session->get();
    
        // Check if the user is logged in by checking specific session variables
        if (isset($data['user']['Email']) && !empty($data['user']['Email'])) {
            // Redirect to the menu view if the user is logged in
            return view('menu', $data);
        } else {
            // Redirect to the login page if the user is not logged in
            return redirect()->to('/login');
        }
    }
}
