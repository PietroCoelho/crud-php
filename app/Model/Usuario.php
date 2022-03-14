<?php

namespace App\Model;

use App\Core\DB;

class Usuario extends DB
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getList(array $parametros)
    {
        return $parametros;
    }

}
