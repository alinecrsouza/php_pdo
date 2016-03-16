<?php

require_once "Cliente.php";
require_once "conexao.php";

$cliente = new Cliente($conexao);

//$cliente->setNome("Aline")
//        ->setEmail("line@gmail.com");

//$cliente->setId(2)
//        ->setNome("Laurinha")
//        ->setEmail("laura@gmail.com");

//$resultado = $cliente->inserir();
//$resultado = $cliente->alterar();
//$resultado = $cliente->deletar(2);
$resultado = $cliente->find(1);

echo $resultado['nome']." - ".$resultado['email'];

//foreach($cliente->listar() as $c){
//    echo $c['nome']."<br>";
//}

