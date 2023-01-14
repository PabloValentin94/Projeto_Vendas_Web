<?php

namespace App\DAO;

use \PDO;

use App\Model\CategoriasModel;

class CategoriasDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function Insert(CategoriasModel $model)
    {

        $sql = "INSERT INTO Categoria(descricao) VALUES(?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();

    }

    public function Update(CategoriasModel $model)
    {

        $sql = "UPDATE Categoria SET descricao = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->bindValue(2, $model->id);

        $stmt->execute();

    }

    public function Delete(int $id)
    {

        $sql = "DELETE FROM Categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

    }

    public function Select()
    {

        $sql = "SELECT * FROM Categoria";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function SelectByID(int $id)
    {

        $sql = "SELECT * FROM Categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("App\Model\CategoriasModel");

    }

}

?>