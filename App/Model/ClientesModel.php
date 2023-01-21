<?php

namespace App\Model;

use App\DAO\ClientesDAO;

class ClientesModel extends Model
{

    public $id, $nome, $email, $cpf, $telefone, $data_nascimento, $renda;
    
    public $bloqueio_venda, $fk_cidade;

    public function Save()
    {

        $dao = new ClientesDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

            header("Location: /");

        }

        else
        {

            $dao->Update($this);

            header("Location: /clientes/listagem");

        }

    }

    public function Erase(int $id)
    {

        $dao = new ClientesDAO();

        $dao->Delete($id);

        header("Location: /clientes/listagem");

    }

    public function GetAllRows()
    {

        $dao = new ClientesDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new ClientesDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new ClientesModel();

        }

    }

    public function GetCityByID(int $id)
    {

        $dao = new ClientesDAO();

        $cidade = $dao->SelectCityByID($id);

        return $cidade;

    }

}

?>