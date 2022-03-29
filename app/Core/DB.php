<?php

namespace App\Core;

use \PDO;
use \PDOException;

class DB
{
    const HOST = 'localhost';
    const NAME = 'agenda';
    const USER = 'postgres';
    const PASS = '1t4rg3t';

    private $connection;

    public function __construct()
    {
        $this->setConnection();
    }


    private function executar($query, $parametros = [])
    {
        try {

            $statement = $this->connection->prepare($query);
            $statement->execute($parametros);
            return $statement;
        } catch (PDOException $e) {
            die("ERROR: {$e->getMessage()}");
        }
    }

    public function select($fields, $table)
    {
        $query = 'SELECT ' . $fields . ' FROM ' . $table ;
        return $this->executar($query);
    }

    public function insert(array $parametros)
    {
        $parametros['id'] = rand(1,99999);
        $fields = array_keys($parametros);
        $values = array_values($parametros);

        $binds = array_pad([], count($fields), '?');
        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';
        $this->executar($query, $values);

        return 'sucesso';
    }


    private function setConnection()
    {
        try {
            $this->connection =  new PDO('pgsql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("ERROR: {$e->getMessage()}");
        }
    }
}
