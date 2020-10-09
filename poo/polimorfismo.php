<?php  

//Polimorfismo é quando dois métodos com nomes iguais fazem coisas diferentes.

abstract class Animal{

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

	}

}

class Cachorro extends Animal{

	public function falar(){

		return "Late";

	}

}

class Gato extends Animal{

	public function falar(){

		return "Mia";

	}

}

class Passaro extends Animal{

	public function falar(){

		return "Canta";

	}

	public function mover(){

		return "Voa e " . parent::mover();

	}


}

echo "Cachorro <br>";
$rex = new Cachorro();
echo $rex->falar();

echo "<br><br>";

echo "Gato <br>";
$rivo = new Gato();
echo $rivo->falar();

echo "<br><br>";

echo "Passaro <br>";
$curio = new Passaro();
echo $curio->falar();
echo "<br>";
echo $curio->mover();


?>