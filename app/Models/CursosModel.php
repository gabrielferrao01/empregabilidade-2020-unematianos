<?php

namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model
{
    protected $table = 'mdl_course';
    protected $primaryKey = 'id';

    public function getCursos($categoria = null)
    {
            return $this->where('category', $categoria)->findAll();
    }
}
