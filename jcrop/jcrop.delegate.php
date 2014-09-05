<?php
function jcrop_css(){
	$array[] = '../jcrop/css/jquery.Jcrop';
	$array[] = '../jcrop/demos/demo_files/demos';
	$array[] = '../css/magic-bootstrap-min';
	foreach ($array as $key => $value) {
		echo '<link rel="stylesheet" type="text/css" href="'.$value.'.css" />';
	}
}
function jcrop_js_head(){
    $array[] = '../jcrop/js/jquery.min';
	$array[] = '../jcrop/js/jquery.Jcrop.min';
	$array[] = '../js/cropImg';
	foreach ($array as $key => $value) {
		echo '<script type="text/javascript" src="'.$value.'.js"></script>';
	}
}
?>