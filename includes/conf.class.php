<?php
defined('Access')||die('Access Denied');
class conf{

	private $info = array();
	
	private static $ins = false;

	final protected function __construct(){
		require(ROOT .'includes/config.php');
		$this->info = $config;
	}
	
	protected function __clone(){}

	final public static function getIns(){
		if(self::$ins === false){
			self::$ins = new self();
		}
		return self::$ins;
	}
	
	public function __get($key){
		if(array_key_exists($key,$this->info)){
			return $this->info[$key];
		}else{
			return null;
		}
	}
	
	public function __set($key,$value){
		$this->info[$key] = $value;
	}

}





















