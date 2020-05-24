<?php

namespace App\Models;
use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class CategoriasModel extends Model
{
    protected $table = 'mdl_course_categories';
    protected $primaryKey = 'id';

    public function getCategorias($id = null){
        if ($id === null){
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
}
