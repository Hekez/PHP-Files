<?php  

/*

Quem pode ver atributos e métodos?

A própria classe
O extends da classe 
O objeto

public = Todo mundo ve -> Classe, Herança da Classe e Objeto
protected = Somente a classe e a herança da classe podem ver
private = Somente a classe

*/

class Pessoa{

	public $nome;
	protected $idade;
	private $senha;

	public function verDados(){

		echo "Nome: " . $this->nome = "Gabriel Batista" . "<br>";
		echo "Idade: " . $this->idade = 23 . "<br>";
		echo "Senha: " . $this->senha = "123456";

	}

}

class Programador extends Pessoa{

	public function verDados(){

		echo get_class($this) . "<br>";

		echo "Nome: " . $this->nome = "Gabriel Batista" . "<br>";
		echo "Idade: " . $this->idade = 23 . "<br>";
		echo "Senha: " . $this->senha = "123456";

	}

}

$objeto = new Programador();
$objeto->verDados();

?>