<?php
// Obrigatório para chamada das classes
use App\Controller\DeliveryController;
use App\Model\Delivery;

require './vendor/autoload.php';
// Obrigatório para chamada das classes
define('TITLE', '');
define('TITLE_TAB', 'Atualizar entrega');
define('HEADER', 'Atualizar entrega');

$params = !empty($_GET['id']) ? $_GET['id'] : header('location: index.php?status=id-not-found');

// if (isset($params) && !empty($params)) {
//     $delivery = new Delivery();
//     $deliverieController = new DeliveryController();
//     $deliverieController->store($delivery);
//     header('location: index.php?status=success');
//     exit;
// }


include './template/header.php';
include './views/form.php';
include './template/footer.php';
