function submit_request(f) {
    f.nick_name.value = f.user_name.value;
    f.title.value += f.user_name.value + ' 님 상담';
    f.content.value += '<p><b>연락처 : </b>' + f.number1.value + '-' + f.number2.value + '-' + f.number3.value + '</p><br /><br />';
    f.content.value += '<p><b>E-mail : </b>' + f.email_address1.value + '@' + f.email_address2.value + '</p><br /><br />';
    f.content.value += '<p><b>Message</b><br />' + f.inquiry.value + '</p>';
    return procFilter(f, insert);
}

function submit_request_ko() {
	var f = document.contactus;

	f.nick_name.value = f.user_name.value;
	f.title.value += f.user_name.value + ' 님 상담';
    f.content.value += '<p><b>연락처 : </b>' + f.number1.value + '-' + f.number2.value + '-' + f.number3.value + '</p><br /><br />';
    f.content.value += '<p><b>E-mail : </b>' + f.email_address1.value + '@' + f.email_address2.value + '</p><br /><br />';
    f.content.value += '<p><b>Message</b><br />' + f.inquiry.value + '</p>';

	if(!$('#agree_chk').is(':checked')){
		alert("개인정보 취급방침에 동의해 주십시오.");
		return false;
	}

	if(f.user_name.value==""){
		alert("이름을 입력해 주십시오.");
		f.user_name.focus();
		return false;
	}

	if(f.number2.value=="" || f.number3.value==""){
		alert("연락처를 정확히 입력해 주십시오.");
		f.number2.focus();
		return false;
	}

	if(f.inquiry.value==""){
		alert("문의 내용을 입력해 주십시오.");
		f.inquiry.focus();
		return false;
	}

	// 쌤트리 문자 발송 전용
	cemtree_txt = f.user_name.value;
	cemtree_txt += "//cem//" + f.number1.value;
	cemtree_txt += "//cem//" + f.number2.value;
	cemtree_txt += "//cem//" + f.number3.value;
	cemtree_txt += "//cem//" + f.email_address1.value + "@" + f.email_address2.value;

	hiddenFrame.location.href = "https://www.cemtree.com/INC/headspa_sms.php?cemtree_txt="+cemtree_txt;

    return procFilter(f, insert);
}

/* 글쓰기 작성후 */
function completeDocumentInserted(ret_obj) {
    alert(ret_obj['message']);
}
