<?php  

	//include = Inclui o arquivo e roda mesmo com erros
	//include_once = Permite incluir arquivos já incluidos no mesmo arquivo
	//include_path = Procura arquivos que não encontrar

	//require = Obriga o arquivo a existir e que esteja funcionando corretamente
	//require_once permite incluir arquivos já incluidos no mesmo arquivo

	require "inc/funcao_soma.php";

	require_once "inc/funcao_soma.php";

	$resultado = somar(10, 10);
	echo $resultado;

?>