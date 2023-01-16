<?php

// Namespaces:

use App\Controller\CategoriasController;

use App\Controller\CidadesController;

use App\Controller\MarcasController;

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

    // Cidades:

    case "/cidades/cadastro":
        CidadesController::Cadastro();
    break;

    case "/cidades/cadastro/salvar":
        CidadesController::Salvar();
    break;

    case "/cidades/apagar":
        CidadesController::Apagar();
    break;

    case "/cidades/listagem":
        CidadesController::Listagem();
    break;

    // Marcas:

    case "/marcas/cadastro":
        MarcasController::Cadastro();
    break;

    case "/marcas/cadastro/salvar":
        MarcasController::Salvar();
    break;

    case "/marcas/apagar":
        MarcasController::Apagar();
    break;

    case "/marcas/listagem":
        MarcasController::Listagem();
    break;

    // Exibição padrão:

    default:
        echo "Error 404";

}

?>