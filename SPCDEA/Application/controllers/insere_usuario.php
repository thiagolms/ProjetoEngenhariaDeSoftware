<?php
use Application\models\Usuario;
require_once '../models/Usuario.php';
/** COLETA AS INFORMAÇÕES DIGITADAS NO FORMULÁRIO FORM_SECRETARIA.PHP **/
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
//$id_role = $_POST['role'] ?? null;
/** VERIFICA SE O USUÁRIO PREENCHEU TODOS OS CAMPOS DO FORMULÁRIO **/
if (empty($nome) || empty($email) || empty($senha)) {
    echo "É preciso preencher todos os campos do formulário de cadastro!";
    exit();
}
$resultado = Usuario::post($nome, $email, md5($senha), 2);
if ($resultado) {
    header('Location: ../views/areaAdm.html');
}


