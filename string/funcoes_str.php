<?php 

	//Encontrar uma palavra na string
	$frase = "A repetição é mãe da retenção";
	$palavra = "mãe";

	//strpos localiza a posição da string na variável frase
	$q = strpos($frase, $palavra);

	//substr mostra a string da variável frase até a variável q
	//               onde    de onde    até onde
	$texto = substr($frase,     0,        $q);
	var_dump($texto);
	echo "<br/>";

	//strlen conta o tamanho da string
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	var_dump($texto2);
	echo "<br/>";

	//EXEMPLO PRÁTICO
	$strFrase = "Gabriel é inteligente";
	$replace = " esperto";

	$newFrase = substr($strFrase, 0, strpos($strFrase, " i")) . $replace;
	echo $newFrase;

?>