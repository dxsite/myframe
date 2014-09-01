<?php
defined('Access')||die('Access Denied');
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
			$this->fetchHome($filename);
		}
		if(!file_exists($filename.'.html')){
			echo '模板文件不存在';
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
		$smarty->caching = false;
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
	
	
	public function fetchHome($file){
		
		$fh = file_get_contents($file.".html");
		
		$reg = '/{D:(artlist)/U';
		
		preg_match($reg,$fh,$result);
		
		print_r($result);
		
		file_put_contents(a.".htm", $result);
	}
	
}

?>