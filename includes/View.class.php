<?php
class View {
	public $vars = array();
	public function assign($key,$value){
		$this->vars[$key] = $value;
	}
	
	public function display($filename){
		$filename = ROOT .'view/'.$filename.'.php';
		
		if(!file_exists($filename)){
			echo 'Ä£°æ²»´æÔÚ';
			exit();
		}
		//$filecontent = file_get_contents($filename);
		//return file_put_contents($this->cacheFile, $content);
		include $filename;
	}
}

?>