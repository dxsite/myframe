<?php

defined('Access')||die('Access Denied');

class FileAction extends Action {
	public function upImg_do(){
		$filename = $_POST['filename'];
		$upl = new Upload($this->confs->allowimg,'5',$path = 'data/images/');
		$upl->up(key($_FILES),$filename);
	}
	public function upImg(){
		$this->display('upload',1);
	}
	
	public function fileManager(){
		$folder = new Folder(ROOT);
		$list = $folder->readDir($folder->thisdir);
		
		$this->assign('flist', $list['file']);
		$this->assign('mlist', $list['folder']);
		$this->display('filemanager',1);
	}
	
	public function getSonfolder(){
		
		$path = $_POST['path'];
		$folder = new Folder($path);
		$list = $folder->readDir($folder->thisdir);
		echo json_encode($list['folder']);
	}
	
	public function getFile(){
		$path = $_POST['path'];
		$folder = new Folder($path);
		$list = $folder->readDir($folder->thisdir);
		echo json_encode($list['file']);
	}
	
	
}

?>