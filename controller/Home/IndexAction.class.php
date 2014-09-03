<?php
class IndexAction extends Action{
	public function indexs(){
		
		$cat = new CatModel();
		//栏目列表
		$catlist = $cat->catListNoSort(' where cat_pid = 0');
		
		$this->assign('catlist', $catlist);
		
		$art = new ArtModel();
		//文章列表
		$artlist = $art->artLists(1,0,5);
		$this->assign('artlist', $artlist);
		
		//推荐文章
		$artlista = $art->artList(" flag = 'a'",0,8);
		$this->assign('artlista', $artlista);
		
		$this->display('index');
	}
	
	
}

?>