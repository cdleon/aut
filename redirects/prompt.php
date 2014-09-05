<?php
	include('../aut.ini.php');

	$x=$_GET['x'];

	if($x==0){
		$mensaje = 'Te estaremos mandando un email en los proximos minutos, haz <span style="text-decoration:underline;">click</span> en el link para confirmar tu cuenta';
	}elseif($x==1){
		$mensaje = 'HEMOS ACTIVADO TU CUENTA! Haz click en ingresa para acceder a tu cuenta';
	}elseif($x==2){
		$mensaje = 'Ingresa o Registrate para ver este contenido!';
	}elseif($x==3){
		$mensaje = 'Acceso Restringido!';
	}
?>

<html>
<head>
	<title>Aloha - Venezuela Hoy</title>
	<style type="text/css">
		.prompt{
			width: 75%;
			margin:150px auto 150px auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="big_wrapper">
		<section id="center_section">
			<div class="prompt">
				<h2><?php echo $mensaje; ?></h2>
			</div>
		</section>
	</div>
</body>
</html>