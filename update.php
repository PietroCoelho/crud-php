<?php
// Obrigatório para chamada das classes
use App\Controller\DeliveryController;
require './vendor/autoload.php';
// Obrigatório para chamada das classes

define('TITLE', 'Atualizar entrega');


$params = !empty($_GET['id']) ? $_GET['id'] : header('location: index.php?status=id-not-found');

if (isset($params) && !empty($params)) exit;
    $deliverieController = new DeliveryController();
    $deliverieController->store($params);
    header('location: index.php?status=success');
    


include './template/header.php';
include './views/form.php';
include './template/footer.php';
