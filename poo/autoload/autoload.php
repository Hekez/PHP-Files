<?php  

function __autoload($classe){

	require_once ($classe.".php");

}

$carro = new Fusion();
$carro->andar(100);

?>