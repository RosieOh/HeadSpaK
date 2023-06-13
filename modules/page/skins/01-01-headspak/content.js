jQuery(function($){
	var sub02ani = function(){
		var sub02WT = $('#sub02').offset().top; //해당 영역의 document.top으로부터의 위치값
		var winH = $(window).height(); //window의 현재 높이값
		var winST = $(window).scrollTop(); //window의 scrollTop
		var sub02par = 100 - (((winH + winST) - sub02WT) / 12); //스크롤값 및 창크기에 반응해 100이 점점 줄어든다.
		if(sub02par >= 100){ sub02par = 100 }else if(sub02par <= 0){ sub02par = 0 } //변수가 100을 초과하거나 0 미만이 되지 않게 한다.
		$('#sub02').css({ backgroundPosition:'50%' + sub02par + '%' }) //background-position 값을 변수와 연동시킨다.
	}

	$(document).ready(function(){
		sub02ani();
		$(window).resize(function(){
			sub02ani();
		})
		$(window).scroll(function(){
			sub02ani();
		})
	})
})