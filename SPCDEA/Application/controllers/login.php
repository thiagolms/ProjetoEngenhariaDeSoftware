<?php
namespace Application\controllers;

use Application\models\Usuario;
require_once '../models/usuario.php';

/** COLETA AS INFORMAÇÕES DIGITADAS NO FORMULÁRIO DE LOGIN **/
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
/** **/
$usuario = new Usuario();
$res = $usuario->login($email, $senha);
if ($res) {
    $resultado = $usuario->findById(9);
    session_start();
    $_SESSION['id_usuario'] = $resultado['id_usuario'];
    $_SESSION['email'] = $resultado['email'];
    $_SESSION['usuario'] = $resultado['nome'];
    $_SESSION['perfil'] = 'Secretaria';
    header('Location: ../views/form_secretaria.php');
}
else {
    echo "Email ou senha incorretos.";
}