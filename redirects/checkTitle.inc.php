<?php
require_once('../aut.ini.php');
require_once('../apis/facebookAPI.php');
require_once('../apis/twitterpush.php');


$id=esteriliza($_GET['id']);
$f=esteriliza($_GET['f']);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if($_POST['form']=='yes'){
		$titulo=$_POST['titulo'];
		$id=$_POST['id'];
		$f=$_POST['f'];
		mysql_query("UPDATE `noticias` SET `titulo`='$titulo' WHERE `id`='$id' ");
	}
}

$query=mysql_query("SELECT `id`,`titulo`,`url`,`fuente`,`imagen`,`usuario` FROM `noticias` WHERE `id`='$id' ");
$row=mysql_fetch_assoc($query);
$usuario = $row['usuario'];
$fuente = $row['fuente'];
$url = $row['url'];
$avoid = 0;

/* Si existe el titulo
------------------------------*/
if(!empty($row['titulo'])){

	//manda el email		
	$queryU = mysql_query("SELECT `usuario` FROM `usuarios` WHERE `id_usuarios`='$usuario'");
	while($rowU = mysql_fetch_assoc($queryU)){
		$username = $rowU['usuario'];
	}			
	$queryE = mysql_query("SELECT `email` FROM `usuarios` WHERE `acceso`='masterjedi'");
	while($rowE = mysql_fetch_assoc($queryE)){
		$email = $rowE['email'];
		$subject = $username.' agregó una noticia.';
		$message = $fuente.': '.$row['titulo'].' url: '.$url;
		$header ='From: '.$username.'@venezuelahoy.io' . " " .'Reply-To: no-reply@venezuelahoy.io.com' . " " .'X-Mailer: PHP/' . phpversion();
		mail($email,$subject,$message,$header);
	}

	//prepara el tweet y mandalo
	$msj = $row['fuente'].': '.$row['titulo'];
	$msj = utf8_encode($msj);
	$msj = (string)$msj;
	twitterPush($msj,$row['url']);

	//si facebook fue chequeado, postea al facebook
	if($f==1){
		$avoid = 1;
		$msg = $row['fuente'].': '.$row['titulo'].' '.$row['url'];
		$msg = utf8_encode($msg);
		$foto = '../'.IMG_MAIN_DIR.$id.'.jpg';
		facebookImagePush($foto,$msg,'agregauntitular.php');
	}else{
		if (defined('RTRN_URL')) {
			header("Location: ../".RTRN_URL);
		}
	}
}
?>