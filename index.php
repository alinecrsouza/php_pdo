<?php

require_once "Cliente.php";
require_once "conexao.php";

$cliente = new Cliente($conexao);

$cliente->setNome("Aline")
        ->setEmail("aline@gmail.com");

$resultado = $cliente->inserir();

//echo $resultado;

foreach($cliente->listar() as $c){
    echo $c['nome']."<br>";
}

