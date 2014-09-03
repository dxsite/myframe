<?php


class ArtAction extends Action{
	public function indexs(){
		
		$art_id  = $_GET['art_id'];
		$art = new ArtModel();
		$info = $art->artInfo($art_id);
		$this->assign('info',$info);
		
		//上下篇
		if($art_id-1>0){
			$prev = $art->artInfo($art_id-1);
			$prevText = "<a href='index.php?c=art&a=indexs&art_id=".$prev['art_id']."'>".$prev['title']."</a>";
		}else{
			$prevText = "<a></a>";
		}
		
		if($art_id+1<=$art->getTotal()){
			$next = $art->artInfo($art_id+1);
			$nextText = "<a href='index.php?c=art&a=indexs&art_id=".$next['art_id']."'>".$next['title']."</a>";
		}else{
			$nextText = "<a></a>";
		}
		
		$this->assign('prev',$prevText);
		$this->assign('next',$nextText);
		
		//侧边栏目列表
		
		$cat = new CatModel();
		$catlist = $cat->catListNoSort(' where cat_pid = 0');
		$this->assign('catlist',$catlist);
		
		
		//侧边文章推荐
		$artlist = $art->artList(' article.cat_id = '.$info['cat_id']);
		$this->assign('artlist',$artlist);
		
		
		$this->display('new');
	}
}

?>