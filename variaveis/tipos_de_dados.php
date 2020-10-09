<?php

//Tipos de dados

Básicos

	//String

	$nome = "Gabriel";
	$sobrenome = 'Batista';
	
	//Int

	$numeroInteiro = 1;

	//Float

	$numeroQuebrado = 3500.00;

	//Boolean

	$verdadeiro = true;

	$falso = false;

Compostos

	//Array

	$frutas = array("Abacaxi","Limão","Maracujá",0,1,2);
	echo $frutas[1];
	exit;

	//Objeto

	$nascimento = new DateTime();
	var_dump($nascimento);
	exit;

Especiais

	//Resourse

	$arquivo = fopen("tipos_de_dados.php", "r");
	var_dump($arquivo);

	//Null

	$nulo = NULL;

?>