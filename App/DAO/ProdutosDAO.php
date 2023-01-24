<?php

namespace App\DAO;

use \PDO;

use App\Model\ProdutosModel;

class ProdutosDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function Insert(ProdutosModel $model)
    {

        $sql = "INSERT INTO Produto(nome, fornecedor, estoque, preco_compra, " . 
        "preco_venda, fk_categoria, fk_cor, fk_marca) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->bindValue(2, $model->fornecedor);

        $stmt->bindValue(3, $model->estoque);

        $stmt->bindValue(4, $model->preco_compra);

        $stmt->bindValue(5, $model->preco_venda);

        $stmt->bindValue(6, $model->fk_categoria);

        $stmt->bindValue(7, $model->fk_cor);

        $stmt->bindValue(8, $model->fk_marca);

        $stmt->execute();

    }

    public function Update(ProdutosModel $model)
    {

        $sql = "UPDATE Produto SET nome = ?, fornecedor = ?, estoque = ?, " . 
        "preco_compra = ?, preco_venda = ?, fk_categoria = ?, fk_cor = ?, " . 
        "fk_marca = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->bindValue(2, $model->fornecedor);

        $stmt->bindValue(3, $model->estoque);

        $stmt->bindValue(4, $model->preco_compra);

        $stmt->bindValue(5, $model->preco_venda);

        $stmt->bindValue(6, $model->fk_categoria);

        $stmt->bindValue(7, $model->fk_cor);

        $stmt->bindValue(8, $model->fk_marca);

        $stmt->bindValue(9, $model->id);

        $stmt->execute();

    }

    public function Delete(int $id)
    {

        $sql = "DELETE FROM Produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

    }

    public function Select()
    {

        $sql = "SELECT * FROM Produto ORDER BY id ASC";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function SelectByID(int $id)
    {

        $sql = "SELECT * FROM Produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("App\Model\ProdutosModel");

    }

    public function SelectCategoryByID(int $id)
    {

        $sql = "SELECT descricao FROM Categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function SelectColorByID(int $id)
    {

        $sql = "SELECT descricao FROM Cor WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function SelectBrandByID(int $id)
    {

        $sql = "SELECT descricao FROM Marca WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

}

?>