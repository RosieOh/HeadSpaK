jQuery(function($){
	$('.sub01_btn').click(function(){
		var result = prompt('다운로드를 위한 비밀번호를 입력하세요.')
		if(result == null){
			alert('취소하였습니다.');
			return false;
		}else if(result != "headspak0411"){
			alert('비밀번호가 맞지 않습니다.');
			return false;
		}
	})
})