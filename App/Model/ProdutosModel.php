<?php

namespace App\Model;

use App\DAO\ProdutosDAO;

class ProdutosModel extends Model
{

    public $id, $nome, $fornecedor, $estoque, $preco_compra, $preco_venda;

    public $fk_categoria, $fk_cor, $fk_marca;

    public function Save()
    {

        $dao = new ProdutosDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

            header("Location: /");

        }

        else
        {

            $dao->Update($this);

            header("Location: /produtos/listagem");

        }

    }

    public function Erase(int $id)
    {

        $dao = new ProdutosDAO();

        $dao->Delete($id);

        header("Location: /produtos/listagem");

    }

    public function GetAllRows()
    {

        $dao = new ProdutosDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new ProdutosDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;
            
        }

        else
        {

            return new ProdutosModel();

        }

    }

    public function GetCategoryByID(int $id)
    {

        $dao = new ProdutosDAO();

        $categoria = $dao->SelectCategoryByID($id);

        return $categoria;

    }

    public function GetColorByID(int $id)
    {

        $dao = new ProdutosDAO();

        $cor = $dao->SelectColorByID($id);

        return $cor;

    }

    public function GetBrandByID(int $id)
    {

        $dao = new ProdutosDAO();

        $marca = $dao->SelectBrandByID($id);

        return $marca;

    }

}

?>