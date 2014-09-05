<?php
class AutConfig
{
	private static $_instance;
	private function __construct()
	{
		self::_parse_ini();
	}
	public static function start(){
		if (!self::$_instance instanceof self) {
			self::$_instance = new AutConfig();
		}
	}
	private static function _parse_ini(){
		$ini = parse_ini_file(APP_PATH.'config/aut.config.ini');
		foreach ($ini as $key => $value) {
			if (isset($value)&&!empty($value)) {
				define($key,$value);
			}
		}
	}
}
?>