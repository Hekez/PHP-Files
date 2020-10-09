<?php  		

	/*
	Valor inicial = i = 0
	Até = $i < 10
	Incremento = $i++
	*/
	for($i = 0; $i < 10; $i++){

		echo $i . "<br/>";

	}

	//Nesse caso, ele conta até 100 pulando de 5 em 5
	for($i = 0; $i < 100; $i+=5){

		echo $i . "<br/>";

	}

	//Com esse IF, a contagem ignora os números de 200 a 800
	for($i = 0; $i < 1000; $i+=5){

		if($i > 200 && $i < 800) continue;

		echo $i . "<br/>";

	}

	//Com o break, ele ignora o que vem em seguida até a chave do FOR
	for($i = 0; $i < 1000; $i+=5){

		if($i > 200 && $i < 800) continue;

		if($i === 900) break;

		echo $i . "<br/>";

	}

?>