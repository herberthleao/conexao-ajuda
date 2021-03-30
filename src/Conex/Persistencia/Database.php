<?php

namespace Conex\Persistencia;

use PDO;

final class Database
{
    private PDO $pdo;
    private static $instance;
    private string $host = 'localhost';
    private string $user = 'root';
    private string $pass = '54321';
    private string $name = 'conex';

    private function __construct()
    {
        $this->connect();
    }

    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new Database();
        }

        return static::$instance;
    }

    public function query(string $query)
    {
        $sth = $this->pdo->prepare($query);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS);
    }

    private function connect(): void
    {
        $this->pdo = new PDO(
            'mysql:dbname=' . $this->name . ';host' . $this->host,
            $this->user,
            $this->pass
        );
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function insertQuery(string $query)
    {
        $sth = $this->pdo->prepare($query);
        $sth->execute();
    }
}