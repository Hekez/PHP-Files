<?php    

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:login, :password)");

$login = "Gabriel";
$password = "123456";

$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);

$stmt->execute();

?>