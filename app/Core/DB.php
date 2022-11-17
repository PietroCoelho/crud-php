<?php

namespace App\Core;

use \PDO;
use \PDOException;
use PDOStatement;

class DB
{
    /**
     * Host de conexão
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco
     * @var string
     */
    const NAME = 'correios';

    /**
     * Usuário do banco
     * @var string
     */
    const USER = 'postgres';

    /**
     * Senha de acesso
     * @var string
     */
    const PASS = '123456';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private string $table;

    /**
     * Instancia de conexão
     * @var PDO
     */
    private PDO $connection;

    public function __construct(string $table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(): void
    {
        try {
            $this->connection =  new PDO('pgsql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("ERROR: {$e->getMessage()}");
        }
    }

    private function executeQuery($query, $params = [])
    {
        try {

            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die("ERROR: {$e->getMessage()}");
        }
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*'): PDOStatement
    {

        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . '' . $where . '' . $order . '' . $limit;
        return $this->executeQuery($query);
    }

    public function insert(array $values): int
    {
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';
        $this->executeQuery($query, array_values($values));

        return $this->connection->lastInsertId();
    }

    public function update($where, $values): bool
    {
        $fields = array_keys($values);

        $query = 'UPDATE ' . $this->table . 'SET ' . implode('=?,', $fields) . '=? WHERE ' . $where;

        $this->executeQuery($query, array_values($values));
        return true;
    }

    public function delete($where): bool
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE ' . $where;
        $this->executeQuery($query);

        return true;
    }
}
