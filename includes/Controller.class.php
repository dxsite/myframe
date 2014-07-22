<?php
class Controller{
	/**
	 * ʵ����view��ֵ
	 */
	protected $view = null;
	/**
	 * ��ȡ�����ļ�
	 * @var array
	 */
	protected $confs = null;
	/**
	 * ���캯��
	 * ʵ����View,conf
	 */
	public function __construct(){
		$this->view = new View();
		$this->confs = conf::getIns();
	}
	/**
	 * ���
	 * @param string $permission Ȩ�޿���
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
			echo '������������';
			exit();
		}
		
		$class = $class.'Action';
		if(!class_exists($class)){
			exit('δ����Ŀ�������'. $class);
		}
		
		$instance = new $class();
		if(!method_exists($instance,$action)){
			exit('δ����Ŀ���������'. $action);
		}
		$instance->$action();
		
	}
	/**
	 * Ѱ��ģ��
	 * @param string $view ģ��
	 * @param string $permission Ȩ��
	 */
	public function display($view,$permission = ''){
		$this->view->display($view,$permission);
	}
	/**
	 * ��ֵ
	 * @param string $key
	 * @param string $value
	 */
	public function assign($key,$value){
		$this->view->assign($key, $value);
	}
	
}

?>