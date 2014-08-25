<?php 
class Post{
	function __construct(){
	 include("inc/config.php");
	 include("inc/functions.php");
	 include("inc/mysql.php");
	}
	function mispost($usuario){
		$cnx = new MySQL();
		$res = "select post.comentario, post.media, registro.usuario, registro.picture from post left join registro on post.id_user=registro.id where registro.usuario='$usuario' order by post.fecha desc";
		$resulta=$cnx->query($res);
		$resulta->read();
		while($resulta->next()){
			
			$response[] =  array(
			"media"=>$resulta->field("media"),
			"mensaje"=>$resulta->field("comentario"),
			"usuario"=>$resulta->field("usuario"),
			"picture"=>$resulta->field("picture")
			);
			
			}
	   return $response;
	}
	
		function todos(){
		$cnx = new MySQL();
		$res = "select post.comentario, post.media, registro.usuario, registro.picture from post left join registro on post.id_user=registro.id  order by post.fecha desc";
		$resulta=$cnx->query($res);
		$resulta->read();
		while($resulta->next()){
			
			$response[] =  array(
			"media"=>$resulta->field("media"),
			"mensaje"=>$resulta->field("comentario"),
			"usuario"=>$resulta->field("usuario"),
			"picture"=>$resulta->field("picture")
			);
			
			}
	   return $response;
	}
	
		
   
}
