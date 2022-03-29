<?php

namespace App\Model;

use App\Core\DB;
use PDO;

class Telefone extends DB
{
    protected $table = 'telefone';

    public function __construct()
    {
        parent::__construct();
    }

    public function getList()
    {
        $query = $this->select('*', $this->table);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
