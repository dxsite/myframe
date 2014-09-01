<?php
class Folder {
	/*
	 * 所在目录
	 */
	public $thisdir;
	/**
	 * 目录集合
	 */
	public $arr = array();
	
	public function __construct($path){
		$this->thisdir = $path;
	}
	
	/**
	 * 读取下级目录
	 */
	public function readDir($path,$i = 1){
		$dh = opendir($path);
		while(($d = readdir($dh))!==false){
			if($d == '.'||$d =='..'){
				continue;
			}
			if(is_dir($path.'/'.$d)){
				$this->arr['folder'][] = $d;
				//$this->readDir($path.'/'.$d);
				
			}else{
				
				$ext = substr(strrchr($d, '.'), 1);
				
				if(!$this->preExt($ext)){
					$ext = 'other';
				}
				
				$this->arr['file'][] = array('name'=>$d,'ext'=>$ext);
			}
		}
		return $this->arr;
	}
	
	public function preExt($str){
		$rule  = "/php|asp|css|js|html|jpg|gif|png|xml|bmp/";
		preg_match($rule,$str,$result);
		return $result;
	}
	
}

?>