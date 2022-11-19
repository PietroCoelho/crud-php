<?php
// Obrigatório para chamada das classes
use App\Controller\DeliveryController;
use App\Model\Delivery;

require './vendor/autoload.php';
// Obrigatório para chamada das classes
define('TITLE', '');
define('TITLE_TAB', 'Atualizar entrega');
define('HEADER', 'Atualizar entrega');

$id = !empty($_GET['id']) ? $_GET['id'] : header('location: index.php?status=id-not-found');
$params = $_POST;

$delivery = new Delivery();
$rsDelivery = $delivery->getDeliverieById($id);

if (!$rsDelivery instanceof Delivery) {
    header('location: index.php?status=id-not-found');
}
if (isset($params) && !empty($params)) {
    
    $deliverieController = new DeliveryController();
    $deliverieController->update($id, $params);
    header('location: index.php?status=success');
    exit;
}


include './template/header.php';
include './views/form.php';
include './template/footer.php';
