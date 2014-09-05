<?php
function protegido(){
	if(!defined(USER_ID)){
		header('Location: redirects/prompt.php?x=2');
	}
}
function admin(){
	if(defined(USER_ID)){
		$query = mysql_query("SELECT `id_usuarios`,`acceso` FROM `usuarios` WHERE `id_usuarios` = '".USER_ID."' ");
		$row = mysql_fetch_assoc($query);
		if($row['acceso']!='admin'){
			if($row['acceso']!='masterjedi') {
				header('Location: redirects/prompt.php?x=3');
			}
		}
	}
}
function contenidoAdmin(){
	if(defined(USER_ID)){
		$query = mysql_query("SELECT `id_usuarios`,`acceso` FROM `usuarios` WHERE `id_usuarios` = '".USER_ID."' ");
		$row = mysql_fetch_assoc($query);
		if($row['acceso']=='admin'||$row['acceso']=='masterjedi'){
			$admin = 1;
		}else{
			$admin = 0;
		}
	}
	return $admin;
}
function masterjedi(){
	if(defined(USER_ID)){
		$query = mysql_query("SELECT `id_usuarios`,`acceso` FROM `usuarios` WHERE `id_usuarios` = '".USER_ID."' ");
		$row = mysql_fetch_assoc($query);
		if($row['acceso']!='masterjedi'){
			header('Location: redirects/prompt.php?x=3');
		}
	}
}
function contenidoMasterjedi(){
	if(defined(USER_ID)){
		$query = mysql_query("SELECT `id_usuarios`,`acceso` FROM `usuarios` WHERE `id_usuarios` = '".USER_ID."' ");
		$row = mysql_fetch_assoc($query);
		if($row['acceso']=='masterjedi'){
			$mj = 1;
		}else{
			$mj = 0;
		}
	}
	return $mj;
}
function muestraAcceso(){
	if(defined(USER_ID)){
		$query = mysql_query("SELECT `id_usuarios`,`acceso` FROM `usuarios` WHERE `id_usuarios` = '".USER_ID."' ") or die(mysql_error());
		$row = mysql_fetch_assoc($query);
		if(!empty($row['acceso'])){
		echo $row['acceso'];
		}else{
			echo 'acceso empty';
		}
	}else{
		echo 'USER_ID not set';
	}
}
function ipUsuario(){
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip_bypass_network = $_SERVER['HTTP_CLIENT_IP'];//facil de falsificar
	}else{
		$ip_bypass_network = 0;
	}
	if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip_bypass_proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];//facil de falsificar
	}else{
		$ip_bypass_proxy = 0;
	}
	$ip = $_SERVER['REMOTE_ADDR']; //dificil de falsificar si esta usando proxy solo te da el proxy
	return $ip;
}
?>