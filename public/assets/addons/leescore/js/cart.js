$(document).ready(function() {
	$(document).on('click','a.add-cart' , function() {
		var id = $(this).attr('data-paramid');
		var uri = $(this).attr('data-url');

		$.ajax({
			url: uri,
			type: 'get',
			dataType: 'json',
			data: {id: id},
			success: function(json)
			{
				if(json.status == true)
				{
					layer.msg('已加入购物车！', { icon: 1});
					return true;
				}else{
					layer.msg('加入购物车失败', { icon: 5});
					return false;
				}
			}
		});
		
	});
});