<?php
function js_footer(){
	$array[] = 'jquery';
	$array[] = 'bootstrap.min';
	$array[] = 'agregauntitular';
	$echo = '';
	foreach ($array as $key => $value) {
		$echo.= '<script type="text/javascript" src="js/'.$value.'.js"></script>';
	}
	return $echo;
}
?>