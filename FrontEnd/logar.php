<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    
    require 'conexao.php';
    require 'Usuario.class.php';

    $u = new Usuario();    
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isset($_SESSION['id_user'])){
            header("Location: areaAdmin.php");

        }else{
            header("Location: login.php");
        }
      
    }else{
        header("Location: login.php");
    }

}else{
    header("Location: login.php");
}
