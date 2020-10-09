<?php  

//Função para incluir a classe Fusion.php
function incluirClasses($classe){

	if(file_exists($classe . ".php") === true){

		include_once($classe . ".php");

	}

}

//Inclui o Fusion.php
spl_autoload_register("incluirClasses");

//Inclui o Automovel.php dentro da pasta Abstratas
spl_autoload_register(function ($classe){

	if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $classe . ".php") === true){

		include_once("Abstratas" . DIRECTORY_SEPARATOR . $classe . ".php");

	}

});

$carro = new Fusion();
$carro->andar(100);

?>