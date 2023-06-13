(function($) {
	$(document).ready(function(){
		$('.search_plus_btn').click(function(){ $('.search_plus_cont').slideToggle(); })
		$(window).scroll(function(){
			var subtopST = $(window).scrollTop() / 1.5;
			$('.subtop_wrap').css({
				backgroundPosition: '50%' + subtopST + 'px'
			})
		})

		locToggle();
	})

	var locToggle = function(){
		$('.loc_btn').click(function(){
			if($(this).next('.loc_list').is(':visible')){
				$(this).removeClass('selected').next('.loc_list').slideUp(200)
				return false;
			}else{
				$('.loc_btn').removeClass('selected')
				$('.loc_list').slideUp(200);
				$(this).addClass('selected').next('.loc_list').slideDown(200)
			}
		})
	}
})(jQuery);