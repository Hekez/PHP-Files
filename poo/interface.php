<?php  

interface Veiculo{

	public function andar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

	public function andar($velocidade){

		echo "O veículo está andando a: " . $velocidade . "km/h";

	}

	public function freiar($velocidade){

		echo "O veículo está freiando a: " . $velocidade . "km/h";

	}

	public function trocarMarcha($marcha){

		echo "O veículo trocou para a " . $marcha . " marcha";

	}

}

$carro = new Fusion();
$carro->andar(100);

?>