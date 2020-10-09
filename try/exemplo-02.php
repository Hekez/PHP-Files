<?php  

function trataNome($nome){

	if(!$nome){

		throw new Exception("Nenhum nome foi informado.", 1);
		
	}

}

try {
	
	trataNome("João");
	trataNome("");

} catch (Exception $e) {
	
	echo $e->getMessage();
	
} finally {

	echo "Executou.";

}


?>