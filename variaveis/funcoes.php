<?php

	$nome = "Gabriel";

	//Global permite resgatar variáveis fora da função
	function nome(){
		global $nome;
		echo $nome;
	}

	//Também é possivel criar uma variável já existente dentro da função com valor diferente
	function nome2(){
		$nome = " Batista";
		echo $nome;
	}

	nome();
	nome2();

?>