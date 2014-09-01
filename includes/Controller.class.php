<?php

defined('Access')||die('Access Denied');

class Controller{
	/**
	 * view对象
	 */
	protected $view = null;
	/**
	 * 配置对象
	 * @var array
	 */
	protected $confs = null;
	/**
	 * 构造函数
	 * 实例化View,conf
	 */
	public function __construct(){
		$this->view = new View();
		$this->confs = conf::getIns();
		$this->_initialize();
	}
	/**
	 * 初始化
	 */
	protected function _initialize(){}
	/**
	 * 引用方法
	 * @param string $permission 权限
	 */
	final public function Run($permission = ''){
		
		
		$control = $_GET['c']?$_GET['c']:$this->confs->default_c;
		$action = $_GET['a']?$_GET['a']:$this->confs->default_a;
		
		if(!$permission){
			$dir = 'Home';
		}else{
			$dir = 'Admin';
		}
		
		$class = ucwords($control);
		
		$controlFile = ROOT .'controller/'.$dir.'/'.$class.'Action.class.php';
		
		if(!file_exists($controlFile)){
			echo '类文件不存在';
			exit();
		}
		
		$class = $class.'Action';
		if(!class_exists($class)){
			exit('类不存在'. $class);
		}
		
		$instance = new $class();
		if(!method_exists($instance,$action)){
			exit('方法不存在'. $action);
		}
		$instance->$action();
		
	}
	/**
	 * 模板
	 * @param string $view 模板
	 * @param string $permission 权限
	 */
	public function display($view,$permission = ''){
		$this->view->display($view,$permission);
	}
	/**
	 * 赋值ֵ
	 * @param string $key
	 * @param string $value
	 */
	public function assign($key,$value){
		$this->view->assign($key, $value);
	}
	
	
}

?>