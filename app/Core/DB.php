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
