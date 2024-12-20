<?php 
namespace App\Models;

use CodeIgniter\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo'; 
    protected $primaryKey = 'id_vehiculoDato ';
    protected $allowedFields = ['ID_Usuario','Patente'];

    public function register($data, $id_Data)
    {
        // Prepare the data to be inserted
        $data = [
            'ID_Usuario' => $id_Data,
            'Patente' => $data['Patente'],
        ];

        // Insert the data into the database
        return $this->insert($data);
    }
}

