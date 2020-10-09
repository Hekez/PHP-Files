<?php  

$data = array(

	"empresa" => "usafe"

);

setcookie("nome_do_cookie", json_encode($data), time() + 3600);

echo "Ok";

?>