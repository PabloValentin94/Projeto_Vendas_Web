<?php

namespace App\Model;

use App\DAO\CidadesDAO;

class CidadesModel extends Model
{

    public $id, $nome;

    public function Save()
    {

        $dao = new CidadesDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

            header("Location: /");

        }

        else
        {

            $dao->Update($this);

            header("Location: /cidades/listagem");

        }

    }

    public function Erase(int $id)
    {

        $dao = new CidadesDAO();

        $dao->Delete($id);

        header("Location: /cidades/listagem");

    }

    public function GetAllRows()
    {

        $dao = new CidadesDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new CidadesDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new CidadesModel();

        }

    }

}

?>