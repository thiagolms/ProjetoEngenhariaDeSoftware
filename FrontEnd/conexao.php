<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "login";

global $pdo;

try{
    //orientado a objeto pdo
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}


// $sql = $pdo->query("SELECT * FROM usuarios");
// $sql->execute();

// echo $sql->rowCount();

?>