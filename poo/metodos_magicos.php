<?php  

class Endereco{

	private $rua;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){

		$this->rua = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct(){

		//var_dump("Destruido");

	}

	public function __toString(){

		return $this->rua . ", " . $this->numero . " - " . $this->cidade;

	}

}

$meuEndereco = new Endereco("Rua Pará", "674", "São José dos Pinhais");
echo $meuEndereco;

?>