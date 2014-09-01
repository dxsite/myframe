<?php
defined('Access')||die('Access Denied');
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
		$this->conn = mysql_connect($this->conf->host,$this->conf->username,$this->conf->passwd);
		if(!$this->conn){
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
		$rs = mysql_query($sql,$this->conn);
		return $rs;
	}
	
	public function getList($sql){
		$rs = $this->query($sql);
		if(!$rs){
			echo '查询失败:'.mysql_error($this->conn);
			return false;
		}
		$list = array();
		while($row = mysql_fetch_assoc($rs)){
			$list[] = $row;
		}
		return $list;
	}
	
	public function getInfo($sql){
		$rs = $this->query($sql);
		return mysql_fetch_assoc($rs);
	}
	
	public function autoExecute($arr,$table,$mode='insert',$where = ' where 1 limit 1') {
		
	
		if(!is_array($arr)) {
			return false;
		}
	
		if($mode == 'update') {
			$sql = 'update ' . $table .' set ';
			foreach($arr as $k=>$v) {
				$sql .= $k . "='" . $v ."',";
			}
			$sql = rtrim($sql,',');
			$sql .= $where;
			
			return $this->query($sql);
		}
	
		$sql = 'insert into ' . $table . ' (' . implode(',',array_keys($arr)) . ')';
		$sql .= ' values (\'';
		$sql .= implode("','",array_values($arr));
		$sql .= '\')';
	
		return $this->query($sql);
	
	}
	
	public function getNum($sql){
		$rs = $this->query($sql);
		if(!$rs){
			echo '查询失败:'.mysql_error($this->conn);
			return false;
		}
		$row = mysql_fetch_row($rs);
		return $row[0];
	}
	
	public function check($sql){
		$rs = $this->query($sql);
		return (mysql_num_rows($rs)>=1)?true:false; 
	}
	
}

?>