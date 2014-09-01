<?php
class SysconfigModel extends Model{
	
	protected $table = 'sysconfig';
	
	public function sysconfigList($group){
		$sql = "select sid,varname,info,value,group_id from ".$this->table." where group_id = ".$group;
		return $this->getList($sql);
	}
	
}

?>