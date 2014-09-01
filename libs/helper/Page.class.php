<?php 

class Page{
	/**
	 * 总数据量
	 */
	private $total;
	/**
	 * 每页数据
	 */
	private $perpage;
	/**
	 * 总页数
	 */
	private $num;
	/**
	 * 当前页码
	 */
	private $curr;
	
	public function __construct($total,$perpage,$curr = 1){
		$this->total = $total;
		$this->perpage = $perpage;
		$this->curr = $curr;
		$this->num = ceil($total/$perpage);
	}
	
	public function show(){
		/**
		 * 上下页
		 */
		$prev = ($this->curr == 1)?'':$this->curr-1;
		$next = ($this->curr == $this->num)?'':$this->curr+1;
		
		/**
		 * 页码范围
		 */
		$start = $this->curr - 3;
		$end = $this->curr +3;
		
		/**
		 * 页码补齐
		 */

		$start = $start>1?$start:1;
		$end = ($start + 7 - 1)>$this->num?$this->num:($start + 7 - 1);

        if($end == $this->num){
			$start = $start-(3-($end - $this->curr))>1?$start-(3-($end - $this->curr)):1;
		}
        


		/**
		 * 页码列表
		 */
		$str = '';
		
		for($i = $start;$i<=$end;$i++){
			if($i == $this->curr){
				$str .= "<span><span class = 'paginate_active'> $i </span></span>";
			}else{
				$str .= "<span><span class = 'paginate_button'> $i </span></span>";
			}
		}
		
		/**
		 * 前后页，首尾页
		 */
		if($this->curr == 1){
			$startPage = "<span class='first paginate_button paginate_button_disabled'>First</span>";
			$prevPage = "<span class='previous paginate_button paginate_button_disabled'>Previous</span>";
		}else{
			$startPage = "<span class='first paginate_button'>First</span>";
			$prevPage = "<span class='previous paginate_button'>Previous</span>";
		}
		
		if($this->curr == $this->num){
			$endPage = "<span class='last paginate_button paginate_button_disabled'>Last</span>";
			$nextPage = "<span class='next paginate_button paginate_button_disabled'>Next</span>";
		}else{
			$endPage = "<span class='last paginate_button'>Last</span>";
			$nextPage = "<span class='next paginate_button'>Next</span>";
		}
		
		return $startPage.$prevPage.$str.$nextPage.$endPage;
	}
}



?>