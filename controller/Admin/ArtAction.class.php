<?php

defined('Access')||die('Access Denied');

class ArtAction extends Action {
	
	
	public function artAdd(){
		$cat = new CatModel();
		$list = $cat->catList();
		$this->assign(catlist, $list);
		$this->display('artadd',1);
	}
	
	
	public function artAdd_do(){
		$data = array();
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		$data['cat_id'] = $_POST['cat_id'];
		$data['content'] = $_POST['content'];
		$data['flag'] = $_POST['flag'];
		$data['sendate'] = time();
		
		$this->url='admin.php?c=art&a=artList';
		
		$art = new ArtModel();
		if($art->artAdd($data)){
			$this->succ = '添加文章成功';
			$this->showSucc();
		}else{
			$this->err = '添加文章失败';
			$this->showErr();
		}
	}
	
	
	public function artList(){
		
		
		
		
		if(isset($_GET['cat_id'])){
			
			$cat = new CatModel();
			
			$catlist = $cat->catListNoSort();
			
			$cattree = $cat->sort($catlist, $_GET['cat_id']);
			
			$cattree[]['cat_id'] = $_GET['cat_id'];
			
			
			if($cattree){
				foreach($cattree as $v){
					$list[] = $v['cat_id'];
				}
				$str = implode(',', $list);
				
				$where ='article.cat_id in ('.$str.')';
			}else{
				$where = 'article.cat_id = '.$_GET['cat_id'];
			}
		}else{
			$where = '1';
		}
		
		
		
		$art = new ArtModel();
		
		$total = $art->getTotal($where);
		
		$offset = isset($_POST['pageid'])?$_POST['pageid']-1:0;
		
		$page = new Page($total,2);
		$pagelist = $page->show();
		
		$artlist = $art->artList($where,$offset,2);
		
		
		$this->assign('total', $total);
		$this->assign('pagelist', $pagelist);
		$this->assign('artlist', $artlist);
		$this->display('artlist',1);
	}
	
	public function ajaxList(){
		
		if(isset($_GET['cat_id'])){
				
			$cat = new CatModel();
				
			$catlist = $cat->catListNoSort();
				
			$cattree = $cat->sort($catlist, $_GET['cat_id']);
				
			$cattree[] = $_GET['cat_id'];
				
			if($cattree){
				foreach($cattree as $v){
					$list[] = $v['cat_id'];
				}
				$str = implode(',', $list);
		
				$where ='article.cat_id in ('.$str.')';
			}else{
				$where = 'article.cat_id = '.$_GET['cat_id'];
			}
		}else{
			$where = '1';
		}
		
		
		$offset = isset($_POST['pageid'])?$_POST['pageid']:0;
		$art = new ArtModel();
		$total = $art->getTotal($where);
		$artlist = $art->artList($where,$offset-1,2);
		
		$str = '';
		foreach($artlist as $v){
			if($i%2){$tmp = 'odd';}else{$tmp = 'even';}
			$str .= "<tr class='gradeX ".$tmp."'><td>".$v['art_id']."</td><td>".$v['title']."</td><td>".$v['pubdate']."</td><td class='center'>".$v['cat_name']."</td><td class='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='mws-ic-16 ic-edit' href='".SERVER."admin.php?c=art&a=artEdit&id=".$v['art_id']."'><img src='".ADMIN_TPL."css/icons/16/edit.png'/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='mws-ic-16 ic-cross' href='".SERVER."admin.php?c=art&a=artDel&id=".$v['art_id']."'><img src='".ADMIN_TPL."/css/icons/16/cross.png'/></a></td></tr>";
			$i++;
		}
		
		$page = new Page($total, 2,$offset);
		$pagelist = $page->show();
		
		$arr = array();
		$arr['con'] = $str;
		$arr['page'] = $pagelist;
		echo json_encode($arr);
	}
	
	public function ajaxNum(){
		$where = isset($_GET['art_id'])?'art_id = '.$_GET['art_id']+0:'1';
		$art = new ArtModel();
		$total = $art->getTotal($where);
		$page = ceil($total/2);
		echo $page;
	}
	
	
	public function search(){
		$this->display('artsearch','1');
	}
	
	public function search_do(){
		
		$key = trim($_POST['keywords']);
		
		$err = '';
		if(empty($key)){
			$this->err = '查找条件为空';
		}else{
			
			$where = " content like '%".$key."%'";
			
			$art = new ArtModel();
			
			$total = $art->getTotal($where);
			
			$offset = isset($_POST['pageid'])?$_POST['pageid']-1:0;
			
			$page = new Page($total,2);
			$pagelist = $page->show();
			
			$artlist = $art->artLists($where,$offset,2);
			
			if(!$artlist){
				$this->err = '插无结果';
			}
		}
		$this->assign('err', $this->err);
		$this->assign('total', $total);
		$this->assign('pagelist', $pagelist);
		$this->assign('artlist', $artlist);
		
		$this->display('artsearch_do',1);
	}
	
	public function artEdit(){
		$id = $_GET['id'];
		$art = new ArtModel();
		$info = $art->artInfo($id);
		$cat = new CatModel();
		$list = $cat->catList();
		$this->assign(catlist, $list);
		$this->assign('info', $info);
		$this->display('artedit',1);
	}
	
	public function artEdit_do(){
		$data = array();
		$art_id = $_POST['art_id'];
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		$data['cat_id'] = $_POST['cat_id'];
		$data['content'] = $_POST['content'];
		$data['flag'] = $_POST['flag'];
		$data['pubdate'] = time();
		
		$this->url='admin.php?c=art&a=artList';
		
		$art = new ArtModel();
		if($art->artEdit($data,$art_id)){
			$this->succ = '修改文章成功';
			$this->showSucc();
		}else{
			$this->err = '修改文章失败';
			$this->showErr();
		}
	}
	
	public function artDel(){
		$id = $_GET['id']+0;
		$notice = '确定删除编号为'.$id.'的文档么？';
		$this->assign('post_url', 'admin.php?c=art&a=artDel_do');
		$this->assign('back_url', 'admin.php?c=art&a=artList');
		$this->assign('name', 'article_id');
		$this->assign('notice', $notice);
		$this->assign('id', $id);
		$this->display('infomsg',1);
	}
	
	public function artDel_do(){
		$id = $_POST['article_id'];
		$art = new ArtModel();
		
		$this->url='admin.php?c=art&a=artList';
		
		if($art->artDel($id)){
			$this->succ = '删除文章成功';
			$this->showSucc();
		}else{
			$this->err = '删除文章失败';
			$this->showErr();
		}
	}
	
}

?>