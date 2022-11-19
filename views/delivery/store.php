<?php
// Obrigatório para chamada das classes
require '../../vendor/autoload.php';
// Obrigatório para chamada das classes

define('TITLE', '');
define('TITLE_TAB', 'Cadastrar Entrega');
define('HEADER', 'Cadastrar Entrega');

use App\Controller\DeliveryController;

$params = $_POST;

if (isset($params) && !empty($params)) {
    $delivery = new DeliveryController();
    $delivery->store($params);
    header('location: /views/delivery/index.php?status=success');
    exit;
}

include '../../template/header.php';
include 'form.php';
include '../../template/footer.php';
