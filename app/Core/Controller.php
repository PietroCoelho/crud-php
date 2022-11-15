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
    public function index()
    {
    }

    /**
     * Metodo Post
     */
    public function store(array $params = [])
    {
    }

    /**
     * Setando os parâmetros vindos do formulário
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }
}
