<?php    

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt->execute(array($id));

//rollback = Cancela a operação
//$conn->rollback();

//commit = Confirma a operação
$conn->commit();

?>