<?php

function noticiasdom($url){
	$html = file_get_html($url);
	return $html;
}
function imghtml($html){
	foreach ($html->find('img') as $element) {
		$img[]=$element->src;
	}
	return $img;
}
function imgdisplay($imgarray){
	foreach ($imgarray as $key => $value) {
		echo '<img src="'.$value.'">';
	}
}
function selectortitulo($html){
	foreach ($html->find('title') as  $elemento) {
		$tituloarray[] = $elemento->innertext;
	}
	$pretitulo = trim($tituloarray[0]);
	if(count($tituloeditado1 = explode("|", $pretitulo))>1){
		$titulo = $tituloeditado1[0];
	}elseif(count($tituloeditado2 = explode("-", $pretitulo))>1){
		$titulo=$tituloeditado2[0];
	}else{
		$titulo = $pretitulo;
	}
	return trim($titulo);
}
function selectortexto($html){
	$text = $html->plaintext;
	return $text;
}
function selectorfuente($html,$url){
	foreach ($html->find('title') as  $elemento) {
		$tituloarray[] = $elemento->innertext;
	}
	$pretitulo = trim($tituloarray[0]);
	if(count($tituloeditado1 = explode("|", $pretitulo))>1){
		$titulo = $tituloeditado1[1];
	}elseif(count($tituloeditado2 = explode("-", $pretitulo))>1){
		$titulo=$tituloeditado2[1];
	}else{
		$parse = parse_url($url);
		$parsetitulo = explode(".", $parse['host']);
		$titulo = $parsetitulo[1];
	}
	
	return trim($titulo);
}
?>