<?php

// Namespaces:

use App\Controller\CategoriasController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    // Página inicial:

    case "/":
        include(BASEDIR . "App/View/Home/Home.php");
    break;

    // Categorias:

    case "/categorias/cadastro":
        CategoriasController::Cadastro();
    break;

    case "/categorias/cadastro/salvar":
        CategoriasController::Salvar();
    break;

    case "/categorias/apagar":
        CategoriasController::Apagar();
    break;

    case "/categorias/listagem":
        CategoriasController::Listagem();
    break;

    // Exibição padrão:

    default:
        echo "Error 404";

}

?>