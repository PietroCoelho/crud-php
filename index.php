<?php
// Obrigatório para chamada das classes

use App\Controller\TelefoneController;

require './vendor/autoload.php';
// Obrigatório para chamada das classes

$user = new TelefoneController();
$rs = $user->index();

include './template/header.php';
include './views/listagem.php';
include './template/footer.php';
