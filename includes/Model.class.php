<?php
/**
 * Model 模型类
 * @author dongxiang
 */
class Model {
	protected $conn = false;
	protected $conf = false;
	/**
	 * 构造函数
	 * 链接mysql
	 * 
	 */
	public function __construct(){
		$this->conf = conf::getIns();
		$this->conn();
		$this->seldb();
		$this->setChar();
	}
	
	
	
	protected function conn(){
		$conn = mysql_connect($this->conf->host,$this->conf->username,$this->conf->passwd);
		if(!$conn){
			echo '链接失败';
			exit();
		}
	}
	
	protected function seldb(){
		$sql = 'use '.$this->conf->database;
		$this->query($sql);
	}
	
	protected function setChar(){
		$sql = 'set names '.$this->conf->char;
		$this->query($sql);
	}
	
	protected function query($sql){
		$rs = (!mysql_query($sql))?mysql_query($sql):false;
		return $rs;
	}
	
	public function getList($sql){
		$rs = $this->query($sql);
		$list = array();
		while($row = mysql_fetch_row($rs)){
			$list[] = $row;
		}
		return $list;
	}
	
	public function getInfo($sql){
		return mysql_fetch_assoc($sql);
	}
	
}

?>