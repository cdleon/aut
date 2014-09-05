<?php
include('../aut.ini.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){   
    $targ_w = 1200;
    $targ_h = 840;
    $jpeg_quality = 100;
    $id = $_POST['id'];
    $f = $_POST['f'];
    $src = '../'.IMG_TEMP_DIR.$id.'.jpg';
    $img_r = imagecreatefromjpeg($src);
    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
  
    imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
    $targ_w,$targ_h,$_POST['w'],$_POST['h']);
  
    $filename = '../'.IMG_MAIN_DIR.$id.'.jpg';
    imagejpeg($dst_r,$filename,$jpeg_quality);
    if(file_exists($src)){
        unlink($src);
        if (file_exists($src)) {
            imagedestroy($src);
        }
    }
    header("Location: checkTitle.php?id=".$id."&f=".$f."&rtrn_url=".urlencode(RTRN_URL));
    exit;
}
?>