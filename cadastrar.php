<?php

/**
 * Adicionando autoload a página principal
 */

use App\Entity\Contato;

require './vendor/autoload.php';
include './template/header.php';
include './includes/formulario.php';
include './template/footer.php';


/**
 * verificação simples
 * Válidação de dados passados
 */
if (!empty($_POST['nome']) && !empty($_POST['numero']) && !empty($_POST['email'])) {

    $contato = new Contato();
    $contato->save($_POST);
}
