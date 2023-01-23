<?php

// Namespaces utilizadas:

use App\Controller\CategoriasController;

use App\Controller\CidadesController;

use App\Controller\MarcasController;

use App\Controller\ClientesController;

use App\Controller\CoresController;

use App\Controller\ProdutosController;

use App\Controller\CaixaController;

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

    // Clientes:

    case "/clientes/cadastro":
        ClientesController::Cadastro();
    break;

    case "/clientes/cadastro/salvar":
        ClientesController::Salvar();
    break;

    case "/clientes/apagar":
        ClientesController::Apagar();
    break;

    case "/clientes/listagem":
        ClientesController::Listagem();
    break;

    // Cores:

    case "/cores/cadastro":
        CoresController::Cadastro();
    break;

    case "/cores/cadastro/salvar":
        CoresController::Salvar();
    break;

    case "/cores/apagar":
        CoresController::Apagar();
    break;

    case "/cores/listagem":
        CoresController::Listagem();
    break;

    // Produtos:

    case "/produtos/cadastro":
        ProdutosController::Cadastro();
    break;

    case "/produtos/cadastro/salvar":
        ProdutosController::Salvar();
    break;

    case "/produtos/apagar":
        ProdutosController::Apagar();
    break;

    case "/produtos/listagem":
        ProdutosController::Listagem();
    break;

    // Caixa:

    case "/caixa/pagamento":
        CaixaController::Pagamento();
    break;

    case "/caixa/pagamento/salvar":
        CaixaController::Salvar();
    break;

    // Exibição padrão:

    default:
        echo "Error 404";

}

?>