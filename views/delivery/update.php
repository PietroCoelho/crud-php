<?php
// Obrigatório para chamada das classes
use App\Controller\DeliveryController;
use App\Model\Delivery;

require '../../vendor/autoload.php';
// Obrigatório para chamada das classes
define('TITLE', '');
define('TITLE_TAB', 'Atualizar entrega');
define('HEADER', 'Atualizar entrega');

$id = !empty($_GET['id']) ? $_GET['id'] : header('location: /views/delivery/index.php?status=id-not-found');
$params = $_POST;

$delivery = new Delivery();
$rsDelivery = $delivery->getDeliverieById($id);

if (!$rsDelivery instanceof Delivery) {
    header('location: /views/delivery/index.php?status=erro-instance');
}
if (isset($params) && !empty($params)) {
    
    $deliverieController = new DeliveryController();
    $deliverieController->update($id, $params);
    header('location: /views/delivery/index.php?status=success');
    exit;
}


include '../../template/header.php';
include 'form.php';
include '../../template/footer.php';
