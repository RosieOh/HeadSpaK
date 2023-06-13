jQuery(function($){
	$('.sub01_btn').click(function(){
		var result = prompt('Enter password to download')
		if(result == null){
			alert('Canceled!');
			return false;
		}else if(result != "headspak0411"){
			alert('Password is incorrect!');
			return false;
		}
	})
})