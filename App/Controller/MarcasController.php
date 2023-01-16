<?php

namespace App\Controller;

use App\Model\MarcasModel;

class MarcasController extends Controller
{

    public static function Cadastro()
    {

        $model = new MarcasModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);
            
        }

        parent::render("Marcas/CadastroMarcas", $model);

    }

    public static function Salvar()
    {

        $model = new MarcasModel();

        $model->id = $_POST["id"];

        $model->descricao = $_POST["descricao"];

        $model->Save();

    }

    public static function Apagar()
    {

        $model = new MarcasModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Listagem()
    {

        $model = new MarcasModel();

        $model->GetAllRows();

        parent::render("Marcas/ListagemMarcas", $model);

    }

}

?>