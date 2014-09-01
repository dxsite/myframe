<?php

defined('Access')||die('Access Denied');
class IndexAction extends Action{
	public function indexs(){
		
		if(!$_SESSION['username']){
			$this->login();
			exit();
		}
		
		$cat = new CatModel();
		$list = $cat->catList();
		$this->assign(catlist, $list);
		$this->display('index',1);
	}
	
	public function login(){
		$this->display('login',1);
	}
	
	public function _initialize(){}
	
	public function login_do(){
		
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
		
		$user = new AdminModel();
		if($tmp = $user->login($username,$passwd)){
			$_SESSION = $tmp;
			$this->assign('flag', true);
		}else{
			$this->assign('flag', false);
		}
		$this->display('login_do',1);
	}
	
	public function loginOut(){
		$_SESSION = array();
		$this->display('loginout',1);
	}
	
}


?>