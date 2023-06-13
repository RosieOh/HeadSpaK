jQuery(function($){
	var accord = function(){
		$('.sub02_acc_title').click(function(){
			if($(this).hasClass('on')){
				$(this).removeClass('on').next('.sub02_acc_desc').slideUp(300)
			}else{
				$(this).addClass('on').next('.sub02_acc_desc').slideDown(300)
				$(this).parent('li').siblings('li').children('.sub02_acc_title').removeClass('on').next('.sub02_acc_desc').slideUp(300)
			}
		})
	}
	//tabswitch();
	accord();
})