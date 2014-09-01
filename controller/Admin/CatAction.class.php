<?php
defined('Access')||die('Access Denied');

class CatAction extends Action{
	public function catList(){
		$cat = new CatModel();
		$list = $cat->catList();
		$cat->catls = array();
		$this->assign('catlist', $list);
		$this->display('catlist',1);
	}
	
	public function catAdd_do(){
		$data = array();
		$data['cat_name'] = $_POST['cat_name'];
		$data['cat_pid'] = $_POST['cat_pid'];
		$data['cat_des'] = $_POST['cat_des'];
		$data['cat_keywords'] = $_POST['cat_keywords'];
		$cat = new CatModel();
		
		$this->url = 'admin.php?c=cat&a=catList';
		
		if($cat->catAdd($data)){
			$this->succ = '添加栏目成功';
			$this->showSucc();
		}else{
			$this->succ = '添加栏目失败';
			$this->showErr();
		}
	}
	
	public function catAdd(){
		$cat = new CatModel();
		$catlist = $cat->catList();
		$this->assign(catlist, $catlist);
		$this->display('catadd',1);
	}
	
	public function catEdit(){
		$id = $_GET['id'];
		$cat = new CatModel();
		$info = $cat->catInfo($id);
		$catlist = $cat->catList();
		$this->assign('info', $info);
		$this->assign('catlist', $catlist);
		$this->display('catedit',1);
	}
	
	public function catEdit_do(){
		$data = array();
		$cat_id = $_POST['cat_id'];
		$data['cat_name'] = $_POST['cat_name'];
		$data['cat_keywords'] = $_POST['cat_keywords'];
		$data['cat_des'] = $_POST['cat_des'];
		$data['cat_pid'] = $_POST['cat_pid'];
		$data['date'] = time();
		
		$this->url='admin.php?c=cat&a=catList';
		
		$cat = new CatModel();
		if($cat->catEdit($data,$cat_id)){
			$this->succ = '修改栏目成功';
			$this->showSucc();
		}else{
			$this->err = '修改栏目失败';
			$this->showErr();
		}
	}
	
	public function catDel(){
		$id = $_GET['id']+0;
		
		$art = new ArtModel();
		
		$notice = '确定删除编号为'.$id.'的栏目么？';
		if($rs = $art->artNum($id)){
			$notice .= '(栏目下存在'.$rs.'篇文章)';
		}
		$this->assign('post_url', 'admin.php?c=cat&a=catDel_do');
		$this->assign('back_url', 'admin.php?c=cat&a=catList');
		$this->assign('name', 'cat_id');
		$this->assign('notice', $notice);
		$this->assign('id', $id);
		$this->display('infomsg',1);
	}
	
	
	public function catDel_do(){
		$id = $_POST['cat_id']+0;
		$art = new ArtModel();
		$cat = new CatModel();
		
		$this->url='admin.php?c=cat&a=catList';
		
		if(!$art->artDelByCat($id)){
			$this->err = '所属文章删除失败';
			$this->showErr();
		}else if(!$cat->catDel($id)){
			$this->err = '栏目删除失败';
			$this->showErr();
		}else{
			$this->succ = '删除栏目成功';
			$this->showSucc();
		}
	}
}

?>