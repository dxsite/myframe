<?php
class PowerModel extends Model{
	private $table = 'power';
	
	public function powerList(){
		$sql = "select power_id,powername from ".$this->table." order by power_id asc";
		return $this->getList($sql);
	}
	
}

?>