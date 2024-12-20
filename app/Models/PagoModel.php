<?php 
namespace App\Models;

use CodeIgniter\Model;

class PagoModel extends Model{
    protected $table      = 'Precio_Total';
    protected $primaryKey = 'ID_Precio';
    protected $allowedFields = ['monto'];
}
