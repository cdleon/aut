<?php
function script(){
	$filename = $_SERVER['SCRIPT_NAME'];
	$domainName = $_SERVER['HTTP_HOST'];
	$path = $filename;
	return $path;
}
function esteriliza($data){
	if (function_exists('mysql_real_escape_string')) {
		$data = mysql_real_escape_string(trim($data));
		$data = strip_tags($data);
	}else{
		$data = mysql_escape_string(trim($data));
		$data = strip_tags($data);
	}
	return $data;
}
function fecha($date){
	$date = strtotime($date)+((30)*60);
	$month = date('m',$date);
	$day = date('d',$date);
	$year = date('Y',$date);
	$hour = date('h',$date);
	$min = date('i',$date);
	$secs = date('s',$date);
	$mer = date('a',$date);
	switch ($month) {
		case '01':
			$mes = 'Enero';
			break;
		case '02':
			$mes = 'Febrero';
			break;
		case '03':
			$mes = 'Marzo';
			break;
		case '04':
			$mes = 'Abril';
			break;
		case '05':
			$mes = 'Mayo';
			break;
		case '06':
			$mes = 'Junio';
			break;
		case '07':
			$mes = 'Julio';
			break;
		case '08':
			$mes = 'Agosto';
			break;
		case '09':
			$mes = 'Septiembre';
			break;
		case '10':
			$mes = 'Octubre';
			break;
		case '11':
			$mes = 'Noviembre';
			break;
		case '12':
			$mes = 'Diciembre';
			break;
		default:
			$mes = '-';
			break;
	}
	return  $hour.':'.$min.':'.$secs.$mer.'. '.$mes.' '.$day.', '.$year.'.';
}
function spChar($subject){
	$subject=preg_replace("/&amp;#225/", "á", $subject);
	$subject=preg_replace("/&amp;#233/", "é", $subject);
	$subject=preg_replace("/&amp;#237/", "í", $subject);
	$subject=preg_replace("/&amp;#243/", "ó", $subject);
	$subject=preg_replace("/&amp;#250/", "ú", $subject);
	$subject=preg_replace("/&amp;#241/", "ñ", $subject);
	$subject=preg_replace("/&amp;#193/", "Á", $subject);
	$subject=preg_replace("/&amp;#201/", "É", $subject);
	$subject=preg_replace("/&amp;#205/", "Í", $subject);
	$subject=preg_replace("/&amp;#211/", "Ó", $subject);
	$subject=preg_replace("/&amp;#218/", "Ú", $subject);
	$subject=preg_replace("/&amp;#209/", "Ñ", $subject);
	$subject=preg_replace("/&amp;#8221;/", '\"', $subject);
	$subject=preg_replace("/&amp;#8220;/", '\"', $subject);
	return $subject;
}








?>