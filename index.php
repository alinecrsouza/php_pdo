<?php

try{
    $conexao = new \PDO("mysql:host=127.0.0.1;dbname=php_pdo","root","");

    $query = "SELECT * FROM alunos";

    $stmt = $conexao->query($query);
    $resultado = $stmt->fetchAll();
}
catch(\PDOException $e){
    echo "Não possível estabelecer a conexão com o banco de dados. Erro código: ".$e->getCode().": ".$e->getMessage();
}