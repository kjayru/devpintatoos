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
	function savepost($id_user,$comentario,$picture){
		$cnx = new MySQL();
		$aid_user    = getParam($id_user,"");
		$acomentario = getParam($comentario,"");
		$apicture    = getParam($picture,"");
		$res = sprintf("insert into post(id_user,comentario,media)values(%s,%s,%s)",
							getSQL($aid_user, "text"),
							getSQL($acomentario, "text"),
							getSQL($apicture, "text"));
		$cnx->execute($res);
		$query = "SELECT usuario FROM registro WHERE id = '$id_user'";
		$q = $cnx->query($query);
		$q->read();
		$q->next();
		$response = json_encode(array("rpta"=>"ok","nombres"=>$q->field('usuario')));
		return $response;
	}	   
}
