<?php
if (isset($_GET['rtrn_url'])&&!empty($_GET['rtrn_url'])) {
	$rtrn_url = mysql_real_escape_string($_GET['rtrn_url']);
}elseif (isset($_POST['rtrn_url'])&&!empty($_POST['rtrn_url'])) {
	$rtrn_url = mysql_real_escape_string($_POST['rtrn_url']);
}
if (isset($rtrn_url)&&!empty($rtrn_url)) {
	define('RTRN_URL', $rtrn_url);
	$rtrn_url=0;
	unset($rtrn_url);
}
?>