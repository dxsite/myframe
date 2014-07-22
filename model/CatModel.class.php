<?php
class CatModel extends Model {
	public function catList(){
		$sql = "select cat_id,cat_name,cat_pid from category";
		return $this->getList($sql);
	}
}

?>