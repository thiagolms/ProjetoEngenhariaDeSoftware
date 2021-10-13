<?php

class Usuario{

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['id_user'] = $dado['id_usuario'];

            return true;

            // echo $dado['id_usuario'];
        }else{
            return false;
        }


    }
}


?>