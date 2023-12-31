function insert_pop_conn(form){ return legacy_filter('insert_pop_conn', form, 'pop_up', 'procPop_upAdminInsertPopupConn', completeInsertPopupConn, ['error','message','popup_conn_srl'], '등록하시겠습니까?', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["insert_pop_conn", {'popup_conn_srl': {},'popup_name': {required:true},'target_srl': {required:true},'popup_module_srl': {required:true},'content': {},'startdate': {required:true},'enddate': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['popup_conn_srl','popup_conn_srl']);
	v.cast('ADD_MESSAGE',['popup_name','이름']);
	v.cast('ADD_MESSAGE',['target_srl','target_srl']);
	v.cast('ADD_MESSAGE',['popup_module_srl','popup_module_srl']);
	v.cast('ADD_MESSAGE',['content','내용']);
	v.cast('ADD_MESSAGE',['startdate','startdate']);
	v.cast('ADD_MESSAGE',['enddate','enddate']);
	v.cast('ADD_MESSAGE',['popup_url','popup_url']);
	v.cast('ADD_MESSAGE',['popup_linkto','popup_linkto']);
	v.cast('ADD_MESSAGE',['popup_linkto_newwindow','popup_linkto_newwindow']);
	v.cast('ADD_MESSAGE',['width','width']);
	v.cast('ADD_MESSAGE',['height','height']);
	v.cast('ADD_MESSAGE',['top','상단 위치']);
	v.cast('ADD_MESSAGE',['left','측면 위치']);
	v.cast('ADD_MESSAGE',['popup_type','오픈 형태']);
	v.cast('ADD_MESSAGE',['open_type','내부 레이어로 띄우기']);
	v.cast('ADD_MESSAGE',['exp_days','exp_days']);
	v.cast('ADD_MESSAGE',['isnull','%s 값은 필수입니다.']);
	v.cast('ADD_MESSAGE',['outofrange','%s의 글자 수를 맞추어 주세요.']);
	v.cast('ADD_MESSAGE',['equalto','%s이(가) 잘못되었습니다.']);
	v.cast('ADD_MESSAGE',['invalid','%s의 값이 올바르지 않습니다.']);
	v.cast('ADD_MESSAGE',['invalid_email','%s의 값은 올바른 메일 주소가 아닙니다.']);
	v.cast('ADD_MESSAGE',['invalid_userid','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_user_id','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_homepage','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com/)']);
	v.cast('ADD_MESSAGE',['invalid_url','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com/)']);
	v.cast('ADD_MESSAGE',['invalid_korean','%s의 형식이 잘못되었습니다. 한글로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','%s의 형식이 잘못되었습니다. 한글과 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha','%s의 형식이 잘못되었습니다. 영문으로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','%s의 형식이 잘못되었습니다. 영문과 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_mid','%s의 형식이 잘못되었습니다. 첫 글자는 영문으로 시작해야 하며 \'영문+숫자+_\'로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_number','%s의 형식이 잘못되었습니다. 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_float','%s의 형식이 잘못되었습니다. 실수로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_extension','%s의 형식이 잘못되었습니다. *.* 나 *.jpg;*.gif; 처럼 입력해야 합니다.']);
})(jQuery);