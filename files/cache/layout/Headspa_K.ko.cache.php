<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "";
$layout_info->layout = "Headspa_K";
$layout_info->type = "";
$layout_info->path = "./layouts/Headspa_K/";
$layout_info->title = "SIC";
$layout_info->description = "";
$layout_info->version = "v1.0.0";
$layout_info->date = "20200611";
$layout_info->homepage = "";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "ONPLUS";
$layout_info->author[0]->email_address = "onplus_cpo@naver.com";
$layout_info->author[0]->homepage = "";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->layout_type = new stdClass;
$layout_info->extra_var->layout_type->group = "기본 세팅";
$layout_info->extra_var->layout_type->title = "레이아웃 타입";
$layout_info->extra_var->layout_type->type = "select";
$layout_info->extra_var->layout_type->value = $vars->layout_type;
$layout_info->extra_var->layout_type->description = "메인/서브 타입을 선택하세요.";
$layout_info->extra_var->layout_type->options = array();
$layout_info->extra_var->layout_type->options["main"] = new stdClass;
$layout_info->extra_var->layout_type->options["main"]->val = "메인 페이지 타입";
$layout_info->extra_var->layout_type->options["sub"] = new stdClass;
$layout_info->extra_var->layout_type->options["sub"]->val = "서브 페이지 타입";
$layout_info->extra_var->header_logo = new stdClass;
$layout_info->extra_var->header_logo->group = "기본 세팅";
$layout_info->extra_var->header_logo->title = "헤더 로고";
$layout_info->extra_var->header_logo->type = "image";
$layout_info->extra_var->header_logo->value = $vars->header_logo;
$layout_info->extra_var->header_logo->description = "헤더에 적용할 로고 이미지를 첨부하세요. (jpg, png, gif 허용. 이미지 높이 50픽셀로.)";
$layout_info->extra_var->header_text = new stdClass;
$layout_info->extra_var->header_text->group = "기본 세팅";
$layout_info->extra_var->header_text->title = "로고 텍스트";
$layout_info->extra_var->header_text->type = "text";
$layout_info->extra_var->header_text->value = $vars->header_text;
$layout_info->extra_var->header_text->description = "헤더 로고에 대체하여 사용할 텍스트를 입력하세요.";
$layout_info->extra_var->logo_text_color = new stdClass;
$layout_info->extra_var->logo_text_color->group = "기본 세팅";
$layout_info->extra_var->logo_text_color->title = "로고 텍스트 컬러";
$layout_info->extra_var->logo_text_color->type = "text";
$layout_info->extra_var->logo_text_color->value = $vars->logo_text_color;
$layout_info->extra_var->logo_text_color->description = "헤더 로고 텍스트에 사용할 컬러값을 입력하세요. (Hex 값 입력 - ex:#888)";
$layout_info->extra_var->header_logo_link = new stdClass;
$layout_info->extra_var->header_logo_link->group = "기본 세팅";
$layout_info->extra_var->header_logo_link->title = "로고 링크";
$layout_info->extra_var->header_logo_link->type = "text";
$layout_info->extra_var->header_logo_link->value = $vars->header_logo_link;
$layout_info->extra_var->header_logo_link->description = "헤더 로고에 연결할 url을 입력하세요.";
$layout_info->extra_var->member_use = new stdClass;
$layout_info->extra_var->member_use->group = "기본 세팅";
$layout_info->extra_var->member_use->title = "회원 메뉴 사용";
$layout_info->extra_var->member_use->type = "select";
$layout_info->extra_var->member_use->value = $vars->member_use;
$layout_info->extra_var->member_use->description = "회원 메뉴 사용 여부를 선택하세요";
$layout_info->extra_var->member_use->options = array();
$layout_info->extra_var->member_use->options["Y"] = new stdClass;
$layout_info->extra_var->member_use->options["Y"]->val = "사용함";
$layout_info->extra_var->member_use->options["N"] = new stdClass;
$layout_info->extra_var->member_use->options["N"]->val = "사용하지 않음";
$layout_info->extra_var->profile_img = new stdClass;
$layout_info->extra_var->profile_img->group = "기본 세팅";
$layout_info->extra_var->profile_img->title = "프로필 이미지";
$layout_info->extra_var->profile_img->type = "image";
$layout_info->extra_var->profile_img->value = $vars->profile_img;
$layout_info->extra_var->profile_img->description = "회원 메뉴 박스 프로필에 사용할 이미지를 적용합니다. (150*150픽셀 이미지 권장.)";
$layout_info->extra_var->profile_desc = new stdClass;
$layout_info->extra_var->profile_desc->group = "기본 세팅";
$layout_info->extra_var->profile_desc->title = "프로필 캡션";
$layout_info->extra_var->profile_desc->type = "text";
$layout_info->extra_var->profile_desc->value = $vars->profile_desc;
$layout_info->extra_var->profile_desc->description = "프로필 이미지 하단에 사용할 텍스트를 입력하세요.";
$layout_info->extra_var->header_background = new stdClass;
$layout_info->extra_var->header_background->group = "기본 세팅";
$layout_info->extra_var->header_background->title = "헤더 배경색";
$layout_info->extra_var->header_background->type = "text";
$layout_info->extra_var->header_background->value = $vars->header_background;
$layout_info->extra_var->header_background->description = "헤더 배경에 사용할 컬러값을 입력하세요. (Hex 값 입력 - ex:#888)";
$layout_info->extra_var->menu_color = new stdClass;
$layout_info->extra_var->menu_color->group = "기본 세팅";
$layout_info->extra_var->menu_color->title = "메뉴 색상";
$layout_info->extra_var->menu_color->type = "text";
$layout_info->extra_var->menu_color->value = $vars->menu_color;
$layout_info->extra_var->menu_color->description = "헤더 메뉴에 사용할 컬러값을 입력하세요. (Hex 값 입력 - ex:#888)";
$layout_info->extra_var->point_color = new stdClass;
$layout_info->extra_var->point_color->group = "기본 세팅";
$layout_info->extra_var->point_color->title = "포인트 컬러";
$layout_info->extra_var->point_color->type = "text";
$layout_info->extra_var->point_color->value = $vars->point_color;
$layout_info->extra_var->point_color->description = "버튼 기본 배경색 및 메뉴 마우스 오버 시 색상을 결정합니다. (Hex값 입력 - ex: #888)";
$layout_info->extra_var->footer_title01 = new stdClass;
$layout_info->extra_var->footer_title01->group = "기본 세팅";
$layout_info->extra_var->footer_title01->title = "푸터 좌측 제목";
$layout_info->extra_var->footer_title01->type = "text";
$layout_info->extra_var->footer_title01->value = $vars->footer_title01;
$layout_info->extra_var->footer_title01->description = "";
$layout_info->extra_var->footer_intro = new stdClass;
$layout_info->extra_var->footer_intro->group = "기본 세팅";
$layout_info->extra_var->footer_intro->title = "푸터 좌측 정보";
$layout_info->extra_var->footer_intro->type = "textarea";
$layout_info->extra_var->footer_intro->value = $vars->footer_intro;
$layout_info->extra_var->footer_intro->description = "html 사용 가능";
$layout_info->extra_var->footer_title02 = new stdClass;
$layout_info->extra_var->footer_title02->group = "기본 세팅";
$layout_info->extra_var->footer_title02->title = "푸터 중간 제목";
$layout_info->extra_var->footer_title02->type = "text";
$layout_info->extra_var->footer_title02->value = $vars->footer_title02;
$layout_info->extra_var->footer_title02->description = "";
$layout_info->extra_var->footer_info = new stdClass;
$layout_info->extra_var->footer_info->group = "기본 세팅";
$layout_info->extra_var->footer_info->title = "푸터 중간 정보";
$layout_info->extra_var->footer_info->type = "textarea";
$layout_info->extra_var->footer_info->value = $vars->footer_info;
$layout_info->extra_var->footer_info->description = "html 사용 가능";
$layout_info->extra_var->copyright = new stdClass;
$layout_info->extra_var->copyright->group = "기본 세팅";
$layout_info->extra_var->copyright->title = "카피라이트";
$layout_info->extra_var->copyright->type = "text";
$layout_info->extra_var->copyright->value = $vars->copyright;
$layout_info->extra_var->copyright->description = "";
$layout_info->extra_var->sec01_use = new stdClass;
$layout_info->extra_var->sec01_use->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_use->title = "섹션 1 사용";
$layout_info->extra_var->sec01_use->type = "select";
$layout_info->extra_var->sec01_use->value = $vars->sec01_use;
$layout_info->extra_var->sec01_use->description = "";
$layout_info->extra_var->sec01_use->options = array();
$layout_info->extra_var->sec01_use->options["Y"] = new stdClass;
$layout_info->extra_var->sec01_use->options["Y"]->val = "사용함";
$layout_info->extra_var->sec01_use->options["N"] = new stdClass;
$layout_info->extra_var->sec01_use->options["N"]->val = "사용하지 않음";
$layout_info->extra_var->sli_pause = new stdClass;
$layout_info->extra_var->sli_pause->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sli_pause->title = "슬라이드 변경 주기";
$layout_info->extra_var->sli_pause->type = "text";
$layout_info->extra_var->sli_pause->value = $vars->sli_pause;
$layout_info->extra_var->sli_pause->description = "슬라이드의 변경 주기를 입력하십시오. (1초 = 1000 / 숫자만 입력)";
$layout_info->extra_var->sec01_img01 = new stdClass;
$layout_info->extra_var->sec01_img01->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_img01->title = "슬라이드 1 이미지";
$layout_info->extra_var->sec01_img01->type = "image";
$layout_info->extra_var->sec01_img01->value = $vars->sec01_img01;
$layout_info->extra_var->sec01_img01->description = "1915*969 픽셀 사이즈 이미지 권장";
$layout_info->extra_var->sec01_sub01 = new stdClass;
$layout_info->extra_var->sec01_sub01->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_sub01->title = "슬라이드 1 부제목";
$layout_info->extra_var->sec01_sub01->type = "text";
$layout_info->extra_var->sec01_sub01->value = $vars->sec01_sub01;
$layout_info->extra_var->sec01_sub01->description = "";
$layout_info->extra_var->sec01_title01 = new stdClass;
$layout_info->extra_var->sec01_title01->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_title01->title = "슬라이드 1 제목";
$layout_info->extra_var->sec01_title01->type = "text";
$layout_info->extra_var->sec01_title01->value = $vars->sec01_title01;
$layout_info->extra_var->sec01_title01->description = "span 태그로 감싸면 포인트컬러가 연동됩니다. (ex: <span>Neon<span> city)";
$layout_info->extra_var->sec01_desc01 = new stdClass;
$layout_info->extra_var->sec01_desc01->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_desc01->title = "슬라이드 1 설명";
$layout_info->extra_var->sec01_desc01->type = "textarea";
$layout_info->extra_var->sec01_desc01->value = $vars->sec01_desc01;
$layout_info->extra_var->sec01_desc01->description = "";
$layout_info->extra_var->sec01_link01 = new stdClass;
$layout_info->extra_var->sec01_link01->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_link01->title = "슬라이드 1 버튼 링크";
$layout_info->extra_var->sec01_link01->type = "text";
$layout_info->extra_var->sec01_link01->value = $vars->sec01_link01;
$layout_info->extra_var->sec01_link01->description = "";
$layout_info->extra_var->sec01_img02 = new stdClass;
$layout_info->extra_var->sec01_img02->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_img02->title = "슬라이드 2 이미지";
$layout_info->extra_var->sec01_img02->type = "image";
$layout_info->extra_var->sec01_img02->value = $vars->sec01_img02;
$layout_info->extra_var->sec01_img02->description = "1915*969 픽셀 사이즈 이미지 권장";
$layout_info->extra_var->sec01_sub02 = new stdClass;
$layout_info->extra_var->sec01_sub02->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_sub02->title = "슬라이드 2 부제목";
$layout_info->extra_var->sec01_sub02->type = "text";
$layout_info->extra_var->sec01_sub02->value = $vars->sec01_sub02;
$layout_info->extra_var->sec01_sub02->description = "";
$layout_info->extra_var->sec01_title02 = new stdClass;
$layout_info->extra_var->sec01_title02->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_title02->title = "슬라이드 2 제목";
$layout_info->extra_var->sec01_title02->type = "text";
$layout_info->extra_var->sec01_title02->value = $vars->sec01_title02;
$layout_info->extra_var->sec01_title02->description = "span 태그로 감싸면 포인트컬러가 연동됩니다. (ex: <span>Neon<span> city)";
$layout_info->extra_var->sec01_desc02 = new stdClass;
$layout_info->extra_var->sec01_desc02->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_desc02->title = "슬라이드 2 설명";
$layout_info->extra_var->sec01_desc02->type = "textarea";
$layout_info->extra_var->sec01_desc02->value = $vars->sec01_desc02;
$layout_info->extra_var->sec01_desc02->description = "";
$layout_info->extra_var->sec01_link02 = new stdClass;
$layout_info->extra_var->sec01_link02->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_link02->title = "슬라이드 2 버튼 링크";
$layout_info->extra_var->sec01_link02->type = "text";
$layout_info->extra_var->sec01_link02->value = $vars->sec01_link02;
$layout_info->extra_var->sec01_link02->description = "";
$layout_info->extra_var->sec01_img03 = new stdClass;
$layout_info->extra_var->sec01_img03->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_img03->title = "슬라이드 3 이미지";
$layout_info->extra_var->sec01_img03->type = "image";
$layout_info->extra_var->sec01_img03->value = $vars->sec01_img03;
$layout_info->extra_var->sec01_img03->description = "1915*969 픽셀 사이즈 이미지 권장";
$layout_info->extra_var->sec01_sub03 = new stdClass;
$layout_info->extra_var->sec01_sub03->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_sub03->title = "슬라이드 3 부제목";
$layout_info->extra_var->sec01_sub03->type = "text";
$layout_info->extra_var->sec01_sub03->value = $vars->sec01_sub03;
$layout_info->extra_var->sec01_sub03->description = "";
$layout_info->extra_var->sec01_title03 = new stdClass;
$layout_info->extra_var->sec01_title03->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_title03->title = "슬라이드 3 제목";
$layout_info->extra_var->sec01_title03->type = "text";
$layout_info->extra_var->sec01_title03->value = $vars->sec01_title03;
$layout_info->extra_var->sec01_title03->description = "span 태그로 감싸면 포인트컬러가 연동됩니다. (ex: <span>Neon<span> city)";
$layout_info->extra_var->sec01_desc03 = new stdClass;
$layout_info->extra_var->sec01_desc03->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_desc03->title = "슬라이드 3 설명";
$layout_info->extra_var->sec01_desc03->type = "textarea";
$layout_info->extra_var->sec01_desc03->value = $vars->sec01_desc03;
$layout_info->extra_var->sec01_desc03->description = "";
$layout_info->extra_var->sec01_link03 = new stdClass;
$layout_info->extra_var->sec01_link03->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_link03->title = "슬라이드 3 버튼 링크";
$layout_info->extra_var->sec01_link03->type = "text";
$layout_info->extra_var->sec01_link03->value = $vars->sec01_link03;
$layout_info->extra_var->sec01_link03->description = "";
$layout_info->extra_var->sec01_img04 = new stdClass;
$layout_info->extra_var->sec01_img04->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_img04->title = "슬라이드 4 이미지";
$layout_info->extra_var->sec01_img04->type = "image";
$layout_info->extra_var->sec01_img04->value = $vars->sec01_img04;
$layout_info->extra_var->sec01_img04->description = "1915*969 픽셀 사이즈 이미지 권장";
$layout_info->extra_var->sec01_sub04 = new stdClass;
$layout_info->extra_var->sec01_sub04->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_sub04->title = "슬라이드 4 부제목";
$layout_info->extra_var->sec01_sub04->type = "text";
$layout_info->extra_var->sec01_sub04->value = $vars->sec01_sub04;
$layout_info->extra_var->sec01_sub04->description = "";
$layout_info->extra_var->sec01_title04 = new stdClass;
$layout_info->extra_var->sec01_title04->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_title04->title = "슬라이드 4 제목";
$layout_info->extra_var->sec01_title04->type = "text";
$layout_info->extra_var->sec01_title04->value = $vars->sec01_title04;
$layout_info->extra_var->sec01_title04->description = "span 태그로 감싸면 포인트컬러가 연동됩니다. (ex: <span>Neon<span> city)";
$layout_info->extra_var->sec01_desc04 = new stdClass;
$layout_info->extra_var->sec01_desc04->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_desc04->title = "슬라이드 4 설명";
$layout_info->extra_var->sec01_desc04->type = "textarea";
$layout_info->extra_var->sec01_desc04->value = $vars->sec01_desc04;
$layout_info->extra_var->sec01_desc04->description = "";
$layout_info->extra_var->sec01_link04 = new stdClass;
$layout_info->extra_var->sec01_link04->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_link04->title = "슬라이드 4 버튼 링크";
$layout_info->extra_var->sec01_link04->type = "text";
$layout_info->extra_var->sec01_link04->value = $vars->sec01_link04;
$layout_info->extra_var->sec01_link04->description = "";
$layout_info->extra_var->sec01_img05 = new stdClass;
$layout_info->extra_var->sec01_img05->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_img05->title = "슬라이드 5 이미지";
$layout_info->extra_var->sec01_img05->type = "image";
$layout_info->extra_var->sec01_img05->value = $vars->sec01_img05;
$layout_info->extra_var->sec01_img05->description = "1915*969 픽셀 사이즈 이미지 권장";
$layout_info->extra_var->sec01_sub05 = new stdClass;
$layout_info->extra_var->sec01_sub05->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_sub05->title = "슬라이드 5 부제목";
$layout_info->extra_var->sec01_sub05->type = "text";
$layout_info->extra_var->sec01_sub05->value = $vars->sec01_sub05;
$layout_info->extra_var->sec01_sub05->description = "";
$layout_info->extra_var->sec01_title05 = new stdClass;
$layout_info->extra_var->sec01_title05->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_title05->title = "슬라이드 5 제목";
$layout_info->extra_var->sec01_title05->type = "text";
$layout_info->extra_var->sec01_title05->value = $vars->sec01_title05;
$layout_info->extra_var->sec01_title05->description = "span 태그로 감싸면 포인트컬러가 연동됩니다. (ex: <span>Neon<span> city)";
$layout_info->extra_var->sec01_desc05 = new stdClass;
$layout_info->extra_var->sec01_desc05->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_desc05->title = "슬라이드 5 설명";
$layout_info->extra_var->sec01_desc05->type = "textarea";
$layout_info->extra_var->sec01_desc05->value = $vars->sec01_desc05;
$layout_info->extra_var->sec01_desc05->description = "";
$layout_info->extra_var->sec01_link05 = new stdClass;
$layout_info->extra_var->sec01_link05->group = "섹션 1 - 슬라이드";
$layout_info->extra_var->sec01_link05->title = "슬라이드 5 버튼 링크";
$layout_info->extra_var->sec01_link05->type = "text";
$layout_info->extra_var->sec01_link05->value = $vars->sec01_link05;
$layout_info->extra_var->sec01_link05->description = "";
$layout_info->extra_var->subpage_type = new stdClass;
$layout_info->extra_var->subpage_type->group = "서브페이지 레이아웃";
$layout_info->extra_var->subpage_type->title = "서브페이지 레이아웃 타입";
$layout_info->extra_var->subpage_type->type = "select";
$layout_info->extra_var->subpage_type->value = $vars->subpage_type;
$layout_info->extra_var->subpage_type->description = "";
$layout_info->extra_var->subpage_type->options = array();
$layout_info->extra_var->subpage_type->options["full"] = new stdClass;
$layout_info->extra_var->subpage_type->options["full"]->val = "풀 페이지";
$layout_info->extra_var->subpage_type->options["left"] = new stdClass;
$layout_info->extra_var->subpage_type->options["left"]->val = "좌측 사이드 메뉴";
$layout_info->extra_var->subpage_type->options["right"] = new stdClass;
$layout_info->extra_var->subpage_type->options["right"]->val = "우측 사이드 메뉴";
$layout_info->extra_var->subtop_height = new stdClass;
$layout_info->extra_var->subtop_height->group = "서브페이지 레이아웃";
$layout_info->extra_var->subtop_height->title = "서브탑 최소 높이";
$layout_info->extra_var->subtop_height->type = "text";
$layout_info->extra_var->subtop_height->value = $vars->subtop_height;
$layout_info->extra_var->subtop_height->description = "300 이상의 숫자를 입력하세요. (단위 : 픽셀)";
$layout_info->extra_var->subtop_image = new stdClass;
$layout_info->extra_var->subtop_image->group = "서브페이지 레이아웃";
$layout_info->extra_var->subtop_image->title = "서브탑 배경 이미지";
$layout_info->extra_var->subtop_image->type = "image";
$layout_info->extra_var->subtop_image->value = $vars->subtop_image;
$layout_info->extra_var->subtop_image->description = "설정된 서브탑 높이에 맞춘 이미지를 첨부하세요.";
$layout_info->extra_var->subtop_color = new stdClass;
$layout_info->extra_var->subtop_color->group = "서브페이지 레이아웃";
$layout_info->extra_var->subtop_color->title = "서브탑 배경색";
$layout_info->extra_var->subtop_color->type = "text";
$layout_info->extra_var->subtop_color->value = $vars->subtop_color;
$layout_info->extra_var->subtop_color->description = "ex : #242424";
$layout_info->extra_var->subtop_txt_use = new stdClass;
$layout_info->extra_var->subtop_txt_use->group = "서브페이지 레이아웃";
$layout_info->extra_var->subtop_txt_use->title = "서브탑 텍스트 사용";
$layout_info->extra_var->subtop_txt_use->type = "select";
$layout_info->extra_var->subtop_txt_use->value = $vars->subtop_txt_use;
$layout_info->extra_var->subtop_txt_use->description = "";
$layout_info->extra_var->subtop_txt_use->options = array();
$layout_info->extra_var->subtop_txt_use->options["Y"] = new stdClass;
$layout_info->extra_var->subtop_txt_use->options["Y"]->val = "사용함";
$layout_info->extra_var->subtop_txt_use->options["N"] = new stdClass;
$layout_info->extra_var->subtop_txt_use->options["N"]->val = "사용하지 않음";
$layout_info->extra_var->subtop_txt_color = new stdClass;
$layout_info->extra_var->subtop_txt_color->group = "서브페이지 레이아웃";
$layout_info->extra_var->subtop_txt_color->title = "서브탑 텍스트 컬러";
$layout_info->extra_var->subtop_txt_color->type = "text";
$layout_info->extra_var->subtop_txt_color->value = $vars->subtop_txt_color;
$layout_info->extra_var->subtop_txt_color->description = "";
$layout_info->extra_var->subtop_title = new stdClass;
$layout_info->extra_var->subtop_title->group = "서브페이지 레이아웃";
$layout_info->extra_var->subtop_title->title = "서브탑 제목";
$layout_info->extra_var->subtop_title->type = "text";
$layout_info->extra_var->subtop_title->value = $vars->subtop_title;
$layout_info->extra_var->subtop_title->description = "";
$layout_info->extra_var->subtop_subtitle = new stdClass;
$layout_info->extra_var->subtop_subtitle->group = "서브페이지 레이아웃";
$layout_info->extra_var->subtop_subtitle->title = "서브탑 부제목";
$layout_info->extra_var->subtop_subtitle->type = "text";
$layout_info->extra_var->subtop_subtitle->value = $vars->subtop_subtitle;
$layout_info->extra_var->subtop_subtitle->description = "";
$layout_info->extra_var->content_width = new stdClass;
$layout_info->extra_var->content_width->group = "서브페이지 레이아웃";
$layout_info->extra_var->content_width->title = "컨텐츠 너비";
$layout_info->extra_var->content_width->type = "text";
$layout_info->extra_var->content_width->value = $vars->content_width;
$layout_info->extra_var->content_width->description = "컨텐츠 영역의 최대 너비를 입력하세요. (숫자만 입력 / 단위 : px / 사이드 메뉴 사용 시 사이드 메뉴 포함 너비)";
$layout_info->extra_var_count = "52";
$layout_info->menu_count = "2";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "GNB";
$layout_info->menu->GNB = new stdClass;
$layout_info->menu->GNB->name = "GNB";
$layout_info->menu->GNB->title = "메인 메뉴";
$layout_info->menu->GNB->maxdepth = "2";
$layout_info->menu->GNB->menu_srl = $vars->GNB;
$layout_info->menu->GNB->xml_file = "./files/cache/menu/".$vars->GNB.".xml.php";
$layout_info->menu->GNB->php_file = "./files/cache/menu/".$vars->GNB.".php";
$layout_info->default_menu = "FNB";
$layout_info->menu->FNB = new stdClass;
$layout_info->menu->FNB->name = "FNB";
$layout_info->menu->FNB->title = "푸터 메뉴";
$layout_info->menu->FNB->maxdepth = "2";
$layout_info->menu->FNB->menu_srl = $vars->FNB;
$layout_info->menu->FNB->xml_file = "./files/cache/menu/".$vars->FNB.".xml.php";
$layout_info->menu->FNB->php_file = "./files/cache/menu/".$vars->FNB.".php";