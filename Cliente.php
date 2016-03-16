<?php

/**
 * Created by PhpStorm.
 * User: aline.souza
 * Date: 03/03/2016
 * Time: 11:56
 */
class Cliente
{
    private $db;
    private $id;
    private $nome;
    private $email;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
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
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':email', $this->getEmail());
        if($stmt->execute()){
            return true;
        }
    }

    public function alterar()
    {
        $query = "Update clientes set nome=:nome, email=:email Where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->getId());
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':email', $this->getEmail());
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Cliente
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}