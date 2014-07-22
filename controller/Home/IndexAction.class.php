<?php
class IndexAction extends Controller{
	public function indexs(){
		$this->assign('info', 'doxng');
		$this->assign('list',array('d'=>'dx',2=>'cc'));
		$this->assign('lists',array(array('d'=>'dx',2=>'cc'),array('d'=>'dc',2=>'dc')));
		$this->display('index');
	}
	
}


?>