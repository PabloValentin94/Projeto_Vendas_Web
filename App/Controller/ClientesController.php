<?php

namespace App\Controller;

use App\Model\ClientesModel;

use App\Model\CidadesModel;

class ClientesController extends Controller
{

    public static function Cadastro()
    {

        $model = new ClientesModel();

        $cidades = new CidadesModel();

        $cidades->GetAllRows();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        $dados = [

            $model,

            $cidades->rows

        ];

        //include "View/Modules/Clientes/CadastroClientes.php";

        parent::render("Clientes/CadastroClientes", $dados);

    }

    public static function Salvar()
    {

        $model = new ClientesModel();

        $model->id = $_POST["id"];

        $model->nome = $_POST["nome"];

        $model->email = $_POST["email"];

        $model->cpf = $_POST["cpf"];

        $model->telefone = $_POST["telefone"];

        $model->data_nascimento = $_POST["data_nascimento"];

        $model->renda = $_POST["renda"];

        if(isset($_POST["bloqueio_venda"]))
        {

            $model->bloqueio_venda = 1;

        }

        else
        {

            $model->bloqueio_venda = 0;

        }

        $model->fk_cidade = $_POST["id_cidade"];

        $model->Save();

    }

    public static function Apagar()
    {

        $model = new ClientesModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Listagem()
    {

        $model = new ClientesModel();

        $model->GetAllRows();

        $dados = [$model->rows];

        if(isset($_POST["nome_cliente"]))
        {

            if($_POST["nome_cliente"] == "nenhum")
            {

                array_push($dados, NULL);
                
            }

            else
            {

                array_push($dados, $model->GetByID((int) $_POST["nome_cliente"]));

                array_push($dados, $model->GetCityByID($dados[1]->fk_cidade));

            }

        }

        else
        {

            array_push($dados, NULL);

        }

        //include VIEWS . "Clientes/ListagemClientes.php";

        parent::render("Clientes/ListagemClientes", $dados);

    }

}

?>