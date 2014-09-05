<?php
define('APP_PATH', realpath(dirname(__FILE__)).'/');
require_once('config/config.delegate.php');
require_once('db/connectDB.php');
require_once('lib/lib.delegate.php');
require_once('funciones/funciones.delegate.php');
require_once('classes/classes.delegate.php');
require_once('session/session.controller.php');
require_once('css/css.delegate.php');
require_once('js/js.delegate.php');
require_once('redirects/redirect.controller.php');
?>