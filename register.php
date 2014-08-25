<?php session_start();
require_once("clases/class.registro.php");
$registro = new Registro();
$reg = $registro->crear_usuario($_POST['email'],$_POST['username'],$_POST['password'],$_POST['phone'],$_POST['picture']);
print_r($reg);

?>