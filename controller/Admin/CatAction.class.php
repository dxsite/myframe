<?php


class CatAction extends Controller{
	public function catList(){
		$cat = new CatModel();
		$list = $cat->catList();
		foreach ($list as $key=>$value){
			$this->assign($key, $value);
		}
		$this->display('cc');
	}
}

?>