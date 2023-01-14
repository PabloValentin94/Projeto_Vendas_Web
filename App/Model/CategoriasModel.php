<?php

namespace App\Model;

use App\DAO\CategoriasDAO;

class CategoriasModel extends Model
{

    public $id, $descricao;

    public function Save()
    {

        $dao = new CategoriasDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

        }

        else
        {

            $dao->Update($this);

        }

    }

    public function Erase(int $id)
    {

        $dao = new CategoriasDAO();

        $dao->Delete($id);

    }

    public function GetAllRows()
    {

        $dao = new CategoriasDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new CategoriasDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new CategoriasModel();

        }

    }

}

?>