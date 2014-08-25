<?php session_start();
require_once("clases/class.registro.php");
$registro = new Registro();
$reg = $registro->verificar($_POST['username'],$_POST['password']);
?>