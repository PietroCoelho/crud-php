<?php
// Obrigatório para chamada das classes

use App\Controller\DeliverieController;

require './vendor/autoload.php';
// Obrigatório para chamada das classes

$rsDelivery = new DeliverieController();
$rsDelivery->index();

include './template/header.php';
include './views/list.php';
include './template/footer.php';
