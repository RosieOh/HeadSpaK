jQuery(function($){
	$('.sub_tab').click(function(){
		$(this).addClass('on').siblings('.sub_tab').removeClass('on')
		$('.sub_tabcon').eq($(this).index()).addClass('on').siblings('.sub_tabcon').removeClass('on')

		$('.sub_sel').val($(this).index());
	})
	$('.sub_sel').change(function(){
		$('.sub_tabcon').eq($(this).val()).addClass('on').siblings('.sub_tabcon').removeClass('on')
		$('.sub_tab').eq($(this).val()).addClass('on').siblings('.sub_tab').removeClass('on')
	})

})