<?php
/** COLETA AS INFORMAÇÕES DIGITADAS NO FORMULÁRIO FORM_SECRETARIA.PHP **/

use Application\models\Usuario;
require_once '../models/usuario.php';

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
/** VERIFICA SE O USUÁRIO PREENCHEU TODOS OS CAMPOS DO FORMULÁRIO **/
if (empty($nome) || empty($email) || empty($senha)) {
    echo "É preciso preencher todos os campos do formulário de cadastro!";
    exit();
}
$resultado = Usuario::post($nome, $email, md5($senha));
if ($resultado) {
    header('Location: ../views/index.php');
}


