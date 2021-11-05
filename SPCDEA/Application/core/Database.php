<?php

namespace Application\core;

use PDO;

class Database extends PDO
{
    // configuração do banco de dados
    private string $DB_NAME = 'spcdea';
    private string $DB_USER = 'root';
    private ?string $DB_PASSWORD = null;
    private string $DB_HOST = 'localhost';

    // armazena a conexão
    private PDO $conn;

    /**
     */
    public function __construct()
    {
        $this->conn = new PDO('mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME . ';charset=utf8', $this->DB_USER, $this->DB_PASSWORD);
    }

    private function setParameters($stmt, $key, $value)
    {
        $stmt->bindParam($key, $value);
    }

    private function mountQuery($stmt, $parameters)
    {
        foreach( $parameters as $key => $value ) {
            $this->setParameters($stmt, $key, $value);
        }
    }

    public function executeQuery(string $query, array $parameters = []): bool|\PDOStatement
    {
        $stmt = $this->conn->prepare($query);
        $this->mountQuery($stmt, $parameters);
        $stmt->execute();
        return $stmt;
    }
}