<?php

//Método GET normal

$nome = $_GET["a"];
echo $nome;

//Realizando CAST para conversão de dados no método GET (String -> Cast)

$nome2 = (int)$_GET["b"];
echo $nome2;

//Pegando IP do usuário

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

//Pegando local que usuário acessou

$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip2;

?>