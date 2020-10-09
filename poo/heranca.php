<?php  

class Documento{

	private $numero;

	public function setNumero($n){

		$this->numero = $n;

	}

	public function getNumero(){

		return $this->numero;

	}

}

class CPF extends Documento{

	public function validar():bool{

		$numeroCpf = $this->getNumero();

		return true;

	}

}

$doc = new CPF();
$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>