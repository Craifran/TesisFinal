<?php 
namespace App\Models;

use CodeIgniter\Model;

class SlotModel extends Model
{
    protected $table = 'Slot';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['SlotCode'];
}
