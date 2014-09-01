<?php

/**
 * 文件上传类
 */

class Upload{
	
	public $filename = '';
	
	public $maxSize = 0;
	
	public $info = array();
	
	public $allowExt = '';
	
	public $error = '';
	
	public $path = 'data/images/';
	
	public function __construct($allowExt,$maxSize = 2,$path){
		/*
		 * 设置文件大小限制
		 */
		if($maxSize >0){
			$this->maxSize = $maxSize;
		}
		/*
		 * 允许后缀转换为数组
		 */
		if(!empty($allowExt)){
			if(is_array($allowExt)){
				$this->allowExt = array_map('strtolower',$allowExts);
			}else{
				$this->allowExt = implode(',',strtolower($allowExt));
			}
		}
		
		$this->path = $path;
	}
	
	public function up($name,$filename){
		
		
		if(!isset($_FILES[$name])or!is_array($_FILES[$name])){
			$this->error = '文件不存在';
			return false;
		}
		
		$this->filename = $filename;
		
		$this->info = $_FILES[$name];
		
		$this->checkExt();
		
		$err = array(1=>'上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值',
				2=>'上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值',
				3=>'文件只有部分被上传',
				4=>'没有文件被上传',
				6=>'找不到临时文件夹',
				7=>'文件写入失败'
		);
		
		$this->info['error'] = $err[$this->info['error']];
		
		/*
		 * 创建目录
		 */
		
		$path = $this->mk_Dir($this->path);
		echo $path;
		/*
		 * 生成文件名
		 */
		
		$filename = $this->createFile();
		
		/*
		 * 移动文件
		 */
		if(!move_uploaded_file($this->info['tmp_name'],$path.$filename)){
			$this->error = '移动文件失败';
			exit();
		}else{
			return $path.$filename;
		}
	}
	
	private function mk_Dir($path = 'data/images/'){
		$path = ROOT . $path .date('Ym',time())."/";
		if(is_dir($path)){
			return $path;
		}
		return mkdir($path,0777,true)?$path:false;
	}
	
	private function createFile(){
		if($this->filename){
			return $this->filename.'.'.$this->info['ext'];
		}
		return $this->randName().'.'.$this->info['ext'];
	}
	
	
	private function randName(){
		return date('d',time()).rand(10000,99999);
	}
	
	private function checkExt(){
		$this->info['ext']  = strtolower(pathinfo($this->info['name'],PATHINFO_EXTENSION));
		if(empty($this->allowExts)) {
            return true;
        }
		return in_array($this->info['ext'],$this->allowExt);
	}
	
	public function checkSize(){
		if($this->maxSize <= 0) {
			return true;
		}
		
		return $this->maxSize * 1024 * 1024 >= $this->info['size'] ;
	}
}






?>