<?php 
namespace App\Models;

use CodeIgniter\Model;

class QR_Model extends Model{
    protected $table      = 'comprobante';
    protected $primaryKey = 'ID_Comprobante';
    protected $allowedFields = ['ID_Usuario', 'Precio_Total', 'QR', 'Foto_Entrada', 'Foto_Salida'];
    public function getQRByUserId($user_id) {
        $builder = $this->db->table('comporbante'); 
        $builder->select('image_path'); 
        $builder->where('user_id', $user_id); // Añade la condición
        return $builder->get()->getRow(); // Obtiene un solo resultado como objeto
    }

    public function getQRRoute($userId) {
        return $this->where('ID_Usuario', $userId)->findAll();
    }
    
}