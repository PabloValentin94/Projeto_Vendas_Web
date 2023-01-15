<?php

namespace App\Controller;

use App\Model\CidadesModel;

class CidadesController extends Controller
{

    public static function Cadastro()
    {

        $model = new CidadesModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        parent::render("Cidades/CadastroCidades", $model);

    }

    public static function Salvar()
    {

        $model = new CidadesModel();

        $model->id = $_POST["id"];

        $model->nome = $_POST["nome"];

        $model->Save();

    }

    public static function Apagar()
    {

        $model = new CidadesModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Listagem()
    {

        $model = new CidadesModel();

        $model->GetAllRows();

        parent::render("Cidades/ListagemCidades", $model);

    }

}

?>