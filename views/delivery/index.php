<?php
// Obrigatório para chamada das classes
use App\Controller\DeliveryController;
require '../../vendor/autoload.php';
// Obrigatório para chamada das classes

define('HEADER','Entregas');
define('TITLE_TAB','Lista de Entregas');


$DeliveryController = new DeliveryController();
$rsDelivery = $DeliveryController->index();

include '../../template/header.php';
include 'list.php';
include '../../template/footer.php';
