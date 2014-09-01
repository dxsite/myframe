$(function(){
	
	wt = parseInt($('.file_con').css('width'))-20;
	
	
	$('.file_con_content').css('width',wt);
	
	
	
	$('.folders').live('click',function(){
		
			
			tmp = parseInt($(this).attr('tmp'))+1;
			
			pardir = $(this).attr('add')+'/'+$(this).text();
			
			li = $(this).parent();
			
			getFolder();
			
			getFile();
			
	});
	/*
	function RegExpTest(str){
		var re = /php|asp|css|js|html|jpg|gif|png|xml|bmp/;
		return re.test(str);
	}
	*/
	getFolder = function(){
		$.post(
				'http://localhost/myframe/admin.php?c=file&a=getSonfolder',
				{path:pardir},
				function(result){
					if(result){
						
						
						if(li.next('ul').length<=0){
							li.after("<ul class='son'></ul>");
							
							for(var i in result){
								li.next().append("<li><a href='javascript:void(0)' class='folders' add='"+pardir+"' tmp='close' tmp='"+tmp+"'>"+result[i]+"</a></li>");
							}
						}
					}
					li.next('ul').toggle('1000');
				},
				'json'
		);
	}
	
	
	getFile = function(){
		$.post(
				'http://localhost/myframe/admin.php?c=file&a=getFile',
				{path:pardir},
				function(result){
					
					if(result){
						
						$('.folders').parent().css('background-color','#fff');
						
						li.css('background-color','#eee');
						
						$('.file_con_content').html('');
						
						str = '';
						for(var i in result){
							str = str + "<li><a><img src='http://localhost/myframe/view/Admin/files/images/"+result[i]['ext']+".png' width='100'/><span>"+result[i]['name']+"</span></a></li>"
						}
						
						$('.file_con_content').append(str);
					
					}
				},
				'json'
		);
	}
	
	
});