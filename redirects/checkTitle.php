<?php require_once('checkTitle.inc.php'); ?>

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>.:Chequea el titulo:.</title>
	<?php css(); ?>

</head>

<body style="background-color:rgba(0,0,0,.8);">

	<?php if($avoid==1){echo '<div style="display:none">';} ?>
	<div style="margin:20px;padding:20px;background-color:white;min-width:600px;">
		<form method="POST" action="">
			<h1 class="alert">Hubo un error agregando el titulo porfavor agregalo de nuevo:</h1>
			<input type="hidden" name="rtrn_url" value="<?php if(defined('RTRN_URL')){echo RTRN_URL;} ?>" />
			<input type="text" name="titulo" style="padding:15px;width:100%;min-width:600px;"/>
			<input type="hidden" name="form" value="yes" />
			<input type="hidden" name="id" value="<?php echo $id; ?>" /><br>
			<input type="hidden" name="f" value="<?php echo $f; ?>" /><br>
			<input type="submit" class="btn btn-success" name="ok" value="ok" />
		</form>
		<button id="cancelar" class="btn btn-default" style="position:relative;top:-50px;left:50px;">Cancelar</button>
	</div>
	<?php if($avoid==1){echo '</div>';} ?>
	<?php js_footer(); ?>

</body>

<script type="text/javascript">
    var redirect = <?php if(defined('RTRN_URL')){echo "\"../".RTRN_URL."?del=".$id."\"";} ?>;
    $('#cancelar').click(function(){
        window.location.href = redirect;
    });
</script>

</html>