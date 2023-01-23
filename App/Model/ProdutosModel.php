<?php

namespace App\Model;

use App\DAO\ProdutosDAO;

class ProdutosModel extends Model
{

    public $id, $nome, $fornecedor, $estoque, $preco_compra, $preco_venda;

    public $fk_categoria, $fk_marca;

    public function Save()
    {



    }

    public function Erase(int $id)
    {



    }

    public function GetAllRows()
    {



    }

    public function GetByID(int $id)
    {



    }

    public function GetCategoryByID(int $id)
    {



    }

    public function GetBrandByID(int $id)
    {



    }

}

?>