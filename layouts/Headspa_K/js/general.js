;(function($) {
	$(document).ready(function(){
		$(window).scroll();
		addSwitch();
		pcSub();
		scrollHeader();
		mobileMenuOpen();
		langtoggle();
	});



/////////////////////////functions/////////////////////////

	var pcSub = function(){
		$('.depth1').hover(
			function(){ $(this).children('ul').stop(true,true).hide().fadeIn(200) },
			function(){ $(this).children('ul').stop(true,true).fadeOut(200) }
		);
		$('.depth2').hover(
			function(){ $(this).children('ul').stop(true,true).hide().fadeIn(200) },
			function(){ $(this).children('ul').stop(true,true).fadeOut(200) }
		);
	}


	var scrollHeader = function(){
		$(window).scroll(function(){
			var winST = $(window).scrollTop()
			if (winST <= 0) {
				$('#header').removeClass('fixed')
			}else{
				$('#header').addClass('fixed')
			}
		})//header_sceroll
	}

	var langtoggle = function(){
		$('.lang_btn_link').click(function(){
			$('.lang_menu_wrap').addClass('spreaded').fadeIn(200);
		});
		$('.lang_menu_close').click(function(){
			$('.lang_menu_wrap').removeClass('spreaded').fadeOut(200);
		});
	}

	var addSwitch = function(){
		$('.member_btn_link').click(function(){
			// $(this).toggleClass('spreaded');
			$('.member_menu_wrap').addClass('spreaded').fadeIn(200);
		});
		$('.member_menu_close').click(function(){
			$('.member_menu_wrap').removeClass('spreaded').fadeOut(200);
		});
	}

	var mobileMenuOpen = function(){
		$('.mo_menu_btn').click(function(){
			var headerOffset = $("#header").offset().top;
			if ($(window).scrollTop() >= headerOffset) {
				$('.mo_gnb').slideToggle(200);
			}else{
				$('body, html').animate({scrollTop: headerOffset}, 500);
				$('.mo_gnb').delay(500).slideToggle(200);
			}
		});
		$('.mo_depth_list1').click(function(){
			$(this).toggleClass('spreaded').next('ul').slideToggle(300).parents().siblings('.mo_depth1').children('.mo_depth_list1').removeClass('spreaded').next('ul').slideUp(300);
		})
		$('.mo_depth_list2').click(function(){
			$(this).toggleClass('spreaded').next('ul').slideToggle(300).parents().siblings('.mo_depth2').children('.mo_depth_list2').removeClass('spreaded').next('ul').slideUp(300);
		})
		$('.pc_lang button').click(function(){
			$(this).next('ul').slideToggle(300)
		})
		$(window).resize(function(){
			if( $(window).width() >= 850 ){ $('.mo_gnb').hide(1); }else{ return false; }
		})
	};

}) (jQuery);