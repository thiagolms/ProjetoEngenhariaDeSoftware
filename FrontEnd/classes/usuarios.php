<?php

class Usuario
{

    private $pdo;
    public $msgERRO = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=" . $nome . ";host" . $host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgERRO = $e->getMessage();
        }
    }

    public function cadastrar($nome, $email, $senha, $cpf, $rg)
    {
        global $pdo;
        // verificação se já existe usuário cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCout() > 0) {
            return false; //já existe usuário

        } else {
            // novo usuário
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, cpf, rg, senha) VALUES (:n, :e, :c, :r, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":c",$cpf);
            $sql->bindValue(":r",$rg);
            $sql->bindValue(":s",md5($senha));
            $sql->execute;
            return true; // cadastrado com sucesso
        }
    }

    public function logar($email, $senha)
    {
        global $pdo;
        //verificar o email se está cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e,$email");
        $sql->bindValue(":s,md5($senha"));
        $sql->execute;
        if ($sql->rowCount() > 0) {
            //acessar sessão
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; //login feito com sucesso

        } else {
            return false; //não foi possivel fazer login

        }
        //entrar no sistema


    }
}
