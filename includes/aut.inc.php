<?php
use \ForceUTF8\Encoding;

$pre_AltoError=$titulo=$pre_url=$url=$elAltoError=$img='';

/* Si cancelar es presionado en cualquier punto de la operacion
	entra aca vv
------------------------------------------------------------------*/
if(isset($_GET['del'])&&!empty($_GET['del'])){
	$target=$_GET['del'];
	$src = IMG_TEMP_DIR.$target.'.jpg';
    if(file_exists($src)){
        unlink($src);
        if (file_exists($src)) {
            imagedestroy($src);
        }
    }
    $queryDel = mysql_query("DELETE FROM `noticias` WHERE `id`='$del'");
    if (defined('RTRN_URL')) {
    	header("Location: ".RTRN_URL);
    }
}
/* Si hay algun error en cualquier punto de la operacion
	entra aca vv
------------------------------------------------------------------*/
if(isset($_GET['error'])&&!empty($_GET['error'])){
	$e = $_GET['error'];
	if($e=1){
		$error = 'Hubo un error, cargando la foto';
	}
}

if (isset($_POST['submit_url'])) {
	if(isset($_POST['pre_url'])&&!empty($_POST['pre_url'])){
		$pre_url = esteriliza($_POST['pre_url']);
		$parse = parse_url($pre_url);
		$host = $parse['host'];
		if(filter_var($pre_url, FILTER_VALIDATE_URL) == TRUE) {
			$valid_url = true;
			if(mysql_num_rows(mysql_query("SELECT `id` FROM `noticias` WHERE `url`='$pre_url' "))==0){
				if($html = noticiasdom($pre_url)){
					$img = imghtml($html);
					if (isset($img)&&!empty($img)) {
						define('ARTICLE_FETCHED_IMAGES',serialize($img));
					}
					$titulo = selectortitulo($html);
					$titulo = Encoding::toUTF8($titulo);
					$titulo = Encoding::toLatin1($titulo);
					if (isset($titulo)&&!empty($titulo)) {
						define('ARTICLE_FETCHED_TITLE',$titulo);
					}
					$valid_url = true;
				}else{
					$error[]='Hubo un error escaneando el url.';
					$valid_url = true;
				}
			}else{
				$error = 'Ese articulo ya fue agregado.';
				$pre_AltoError = '<span class="alert alert-danger">'.$error.'</span><br><br>';
				$pre_url = '';
				$valid_url = false;
			}
		}else{
			$error = 'El URL no es valido.';
			$pre_AltoError = '<span class="alert alert-danger">'.$error.'</span><br><br>';
			$valid_url = false;
		}
	}else{
		$error = 'ingresa el URL.';
		$pre_AltoError = '<span class="alert alert-danger">'.$error.'</span><br><br>';
		$valid_url = false;
	}
	if (isset($pre_AltoError)&&!empty($pre_AltoError)) {
		define('AUT_ERROR_1', $pre_AltoError);
	}
}

if (isset($pre_url)&&!empty($pre_url)&&$valid_url) {
	define('ARTICLE_FETCHED_URL', $pre_url);
}else{
	define('ARTICLE_FETCHED_URL','----');
}

if(isset($_POST['submit'])){
	$error = array();
	//Titulo
	if(isset($_POST['titulo'])&&!empty($_POST['titulo'])){
		$tit = esteriliza($_POST['titulo']);
		if (!empty($tit)) {
			$titulo = $tit;
		}else{
			$error[] = 'Hubo un error esterilizando el titulo.';
		}
	}else{
		$error[] = 'Ingresa un titulo. ';
	}
	if(isset($_POST['url'])&&!empty($_POST['url'])){
		$url=esteriliza($_POST['url']);
	}elseif(filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
		$error[] = 'El url no es valido. ';
	}else{
		$error[] = 'Ingresa el url. ';
	}
	if(isset($_POST['clasificacion'])&&!empty($_POST['clasificacion'])){
		$clasificacion=$_POST['clasificacion'];
	}else{
		$error[] = 'Escoje una clasificacion. ';
	}
	if(isset($_POST['regionI'])&&!empty($_POST['regionI'])){
		$region=$_POST['regionI'];
	}elseif (isset($_POST['regionII'])&&!empty($_POST['regionII'])) {
		$region=$_POST['regionII'];
	}elseif ((isset($_POST['regionI'])&&!empty($_POST['regionI']))||(isset($_POST['regionII'])&&!empty($_POST['regionII']))) {
		$error[] = 'Error seleccionando la region, porfavor intente de nuevo. ';
	}
	else{
		$error[] = 'Escoje la region. ';
	}
	if(isset($_POST['ciudad'])&&!empty($_POST['ciudad'])){
		$ciudad=$_POST['ciudad'];
	}
	if(isset($_POST['categoria'])&&!empty($_POST['categoria'])){
		$categoria=$_POST['categoria'];
	}else{
		$error[] = 'Escoje una categoria. ';
	}
	if(isset($_POST['subcategoria'])&&!empty($_POST['subcategoria'])){
		$subcategoria=$_POST['subcategoria'];
	}else{
		$error[] = 'Escoje una subcategoria. ';
	}
	if(isset($_POST['fuente'])&&!empty($_POST['fuente'])){
		if($_POST['fuente']=='otro'){
			if(isset($_POST['otroI'])&&!empty($_POST['otroI'])){
				$fuente=esteriliza($_POST['otroI']);
			}else{
				$error[]='Escoje la fuente.';
			}
		}else{
			$fuente=$_POST['fuente'];
		}
	}else{
		$error[] = 'Escoje la fuente. ';
	}
	if(isset($_POST['imagen'])&&!empty($_POST['imagen'])){
		if($_POST['imagen']=='customInput'){
			if(isset($_POST['cI'])&&!empty($_POST['cI'])){
				$imagen=$_POST['cI'];
			}else{
				$error[] = 'Ingresa el url de la imagen o selecciona de la lista';
			}
		}else{
			$imagen=$_POST['imagen'];
		}
	}else{
		$error[] = 'Selecciona una imagen';
	}
	if(isset($_POST['portada'])&&!empty($_POST['portada'])) {
		if ($_POST['portada']=='checked') {
			$portada=1;
		}else{
			$portada=0;
		}
	}else{
		$portada=0;
	}
	if(isset($_POST['talento'])&&!empty($_POST['talento'])) {
		if ($_POST['talento']=='checked') {
			$talento=1;
		}else{
			$talento=0;
		}
	}else{
		$talento=0;
	}
	if(isset($_POST['facebook'])&&!empty($_POST['facebook'])) {
		if ($_POST['facebook']=='checked') {
			$facebook=1;
		}else{
			$facebook=0;
		}
	}else{
		$facebook=0;
	}

	/* Si no hay error
	--------------------*/
	if(empty($error)){

		/* Si el titulo existe
		-----------------------*/
		if (!empty($titulo)) {

			/* Agrega el tiutlar.
			-------------------------*/
			$query = mysql_query("INSERT INTO `noticias` (`titulo`,`url`,`clasificacion`,`categoria`,`subcategoria`,`region`,`fecha`,`fuente`,`usuario`,`imagen`,`portada`,`talento`) VALUES('$titulo','$url','$clasificacion','$categoria','$subcategoria','$region',now(),'$fuente','".USER_ID."','$imagen','$portada','$talento')");
			
			/* Luego, Guarda la imagen.
			-------------------------*/
			$query=mysql_query("SELECT `id`,`imagen` FROM `noticias` WHERE `url`='$url' ");
			$row=mysql_fetch_assoc($query);
			$id=$row['id'];
			$imagen=$row['imagen'];
			$contenidoImagen= file_get_contents($imagen);
			$savefile = fopen(IMG_TEMP_DIR.$id.'.jpg', 'w');
			fwrite($savefile, $contenidoImagen);
			fclose($savefile);
		    if (defined('RTRN_URL')) {
		    	header("Location: redirects/cropImg.php?x=$id&f=$facebook&rtrn_url=".urlencode(RTRN_URL));
		    }
		}else{

			/* Si el titulo esta vacio: notifica
			-------------------------------------*/
			$elAltoError = '<span class="alert alert-danger">';
				foreach ($error as $key => $value) {
					$elAltoError.= $value;
				}
				$elAltoError.= '</span><br><br>';
			}
			if (isset($elAltoError)&&!empty($elAltoError)) {
				define('AUT_ERROR_2', $elAltoError);
			}
	}else{
		
		/* Si hay error: notifica el error
		----------------------------------*/
		$elAltoError = '<span class="alert alert-danger">';
			foreach ($error as $key => $value) {
				$elAltoError.= $value;
			}
			$elAltoError.= '</span><br><br>';
			if (isset($elAltoError)&&!empty($elAltoError)) {
				define('AUT_ERROR_2', $elAltoError);
			}
	}
}
?>