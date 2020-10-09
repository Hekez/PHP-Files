<?php    

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :login, dessenha = :password WHERE idusuario = :id");

$login = "Gabrielzin";
$password = "654321";
$id = 2;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":id", $id);

if($stmt->execute()){

	echo "Dados alterados";

}

?>