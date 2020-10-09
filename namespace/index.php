<?php  

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Gabriel");
$cad->setEmail("gabriel@gmail.com");
$cad->setSenha(123456);

$cad->registrarVenda();

?>