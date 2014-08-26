<?php session_start();
require_once("clases/class.post.php");
$post = new Post();
$comentario = $_POST['comentario'];
$picture   = $_POST['picture'];
$id_user =  $_SESSION['id_user'];

$resultado = $post->savepost($id_user,$comentario,$picture);
echo $resultado;
?>