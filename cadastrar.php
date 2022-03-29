<?php
// Obrigatório para chamada das classes
require './vendor/autoload.php';
// Obrigatório para chamada das classes

use App\Controller\TelefoneController;


$parametros = $_POST;
if (isset($parametros) && !empty($parametros)) {
    $telefone = new TelefoneController();
    $telefone->store($parametros);
    header('location: index.php?status=success');
    exit;
}
include './template/header.php';
include './views/form.php';
include './template/footer.php';
