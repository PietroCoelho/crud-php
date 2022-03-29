<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Telefone;


class TelefoneController extends Controller
{
    public function  __construct()
    {
        $this->class = new Telefone();
        parent::__construct();
    }


    public function index(array $parametros = [])
    {
        
        $rs = $this->class->getList();
        return $rs;
    }

    public function store(array $parametros = [])
    {
        $this->setParams($parametros);
        return $this->class->insert($this->parametros);
    }
}
