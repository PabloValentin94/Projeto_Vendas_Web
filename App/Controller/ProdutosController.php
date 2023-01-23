<?php

namespace App\Controller;

use App\Model\ProdutosModel;

use App\Model\CategoriasModel;

use App\Model\MarcasModel;

class ProdutosController extends Controller
{

    public static function Cadastro()
    {

        $model = new ProdutosModel();

        $categorias = new CategoriasModel();

        $marcas = new MarcasModel();

        $categorias->GetAllRows();

        $marcas->GetAllRows();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        $dados = [

            $model,

            $categorias->rows,

            $marcas->rows

        ];

        parent::render("Produtos/CadastroProdutos");

    }

    public static function Salvar()
    {

        $model = new ProdutosModel();

        $model->id = $_POST["id"];

        $model->nome = $_POST["nome"];

        $model->fornecedor = $_POST["fornecedor"];

        $model->estoque = $_POST["estoque"];

        $model->preco_compra = $_POST["preco_compra"];

        $model->preco_venda = $_POST["preco_venda"];

        $model->fk_categoria = $_POST["id_categoria"];

        $model->fk_marca = $_POST["id_marca"];

        $model->Save();

    }

    public static function Apagar()
    {

        $model = new ProdutosModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Listagem()
    {

        parent::render("Produtos/ListagemProdutos");

    }

}

?>