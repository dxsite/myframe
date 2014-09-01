<?php

class AdminAction extends Action{
	
	
	
	public function adminList(){
		$admin = new AdminModel();
		$list = $admin->adminList();
		
		$cat = new CatModel();
		$catlist = $cat->catList();
		
		$power = new PowerModel();
		$plist = $power->powerList();
		
		$this->assign('plist', $plist);
		$this->assign('catlist', $catlist);
		$this->assign('alist',$list);
		$this->display('adminlist',1);
	}
	
	public function adminAdd_do(){
		
		$data = array();
		
		$data['username'] = trim($_POST['username']);
		$data['passwd'] = trim($_POST['passwd']);
		$passwds =  trim($_POST['passwds']);
		if($passwds!=$data['passwd']){
			$this->err = '密码不一致';
			$this->showErr();
			exit();
		}
		$data['nickname'] = trim($_POST['nickname']);
		$data['power'] = trim($_POST['power']);
		
		$str = '';
		
		foreach ($_POST['powerls'] as $v){
			$str .= $v.",";
		}
		$data['powerls'] = rtrim($str,',');
		
		$admin = new AdminModel();
		$rs = $admin->adminAdd($data);
		
		$this->url = 'admin.php?c=admin&a=adminList';
		
		if($rs){
			$this->succ = '添加管理员成功';
			$this->showSucc();
		}else{
			$this->err = '添加管理员失败';
			$this->showErr();
		}
		
	}
}

?>