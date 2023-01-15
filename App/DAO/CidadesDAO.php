<?php

namespace App\DAO;

use \PDO;

use App\Model\CidadesModel;

class CidadesDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function Insert(CidadesModel $model)
    {

        $sql = "INSERT INTO Cidade(nome) VALUES(?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();

    }

    public function Update(CidadesModel $model)
    {

        $sql = "UPDATE Cidade SET nome = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->bindValue(2, $model->id);

        $stmt->execute();

    }

    public function Delete(int $id)
    {

        $sql = "DELETE FROM Cidade WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

    }

    public function Select()
    {

        $sql = "SELECT * FROM Cidade ORDER BY id ASC";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function SelectByID(int $id)
    {

        $sql = "SELECT * FROM Cidade WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("App\Model\CidadesModel");

    }

}

?>