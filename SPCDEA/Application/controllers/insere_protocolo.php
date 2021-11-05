<?php
use Application\models\Protocolo;
require 'vendor/autoload.php';
/** COLETA AS INFORMAÇÕES DIGITADAS NO FORMULÁRIO addProtocolo.html **/
$especie_animal = $_POST['animal'];
$justificava = $_POST['justificava'] ?? null;
$resumo_pt = $_POST['resumo_pt'] ?? null;
$resumo_en = $_POST['resumo_en'] ?? null;
$data = $_POST['data'] ?? null;
/** VERIFICA SE O USUÁRIO PREENCHEU TODOS OS CAMPOS DO FORMULÁRIO **/
if (empty($justificava) || empty($resumo_pt) || empty($resumo_en)) {
    echo "É preciso preencher todos os campos do formulário de cadastro!";
    exit();
}
$resultado = Protocolo::post($especie_animal ,$justificava, $resumo_pt, $resumo_en, $data);
if ($resultado) {
    header('Location: ../views/areaAdm.html');
}
