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

            header("Location: /");

        }

        else
        {

            $dao->Update($this);

            header("Location: /categorias/listagem");

        }

    }

    public function Erase(int $id)
    {

        $dao = new CategoriasDAO();

        $dao->Delete($id);

        header("Location: /categorias/listagem");

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