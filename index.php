<?php

require_once "Cliente.php";
require_once "EntityInterface.php";
require_once "ServiceDb.php";
require_once "conexao.php";

$cliente = new Cliente();

//$cliente->setNome("Aline")
//        ->setEmail("line@gmail.com");

$cliente->setNome("Lucas")
        ->setEmail("lucas@gmail.com");
$serviceDb = new ServiceDb($conexao, $cliente);
$serviceDb->inserir();

//$resultado = $cliente->inserir();
//$resultado = $cliente->alterar();
//$resultado = $cliente->deletar(2);
//$resultado = $cliente->find(1);

//echo $resultado['nome']." - ".$resultado['email'];

foreach($serviceDb->listar() as $c){
   echo $c['nome']."<br>";
}

