<?php  

	class Documento{

		private $numero;

		public function setNumero($numero){

			$resultado = Documento::validaCpf($numero);

			if($resultado === false){

				throw new Exception("CPF inválido.", 1);

			}

			$this->numero = $numero;

		}

		public function getNumero(){

			return $this->numero;

		}

		public static function validaCpf($cpf):bool{

			if(empty($cpf)) return false;
			if(strlen($cpf) != 11) return false;
			if(
				$cpf == "11111111111" ||
				$cpf == "22222222222" ||
				$cpf == "33333333333" ||
				$cpf == "44444444444" ||
				$cpf == "55555555555" ||
				$cpf == "66666666666" ||
				$cpf == "77777777777" ||
				$cpf == "88888888888" ||
				$cpf == "99999999999"
			){

				return false;

			}else{

				return true;

			}
			
		}

	}

	$cpf = new Documento();
	$cpf->setNumero("23564856989");

	var_dump($cpf->getNumero());


?>