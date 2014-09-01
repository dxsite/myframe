$(function(){
	//数据总数
	
	$('span.paginate_button').live('click',function(){
		pageid = $(this).html();
		t();
	});
	
	$('.next').live('click',function(){
		var thiscurr = $('.paginate_active').html();
		pageid = parseInt(thiscurr)+1;
		t();
	});
	
	$('.previous').live('click',function(){
		var thiscurr = $('.paginate_active').html();
		pageid = parseInt(thiscurr)-1;
		t();
	});
	
	$('.first').live('click',function(){
		pageid = 1;
		t();
	});
	
	$('.last').live('click',function(){
		str = location.href;
		str = str.replace('artList','ajaxNum');
		getNum();
		pageid = parseInt($('.getnum').val());
		t();
	});
	
	t = function(){
		$.post(
				location.href.replace('artList','ajaxList'),
				{pageid:pageid},
				function(result){
					var json=JSON.parse(result);
					$('.mws-datatable-fn tbody').html(json.con);
					$('.paging_full_numbers').html(json.page);
				}
		);
	}
	
	
	getNum = function(){
		$.post(
				str,
				{pageid:0},
				function(result){
					$('.getnum').val(result);
				}
				
		);
		
	}
	
}); 