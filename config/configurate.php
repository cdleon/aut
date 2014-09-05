<?php
Config::run();
AutConfig::start();

/* Definitions
-----------------*/
define('CONTENT_TYPE', Config::rtrn('Content_Type'));
define('CHARSET', Config::rtrn('Charset'));
define('IMG_TEMP_DIR', Config::rtrn('Img_Temp_Dir'));
define('IMG_MAIN_DIR', Config::rtrn('Img_Main_Dir'));

/* Headers
-----------------*/
header('Content-Type:'.CONTENT_TYPE.'; charset='.CHARSET);
?>