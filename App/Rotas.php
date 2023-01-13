<?php

// Namespaces:

use App\Controller\CategoriasController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    // Página inicial:

    case "/":
        echo "Início";
    break;

    // Categorias:

    case "/categorias/cadastro":
        CategoriasController::Cadastro();
    break;


    default:
        echo "Error 404";

}

?>