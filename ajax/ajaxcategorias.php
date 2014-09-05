<?php
require_once('../aut.ini.php');
if(isset($_POST['POSTcategoria'])&&!empty($_POST['POSTcategoria'])){
	$POSTcategoria = trim($_POST['POSTcategoria']);
	$query = mysql_query("SELECT `subcategoria` FROM `estructura` WHERE `categoria`='$POSTcategoria' ORDER BY `subcategoria` ");
	while($row = mysql_fetch_assoc($query)){
		echo '<option value="'.$row['subcategoria'].'">'.$row['subcategoria'].'</option>';
	}
}
?>