<?php

namespace Application\models;
use Application\core\Database;
require_once '../core/Database.php';
class Usuario
{
    public static function findById(int $id): bool|array
    {
        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM usuarios WHERE id_usuario = :id', array(':id' =>  $id));
        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public static function login($email, $senha): bool
    {
        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM usuarios WHERE email = :email AND senha = :senha',
            [':email' => $email, ':senha' => $senha]);
        return $result->rowCount() > 0;
    }

    public static function post($nome, $email, $senha, $id_role): bool
    {
        $conn = new Database();
        $result = $conn->executeQuery('INSERT INTO usuarios (nome,email,senha, id_role)
        VALUES (:nome,:email,:senha, :id_role)', [':nome' => $nome, ':email' => $email, ':senha' => $senha,
            ':id_role' => $id_role]);
        return $result->rowCount() > 0;
    }
}