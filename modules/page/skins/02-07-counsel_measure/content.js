jQuery(function($){
	$('.sub01_tab_wrap .tab').click(function(){
		$(this).addClass('on').siblings('.tab').removeClass('on');
		$('.tab_con').eq($(this).index()).addClass('on').siblings('.tab_con').removeClass('on');
	})
})