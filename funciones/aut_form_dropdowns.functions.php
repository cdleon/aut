<?php
function regionNacional(){
	$query = mysql_query("SELECT DISTINCT `region` FROM `periodicos`");
	$echo = '<option value=""></option>
		<option value="Nacionales">Nacionales</option>';
	while($row = mysql_fetch_assoc($query)){
		$echo .= '<option value="'.$row['region'].'">'.$row['region'].'</option>';
	}
	return $echo;
}
function regionInternacional(){
	$echo = '<option value=""></option>
			<option value="Internacional">Internacional</option>
			<option value="Antartida">Antartida</option>
			<option value="Africa">Africa</option>
			<option value="Asia">Asia</option>
			<option value="Europa">Europa</option>
			<option value="Norteamerica">Norte America</option>
			<option value="Oceania">Oceania</option>
			<option value="Suramerica">Sudamerica</option>';
	return $echo;
}
function fuente(){
	$query = mysql_query("SELECT DISTINCT `nombre` FROM `periodicos` ORDER BY `nombre` ASC");
	$echo = '<option value=""></option>
			<option value="otro">Otra fuente</option>';
	while($row = mysql_fetch_assoc($query)){
		$echo .= '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';

	}
	return $echo;
}
function categorias(){
	$query = mysql_query("SELECT DISTINCT `categoria` FROM `estructura` WHERE `espacio`='inicio' AND `categoria`!='general' AND `categoria`!='talento' ORDER BY `categoria` ASC");
	$echo = '<option value=""></option>';
	while($row = mysql_fetch_assoc($query)){
		$echo .= '<option value="'.$row['categoria'].'">'.$row['categoria'].'</option>';
	}
	return $echo;
}
function selectorimagenes($img){
	global $host;
	$echo = '<div style="display:block;"><table class="table table-striped">';
	$echo.= '<tr><th colspan="2">Selecciona la imagen para la noticia:<br></th></tr>
					<tr><td class="selector"><input class="boton_selector" type="radio" name="imagen" value="customInput"></td>
					<td style="padding:5px;">Otra: <input type="text" name="cI" style="width:900px;"></td>
				</tr>';
	if(isset($img)&&!empty($img)){
		foreach ($img as $value)
			{
			if (substr($value, 0, 1)=='/') {
				$value = 'http://'.$host.$value;
			}
			$echo.= '<tr>
					<td class="selector"><input class="boton_selector" type="radio" name="imagen" value="'.$value.'"></td>
					<td class="imagen"><img class="img_selector_imagen" src="'.$value.'"></td>
					<td>'.$value.'</td>
				</tr>';
			}
	}
	$echo.= '</table></div>';
	return $echo;
}
?>