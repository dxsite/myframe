<?php

abstract class db{
	abstract protected function conn();
	abstract protected function seldb();
	abstract protected function setChar();
	abstract protected function getRow($sql);
	abstract protected function getAll($sql);
	abstract protected function query($sql);
	abstract protected function error();
}

class mysql extends db{
	
	private static $ins = false;
	private $conn = false;
	private $conf = false;

	final protected function __construct(){
		$this->conf = conf::getIns();
		$this->conn();
		$this->seldb($this->conf->database);
		$this->setChar($this->conf->char);
	}

	protected function __clone(){}

	final static public function getIns(){
		if(self::$ins === false){
			self::$ins = new self();
		}
		return self::$ins;
	}

	protected function conn(){
		if(!$this->conn = mysql_connect($this->conf->host,$this->conf->username,$this->conf->passwd)){
			$err = new Exception('链接失败');
			throw $err;
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
		return mysql_query($sql,$this->conn);
	}

	public function getRow($sql){
		$rs = $this->query($sql);
		return mysql_fetch_assoc($rs);
	}

	public function getAll($sql){
		$rs = $this->query($sql);
		$list = array();
		while($row = mysql_fetch_assoc($rs)){
			$list[] = $row;
		}
		return $list;
	}
	
	public function error() {
        print_r(mysql_error($this->conn));
    }
}

