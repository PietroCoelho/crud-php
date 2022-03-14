<?php
// Obrigatório para chamada das classes
require './vendor/autoload.php';
// Obrigatório para chamada das classes

use App\Controller\UsuarioController;


$parametros = $_POST;
if (isset($parametros) && !empty($parametros)) {
    $user = new UsuarioController();
    $user->index($parametros);
}
include './template/header.php';
include './views/form.php';
include './template/footer.php';
