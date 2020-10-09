<?php  

	$a = 10;

	//& substitui o valor da variável
	function trocaValor(&$b){

		$b += 50;

		return $b;

	}

echo trocaValor($a);
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo $a;

?>