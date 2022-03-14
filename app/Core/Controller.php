<?php

namespace App\Core;


abstract class Controller
{
    public array $parametros;

    public function __construct()
    {
    }

    public function index(array $parametros = []): array
    {
        $this->setParams($parametros);
        return $this->parametros;
    }

    public function store(array $parametros = [])
    {
        $this->setParams($parametros);
    }

    public function setParams(array $parametros): void
    {
        $this->parametros = $parametros;
    }
}
