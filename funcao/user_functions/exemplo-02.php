<?php  

	$data = date("M");

	function salario(){

		return 1380.92;

	}

	echo "Gabriel, seu salário no mês de " . $data . " é: " . (salario()*4);

?>