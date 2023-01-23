<?php

namespace App\Controller;

use App\Model\CoresModel;

class CoresController extends Controller
{

    public static function Cadastro()
    {

        $model = new CoresModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        parent::render("Cores/CadastroCores", $model);

    }

    public static function Salvar()
    {

        $model = new CoresModel();

        $model->id = $_POST["id"];

        $model->descricao = $_POST["descricao"];

        $model->Save();

    }

    public static function Apagar()
    {

        $model = new CoresModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Listagem()
    {

        $model = new CoresModel();

        $model->GetAllRows();

        parent::render("Cores/ListagemCores", $model);

    }

}

?>