<?php

namespace App\Core;


abstract class Controller
{
    public array $parametros;
    public $class;

    public function __construct()
    {
    }

    /**
     * Metodo Get
     */
    public function index(array $parametros = [])
    {
    }

    /**
     * Metodo Post
     */
    public function store(array $parametros = [])
    {
    }

    /**
     * Setando os parâmetros vindos do formulário
     */
    public function setParams(array $parametros): void
    {
        $this->parametros = $parametros;
    }
}
