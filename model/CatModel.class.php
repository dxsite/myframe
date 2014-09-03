<?php
class CatModel extends Model{
	
	public $catls = array();
	
	private $table = 'category';
	
	/**
	 * 取栏目列表
	 * @return multitype:string
	 */
	
	public function catList(){
		$sql = "select cat_id,cat_name,cat_pid from ".$this->table;
		$list = $this->getList($sql);
		return $this->sort($list);
	}
	
	
	public function catListNoSort($where = ' where 1'){
		$sql = "select cat_id,cat_name,cat_pid from ".$this->table.$where;
		return $this->getList($sql);
	}
	
	/**
	 * 列表排序
	 * @param unknown $arr
	 * @param number $pid
	 * @param number $lev
	 * @return multitype:string
	 */
	
	public function sort($arr,$pid = 0,$lev = 0){
		
		foreach ($arr as $v){
			if($v['cat_pid'] == $pid){
				$v['lev'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $lev);
				$this->catls[] = $v;
				$this->sort($arr,$v['cat_id'],$lev+1);
			}
		}
		return $this->catls;
	}
	
	
	public function catAdd($arr, $table = 'category', $mode='insert'){
		return $this->autoExecute($arr, $table, $mode);	
	}
	
	public function catEdit($arr,$id){
		return $this->autoExecute($arr,$this->table,'update',' where cat_id = '.$id);
	}
	
	public function catInfo($cat_id){
		$sql = "select cat_id,cat_name,cat_des,cat_keywords,cat_pid from ".$this->table." where cat_id =".$cat_id;
		return $this->getInfo($sql);
	}
	
	public function catDel($cat_id){
		
		if(!$cat_id){
			return false;
		}
		
		$tree = $this->sort($this->catListNoSort(),$cat_id);
		$tree[]['cat_id'] = $cat_id;
		
		
		foreach($tree as $v){
			$list[] = $v['cat_id'];
		}
		$str = implode(',', $list);
		
		$where ='cat_id in ('.$str.')';
		
		
		$sql = "delete from ".$this->table." where ".$where;
		return $this->query($sql);
	}
	
	
	
	
}

?>