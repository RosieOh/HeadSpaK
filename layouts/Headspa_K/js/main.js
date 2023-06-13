(function($) {
	$(document).ready(function(){
		sec03TB();

		$(window).scroll(function(){
		})
	});
	
	var sec03TB = function(){
		$('.sec03_tab').click(function(){
			$(this).addClass('on').siblings('.sec03_tab').removeClass('on')
			$('.sec03_tabcon').eq($(this).index()).addClass('on').siblings('.sec03_tabcon').removeClass('on')
		})
	}
}) (jQuery);