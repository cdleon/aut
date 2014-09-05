<?php
function cancel($x){
	$del=$x;
	$src = 'img/temp/noticias/'.$del.'.jpg';
    if(file_exists($src)){
        unlink($src);
        if (file_exists($src)) {
            imagedestroy($src);
        }
    }
    $queryDel = mysql_query("DELETE FROM `noticias` WHERE `id`='$del'");
    header("Location: agregauntitular.php");
}
function saveImg($url){
	$query=mysql_query("SELECT `id`,`imagen` FROM `noticias` WHERE `url`='$url' ");
	$row=mysql_fetch_assoc($query);
	$id=$row['id'];
	$imagen=$row['imagen'];
	$contenidoImagen= file_get_contents($imagen);
	$savefile = fopen('img/temp/noticias/'.$id.'.jpg', 'w');
	fwrite($savefile, $contenidoImagen);
	fclose($savefile);
	header("Location: cropImg?x=$id&f=$facebook");
}
?>