<?php  

	//utiliza o mesmo id da sessão do usuário
	session_id('s2v742n2rote73t5i0v44mceum');

	require_once('config.php');

	//cria uma nova sessão
	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

?>