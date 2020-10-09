<?php 

	//Converter texto para maiúscula
	$nome = "gabriel ";
	$nome = strtoupper($nome);
	echo $nome;

	//Converter texto para minúscula
	$sobrenome = "BATISTA";
	$sobrenome = strtolower($sobrenome);
	echo $sobrenome;
	echo "<br/>";

	//Coverter apenas a primeira letra de cada palavra para maiúscula
	$nome2 = "gabriel batista da silva";
	$nome2 = ucwords($nome2);
	echo $nome2;
	echo "<br/>";

	//Coverter apenas a primeira letra da primeira palavra
	$nome3 = "gabriel batista da silva";
	$nome3 = ucfirst($nome3);
	echo $nome3;
	echo "<br/>";

	//Subistituir algum elemento da string
	$nome4 = "Gabriel";
	$nome4 = str_replace("a","4", $nome4);
	echo $nome4;

?>