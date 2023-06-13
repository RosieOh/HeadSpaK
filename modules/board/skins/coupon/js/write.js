jQuery(function($){
	$('.coupon td select option').each(function(){
		var index = $(this).index() + 1
		$(this).attr('value', index)
	})
})