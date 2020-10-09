<?php  

	class Pessoa{

		public $nome;

		public function Falar(){

			return "Meu nome é " . $this->nome;

		}

	}

	$gabriel = new Pessoa();
	$gabriel->nome = "Gabriel Batista";
	echo $gabriel->Falar();

?>