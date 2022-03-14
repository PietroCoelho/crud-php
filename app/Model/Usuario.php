<?php

namespace App\Model;

use App\Core\DB;

class Usuario extends DB
{

    public function __construct()
    {
        parent::__construct('telefone');
    }

    public function getList(array $parametros)
    {
        return $parametros;
    }

}
