<?php

namespace App\Model;

use App\DAO\MarcasDAO;

class MarcasModel extends Model
{

    public $id, $descricao;

    public function Save()
    {

        $dao = new MarcasDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

            header("Location: /");

        }

        else
        {

            $dao->Update($this);

            header("Location: /marcas/listagem");

        }

    }

    public function Erase(int $id)
    {

        $dao = new MarcasDAO();

        $dao->Delete($id);

        header("Location: /marcas/listagem");

    }

    public function GetAllRows()
    {

        $dao = new MarcasDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new MarcasDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new MarcasModel();

        }

    }

}

?>