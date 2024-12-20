<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuario'; 
    protected $primaryKey = 'ID_Usuario';
    protected $allowedFields = ['Nombre', 'Email', 'Contraseña']; // Eliminado 'Patente'

    public function register($data)
    {
        // Prepare the data to be inserted
        $data = [
            'Nombre' => $data['Nombre'],
            'Contraseña' => $data['Contraseña'],
            'Email' => $data['Email']
        ];

        // Insert the data into the database
        return $this->insert($data);
    }

    public function search()
    {
        return $this->orderBy('ID_Usuario', 'DESC')->first();
    }

    public function UpdateUser ($data)
    {
        // Update the user data in the database
        $this->update($data['id'], [
            'Nombre' => $data['Nombre'],
            'Email' => $data['Email'],
            'Contraseña' => $data['Contraseña']
        ]);

        return true;
    }

    public function retrieveName($userId){
        $user = $this->find($userId);
        return $user['Nombre'];
    }
}