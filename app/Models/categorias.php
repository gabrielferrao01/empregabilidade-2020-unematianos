<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CategoriasModel
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }
}
