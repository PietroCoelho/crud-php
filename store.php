<?php
// Obrigatório para chamada das classes
require './vendor/autoload.php';
// Obrigatório para chamada das classes

define('TITLE', 'Cadastrar Entrega');

use App\Controller\DeliverieController;



$params = $_POST;

if (isset($params) && !empty($params)) {
    $telefone = new DeliverieController();
    $telefone->store($params);
    header('location: index.php?status=success');
    exit;
}

include './template/header.php';
include './views/form.php';
include './template/footer.php';
