<?php

namespace App\Models;

use CodeIgniter\Model;

class MascotasModel extends Model
{
    protected $table      = 'mascotas';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['nombre', 'status', 'categoria', 'tag', 'photoUrl'];
}