jQuery(function($){
	$('.agree_chk_wrap label').click(function(){
		$('#agree_chk').toggleClass('checked')
	})
})

function submit_request(f) {
	if(!$('#agree_chk').hasClass('checked')){
		alert('개인정보 취급방침 및 정보성 메일 수신, 이용약관에 동의하셔야 합니다.')
		return false;
	}else if(f.number_1.value == '' || f.number_2.value == '' || f.number_3.value == '' || f.email_address1.value == '' || f.email_address2.value == '' ){
		return procFilter(f, insert);
		return false;
	}else{
		f.nick_name.value = f.name_hide.value;
		f.title.value += f.name_hide.value + ' 님의 온라인 문의입니다.';
		f.content.value += '<p><b>성함 : </b>' + f.user_name.value + '</p>';
		f.content.value += '<p><b>E-mail : </b>' + f.email_address1.value + '@' + f.email_address2.value + '</p>';
		f.content.value += '<p><b>Phone number : </b>' + f.number1.value + '-' + f.number2.value + '-' + f.number3.value + '</p>';

		f.content.value += '<p><b>Message</b><br />' + f.inquiry.value + '</p>';

		return procFilter(f, insert);
	}
}

/* 글쓰기 작성후 */
function completeDocumentInserted(ret_obj) {
    alert(ret_obj['message']);
    window.location.reload();
}
