<?php


class ListAction extends Action{
	public function indexs(){
		
		$cat_id  = isset($_GET['cat_id'])?$_GET['cat_id']:0;
		$art = new ArtModel();
		
		//侧边文章推荐
		$artlist = $art->artList(' article.cat_id = '.$cat_id);
		$this->assign('artlist',$artlist);
		
		//侧边栏目列表
		$cat = new CatModel();
		$catlist = $cat->catListNoSort(' where cat_pid = 0');
		$this->assign('catlist',$catlist);

		$this->display('newlist');
		
	}
}

?>