<?php
class Config
{
	private static $_instance;
	private static $_ini;
	private function __construct(){
		self::$_ini = parse_ini_file(APP_PATH.'config/config.ini');
	}
	public static function run(){
		if (!self::$_instance instanceof self) {
			self::$_instance = new Config();
		}
	}
	public function rtrn($arg){
		return self::$_ini[$arg];
	}
}
?>