<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Usuario;

class UsuarioController extends Controller
{
    public function  __construct()
    {
        $this->class = new Usuario();
        parent::__construct();
    }


    public function index(array $parametros = [])
    {
    }

    public function store(array $parametros = [])
    {
        $this->setParams($parametros);
    }
}
