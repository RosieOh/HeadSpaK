jQuery(function($){
	var paral01ani = function(){
		var paral01WT = $('.paral01').offset().top;
		var winH = $(window).height();
		var winST = $(window).scrollTop();
		var paral01par = 100 - (((winH + winST) - paral01WT) / 12);
		if(paral01par >= 100){ paral01par = 100 }else if(paral01par <= 0){ paral01par = 0 }
		$('.paral01').css({ backgroundPosition:'50%' + paral01par + '%' })
	}

	$(document).ready(function(){
		paral01ani();
		$(window).resize(function(){
			paral01ani();
		})
		$(window).scroll(function(){
			paral01ani();
		})
	})

	var paral02ani = function(){
		var paral02WT = $('.paral02').offset().top;
		var winH = $(window).height();
		var winST = $(window).scrollTop();
		var paral02par = 100 - (((winH + winST) - paral02WT) / 12);
		if(paral02par >= 100){ paral02par = 100 }else if(paral02par <= 0){ paral02par = 0 }
		$('.paral02').css({ backgroundPosition:'50%' + paral02par + '%' })
	}

	$(document).ready(function(){
		paral02ani();
		$(window).resize(function(){
			paral02ani();
		})
		$(window).scroll(function(){
			paral02ani();
		})
	})

	var paral03ani = function(){
		var paral03WT = $('.paral03').offset().top;
		var winH = $(window).height();
		var winST = $(window).scrollTop();
		var paral03par = 100 - (((winH + winST) - paral03WT) / 12);
		if(paral03par >= 100){ paral03par = 100 }else if(paral03par <= 0){ paral03par = 0 }
		$('.paral03').css({ backgroundPosition:'50%' + paral03par + '%' })
	}

	$(document).ready(function(){
		paral03ani();
		$(window).resize(function(){
			paral03ani();
		})
		$(window).scroll(function(){
			paral03ani();
		})
	})
})