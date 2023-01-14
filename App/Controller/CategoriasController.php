<?php

namespace App\Controller;

use App\Model\CategoriasModel;

class CategoriasController extends Controller
{

    public static function Cadastro()
    {

        $model = new CategoriasModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        parent::render("Categorias/CadastroCategorias", $model);

    }

    public static function Salvar()
    {

        $model = new CategoriasModel();

        $model->id = $_POST["id"];

        $model->descricao = $_POST["descricao"];

        $model->Save();

        header("Location: /categorias/cadastro");

    }

    public static function Apagar()
    {

        $model = new CategoriasModel();

        $model->Erase((int) $_GET["id"]);

        header("Location: /categorias/listagem");

    }

    public static function Listagem()
    {

        $model = new CategoriasModel();

        $model->GetAllRows();

        parent::render("Categorias/ListagemCategorias", $model);

    }

}

?>