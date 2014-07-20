<?php
class Controller{
	protected $view = null;
	
	
	public function __construct(){
		$this->view = new View();
	}
	final public static function Run(){
		$control = $_GET['c'];
		$action = $_GET['a'];
		$controlFile = ROOT .'controller/'.$control.'.class.php';
		if(!file_exists($controlFile)){
			echo '控制器不存在';
			exit();
		}
		
		$class = ucwords($control);
		if(!class_exists($class)){
			exit('未定义的控制器类'. $class);
		}
		
		$instance = new $class();
		if(!method_exists($instance,$action)){
			exit('未定义的控制器方法'. $action);
		}
		$instance->$action();
		
	}
	
	public function display($view){
		$this->view->display($view);
	}
	
	public function assign($key,$value){
		$this->view->assign($key, $value);
	}
	
}

?>