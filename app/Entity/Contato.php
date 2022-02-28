<?php

namespace App\Entity;


class Contato
{
    /**
     * Identificador único
     * @var integer
     */
    public int $id;

    /**
     * Parametros passados
     * @var array
     */
    public array $params;

    /**
     * Método que salva os dados no banco
     */
    public function save(array $params)
    {
    }
}
