jQuery(function($){
	var sub03ani = function(){
		var sub03WT = $('#sub03').offset().top;
		var winH = $(window).height();
		var winST = $(window).scrollTop();
		var sub03par = 100 - (((winH + winST) - sub03WT) / 12);
		if(sub03par >= 100){ sub03par = 100 }else if(sub03par <= 0){ sub03par = 0 } 
		$('#sub03').css({ backgroundPosition:'50%' + sub03par + '%' })
	}

	$(document).ready(function(){
		sub03ani();
		$(window).resize(function(){
			sub03ani();
		})
		$(window).scroll(function(){
			sub03ani();
		})
	})
})