<?php session_start();
require_once("clases/class.post.php");
$post = new Post();
$comentario = $_POST['comentario'];
$pictures   = $_POST['pictures'];
$reg = $post->savepost($_SESSION['id_user'],$comentario,$pictures);
?>