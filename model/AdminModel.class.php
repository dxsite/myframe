<?php
class AdminModel extends Model{
	
	private $table = 'admin';
	
	public function login($username,$passwd){
		if(!$this->checkUser($username, $passwd)){
			return false;
		}
		$sql = "select username,user_id,passwd,nickname from ".$this->table." where username = '".$username."'";
		//print_r($this->getInfo($sql));
		return $this->getInfo($sql);
	}
		
	public function checkUser($username,$passwd){
		$sql = "select username,passwd from ".$this->table." where username = '".$username."'";
		
		if(!$this->check($sql)){
			return false;
		}
		$sql = "select username,passwd from ".$this->table." where username = '".$username."' and passwd = '".$passwd."'";
		
		if(!$this->check($sql)){
			return false;
		}
		return true;
	}
	
	public function adminList(){
		$sql = "select user_id,username,nickname,power from admin";
		return $this->getList($sql);
	}
	
	public function adminAdd($arr, $table = 'admin', $mode='insert'){
		return $this->autoExecute($arr, $table, $mode);	
	}
}

?>