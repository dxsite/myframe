<?php
class View {
	public $vars = array();
	public function assign($var,$value){
		if(is_array($var)){
			$this->vars = array_merge($this->vars, $var);
		}else{
			$this->vars[$var] = $value;
		}
	}
	
	public function display($filename,$permission = ''){
		
		
		if($permission!=''){
			$filename = ROOT .'view/Admin/'.$filename;
			$this->fetch($filename);
		}else{
			$filename = ROOT .'view/Home/'.$filename;
			$this->fetch($filename);
		}
		if(!file_exists($filename.'.html')){
			echo 'Ä£°æ²»´æÔÚ';
			exit();
		}
		
	}
	
	
	public function fetch($file){
		include(ROOT .'data/global_data.php');
		include_once(ROOT ."libs/Smarty.class.php");
		$smarty = new Smarty;
		
		$smarty->left_delimiter = "{#";
		$smarty->right_delimiter = "#}";
		$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->debugging = FALSE;
		
		$smarty->assign('ADMIN_TPL',ADMIN_TPL);
		$smarty->assign('SERVER',SERVER);
		
		if($this->vars!=array()){
			foreach($this->vars as $k=>$v){
				$smarty->assign($k,$v);
			}
		}
		
		$smarty->display("$file.html");
	}
	
}

?>