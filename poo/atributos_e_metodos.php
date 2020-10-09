<?php  

	class Carro{

		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){

			return $this->modelo;

		}

		public function setModelo($modelo){

			$this->modelo = $modelo;

		}

		public function getMotor():float{

			return $this->motor;

		}

		public function setMotor($motor){

			$this->motor = $motor;

		}

		public function getAno():int{

			return $this->ano;

		}

		public function setAno($ano){

			$this->ano = $ano;

		}

		public function getInfo(){

			return array(
				"modelo" => $this->getModelo(),
				"motor"  => $this->getMotor(),
				"ano"    => $this->getAno()
			);

		}
	}

	$gol = new Carro();
	$gol->setModelo("Gol Bolinha");
	$gol->setMotor("5.0");
	$gol->setAno("2035");

	print_r($gol->getInfo());

?>