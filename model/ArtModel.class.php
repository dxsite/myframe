<?php
class ArtModel extends Model {
	
	private $table = 'article';
	
	public function artAdd($arr){
		return $this->autoExecute($arr, $table='article');
	}
	
	public function artEdit($arr,$id){
		return $this->autoExecute($arr, $table='article','update',' where art_id = '.$id);
	}
	
	public function artNum($cat_id){
		
		
				
			$cat = new CatModel();
				
			$catlist = $cat->catListNoSort();
				
			$cattree = $cat->sort($catlist, $cat_id);
				
			$cattree[]['cat_id'] = $cat_id;
				
				
			if($cattree){
				foreach($cattree as $v){
					$list[] = $v['cat_id'];
				}
				$str = implode(',', $list);
		
				$where ='cat_id in ('.$str.')';
			}else{
				$where = 'cat_id = '.$_GET['cat_id'];
			}
		
		
		$sql = "select count(*) from ".$this->table." where ".$where;
		return $this->getNum($sql);
	}
	
	public function artList($where = 1,$offset = 0,$perpage = 10,$order = 'desc'){
		$sql = "select art_id,title,".$this->table.".cat_id,cat_name,keywords,description,flag,pubdate from " .$this->table. " left join category on ".$this->table.".cat_id = category.cat_id where ".$where. " order by art_id ".$order." limit ".$offset*$perpage.",".$perpage;
		//echo $sql;
		//exit();
		return $this->getList($sql);
	}
	
	public function getTotal($where = 1){
		$sql = "select count(*) from ". $this->table ." where ".$where;
		return $this->getNum($sql);
	}
	
	public function artLists($where = 1,$offset = 0,$perpage = 10,$order = 'desc'){
		$sql = "select art_id,content,title,".$this->table.".cat_id,cat_name,keywords,description,flag,pubdate from " .$this->table. " left join category on ".$this->table.".cat_id = category.cat_id where ".$where. " order by art_id ".$order." limit ".$offset*$perpage.",".$perpage;
		return $this->getList($sql);
	}
	
	public function artInfo($id){
		$sql = "select art_id,content,title,".$this->table.".cat_id,cat_name,keywords,description,flag,pubdate from " .$this->table. " left join category on ".$this->table.".cat_id = category.cat_id where art_id = ".$id;
		return $this->getInfo($sql);
	}
	
	public function artDel($id){
		$sql = "delete from ".$this->table." where art_id = ".$id;
		return $this->query($sql);
	}
	
	public function artDelByCat($cat_id){
		
		
				
			$cat = new CatModel();
				
			$catlist = $cat->catListNoSort();
				
			$cattree = $cat->sort($catlist, $cat_id);
				
			$cattree[]['cat_id'] = $cat_id;
				
				
			if($cattree){
				foreach($cattree as $v){
					$list[] = $v['cat_id'];
				}
				$str = implode(',', $list);
		
				$where ='cat_id in ('.$str.')';
			}else{
				$where = 'cat_id = '.$_GET['cat_id'];
			}
		
		
		
		$sql = "delete from ".$this->table." where  ".$where;
		return $this->query($sql);
	}
	
	
}

?>