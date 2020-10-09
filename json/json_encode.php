<?php  

	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Gabriel',
		'idade' => 23
	));

	array_push($pessoas, array(
		'nome' => 'Gabriela',
		'idade' => 19
	));

	echo json_encode($pessoas);

?>