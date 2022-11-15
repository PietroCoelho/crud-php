<?php
// Obrigatório para chamada das classes
require './vendor/autoload.php';
// Obrigatório para chamada das classes

define('TITLE', 'Atualizar entrega');

use App\Controller\DeliverieController;



$params = !empty($_GET['id']) ? $_GET['id'] : header('location: index.php?status=id-not-found');

if (isset($params) && !empty($params)) exit;
    $deliverieController = new DeliverieController();
    $deliverieController->store($params);
    header('location: index.php?status=success');
    


include './template/header.php';
include './views/form.php';
include './template/footer.php';
