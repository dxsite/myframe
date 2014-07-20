<?php
class Templets {
	
	private $leftTag  = '{';
	private $rightTag = '}';
	private $templateFile = '';
	
	public function display($file,$data = array()){
		$this->fetch($file, $data, TRUE);
	}
	
	
	public function fetch($file,$data = array(),$display = FALSE){
		
	}
	
}

?>