<?php
//include overwright option here
function css(){
	$array[] = 'agregauntitular';
	$array[] = 'main';
	$array[] = 'magic-bootstrap-min';
	$echo = '';
	foreach ($array as $key => $value) {
		$echo .= '<link rel="stylesheet" type="text/css" href="css/'.$value.'.css" />';
	}
	return $echo;
}
?>