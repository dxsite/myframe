<?php
class Controller{
	/**
	 * 实例化view赋值
	 */
	protected $view = null;
	/**
	 * 读取配置文件
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
	}
	/**
	 * 入口
	 * @param string $permission 权限控制
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
			echo '控制器不存在';
			exit();
		}
		
		$class = $class.'Action';
		if(!class_exists($class)){
			exit('未定义的控制器类'. $class);
		}
		
		$instance = new $class();
		if(!method_exists($instance,$action)){
			exit('未定义的控制器方法'. $action);
		}
		$instance->$action();
		
	}
	/**
	 * 寻找模版
	 * @param string $view 模版
	 * @param string $permission 权限
	 */
	public function display($view,$permission = ''){
		$this->view->display($view,$permission);
	}
	/**
	 * 赋值
	 * @param string $key
	 * @param string $value
	 */
	public function assign($key,$value){
		$this->view->assign($key, $value);
	}
	
}

?>