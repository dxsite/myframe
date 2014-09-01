<?php
class SysconfigAction extends Action{

	public function configList(){
		$config = new SysconfigModel();
		$config1 = $config->sysconfigList(1);
		$this->assign('config1',$config1);
		$this->display('configlist',1);
	}

}

?>