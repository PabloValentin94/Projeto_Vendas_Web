<?php

namespace App\DAO;

use \PDO;

use App\Model\ClientesModel;

class ClientesDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function Insert(ClientesModel $model)
    {

        $sql = "INSERT INTO Cliente(nome, email, cpf, telefone, data_nascimento, renda, bloqueio_venda, fk_cidade) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->bindValue(2, $model->email);

        $stmt->bindValue(3, $model->cpf);

        $stmt->bindValue(4, $model->telefone);

        $stmt->bindValue(5, $model->data_nascimento);

        $stmt->bindValue(6, $model->renda);

        $stmt->bindValue(7, $model->bloqueio_venda);

        $stmt->bindValue(8, $model->fk_cidade);

        $stmt->execute();

    }

    public function Update(ClientesModel $model)
    {

        $sql = "UPDATE Cliente SET nome = ?, email = ?, cpf = ?, telefone = ?, " . 
        "data_nascimento = ?, renda = ?, bloqueio_venda = ?, fk_cidade = ? WHERE " . 
        "id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->bindValue(2, $model->email);

        $stmt->bindValue(3, $model->cpf);

        $stmt->bindValue(4, $model->telefone);

        $stmt->bindValue(5, $model->data_nascimento);

        $stmt->bindValue(6, $model->renda);

        $stmt->bindValue(7, $model->bloqueio_venda);

        $stmt->bindValue(8, $model->fk_cidade);

        $stmt->bindValue(9, $model->id);

        $stmt->execute();

    }

    public function Delete(int $id)
    {

        $sql = "DELETE FROM Cliente WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

    }

    public function Select()
    {

        $sql = "SELECT * FROM Cliente";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function SelectByID(int $id)
    {

        $sql = "SELECT * FROM Cliente WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("App\Model\ClientesModel");

    }

    public function SelectCityByID(int $id)
    {

        $sql = "SELECT nome FROM Cidade WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

}

?>