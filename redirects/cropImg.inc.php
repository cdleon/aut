<?php
require_once('../aut.ini.php');
require_once('../jcrop/jcrop.delegate.php');

if(isset($_GET['x'])&&!empty($_GET['x'])){
    $id = esteriliza($_GET['x']);
}else{
    if (defined('RTRN_URL')) {
    	header("Location: ../".RTRN_URL."?e=1");
    }
}
if(isset($_GET['f'])&&!empty($_GET['f'])){
    $f = esteriliza($_GET['f']);
}else{
    $f = 0;
}
$TEMPfilename = '../'.IMG_TEMP_DIR.$id.'.jpg';

?>