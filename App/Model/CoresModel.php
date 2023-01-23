<?php

namespace App\Model;

use App\DAO\CoresDAO;

class CoresModel extends Model
{

    public $id, $descricao;

    public function Save()
    {

        $dao = new CoresDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

            header("Location: /");

        }

        else
        {

            $dao->Update($this);

            header("Location: /cores/listagem");

        }

    }

    public function Erase(int $id)
    {

        $dao = new CoresDAO();

        $dao->Delete($id);

        header("Location: /cores/listagem");

    }

    public function GetAllRows()
    {

        $dao = new CoresDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new CoresDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new CoresModel();

        }

    }

}

?>