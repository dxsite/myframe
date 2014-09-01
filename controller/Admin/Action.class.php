<?php


class Action extends Controller{
	
	protected $succ = '';
	protected $url = '';
	protected $err = '';
	
	public function _initialize(){
		$this->checkSession();
	}
	
	protected function checkSession(){
		if(!$_SESSION){
			$this->display('login',1);
			exit();
		}
	}
	
	protected function showSucc(){
		$this->assign('succ', $this->succ);
		$this->assign('url', $this->url);
		$this->display('succmsg',1);
	}
	
	protected function showErr(){
		$this->assign('err', $this->err);
		$this->assign('url', $this->url);
		$this->display('errmsg',1);
	}
}

?>