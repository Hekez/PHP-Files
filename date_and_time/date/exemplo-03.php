<?php  

	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	echo "Hojé é " . ucwords(strftime("%A")) . " dia " . strftime("%d") . " do mês de " . ucwords(strftime("%B")) . " de " . strftime("%G");
 
?>