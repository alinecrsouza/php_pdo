<?php

/**
 * Created by PhpStorm.
 * User: aline.souza
 * Date: 16/03/2016
 * Time: 12:47
 */
class ServiceDb
{
    private $db;
    private $cliente;

    public function __construct(\PDO $db, Cliente $cliente)
    {
        $this->db = $db;
        $this->cliente = $cliente;
    }

    public function find($id)
    {
        $query = "Select * from clientes Where id=:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function listar()
    {
        $query = "Select * from clientes order by nome";

        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function inserir()
    {
        $query = "Insert into clientes(nome,email) Values(:nome, :email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->cliente->getNome());
        $stmt->bindValue(':email', $this->cliente->getEmail());
        if($stmt->execute()){
            return true;
        }
    }

    public function alterar()
    {
        $query = "Update clientes set nome=:nome, email=:email Where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->cliente->getId());
        $stmt->bindValue(':nome', $this->cliente->getNome());
        $stmt->bindValue(':email', $this->cliente->getEmail());
        if($stmt->execute()){
            return true;
        }
    }

    public function deletar($id)
    {
        $query = "Delete from clientes Where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);

        if($stmt->execute()){
            return true;
        }
    }
}