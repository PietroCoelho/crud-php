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

    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table =  $table;
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

    public function insert(array $parametros)
    {
        $fields = array_keys($parametros);
        $values = array_values($parametros);

        $binds = array_pad([], count($fields), '?');
        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';
        $this->executar($query, $values);

        return $this->connection->lastInsertId();
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
