<?php

namespace App\Controller;

use App\Model\ProdutosModel;

use App\Model\CategoriasModel;

use App\Model\CoresModel;

use App\Model\MarcasModel;

class ProdutosController extends Controller
{

    public static function Cadastro()
    {

        $model = new ProdutosModel();

        $categorias = new CategoriasModel();

        $cores = new CoresModel();

        $marcas = new MarcasModel();

        $categorias->GetAllRows();

        $cores->GetAllRows();

        $marcas->GetAllRows();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        $dados = [

            $model,

            $categorias->rows,

            $cores->rows,

            $marcas->rows

        ];

        parent::render("Produtos/CadastroProdutos", $dados);

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

        $model->fk_cor = $_POST["id_cor"];

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

        $model = new ProdutosModel();

        $model->GetAllRows();

        $dados = [$model->rows];

        if(isset($_POST["nome_produto"]))
        {

            if($_POST["nome_produto"] == "nenhum")
            {

                array_push($dados, NULL, NULL, NULL);
                
            }

            else
            {

                array_push($dados, $model->GetByID((int) $_POST["nome_produto"]));

                array_push($dados,
                           $model->GetCategoryByID($dados[1]->fk_categoria), 
                           $model->GetColorByID($dados[1]->fk_cor),
                           $model->GetBrandByID($dados[1]->fk_marca));

                /*array_push($dados, $model->GetColorByID($dados[1]->fk_cor));

                array_push($dados, $model->GetBrandByID($dados[1]->fk_marca));*/

            }

        }

        else
        {

            array_push($dados, NULL, NULL, NULL);

        }

        parent::render("Produtos/ListagemProdutos", $dados);

    }

}

?>