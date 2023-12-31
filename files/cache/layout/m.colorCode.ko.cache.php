<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'colorCode';
$layout_info->type = NULL;
$layout_info->path = './m.layouts/colorCode/';
$layout_info->title = 'XE Color Code 모바일 레이아웃';
$layout_info->description = '
        XE Color Code 모바일 레이아웃입니다.
        XEHub (developers@xpressengine.com) 
    ';
$layout_info->version = '1.7';
$layout_info->date = '20131127';
$layout_info->homepage = 'https://www.xehub.io';
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'M';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'XEHub';
$layout_info->author[0]->email_address = 'developers@xpressengine.com';
$layout_info->author[0]->homepage = 'https://www.xehub.io';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->index_title = new stdClass;
$layout_info->extra_var->index_title->group = NULL;
$layout_info->extra_var->index_title->title = '홈페이지 Title';
$layout_info->extra_var->index_title->type = 'text';
$layout_info->extra_var->index_title->value = $vars->index_title;
$layout_info->extra_var->index_title->description = NULL;
$layout_info->extra_var->footer_title = new stdClass;
$layout_info->extra_var->footer_title->group = NULL;
$layout_info->extra_var->footer_title->title = '하단 텍스트';
$layout_info->extra_var->footer_title->type = 'text';
$layout_info->extra_var->footer_title->value = $vars->footer_title;
$layout_info->extra_var->footer_title->description = NULL;
$layout_info->extra_var->colorset = new stdClass;
$layout_info->extra_var->colorset->group = NULL;
$layout_info->extra_var->colorset->title = '컬러셋';
$layout_info->extra_var->colorset->type = 'select';
$layout_info->extra_var->colorset->value = $vars->colorset;
$layout_info->extra_var->colorset->description = '원하는 컬러셋을 선택해주세요.';
$layout_info->extra_var->colorset->options = array();
$layout_info->extra_var->colorset->options['blue'] = new stdClass;
$layout_info->extra_var->colorset->options['blue']->val = '블루';
$layout_info->extra_var->colorset->options['gray'] = new stdClass;
$layout_info->extra_var->colorset->options['gray']->val = '그레이';
$layout_info->extra_var->colorset->options['red'] = new stdClass;
$layout_info->extra_var->colorset->options['red']->val = '빨간색';
$layout_info->extra_var->colorset->options['orange'] = new stdClass;
$layout_info->extra_var->colorset->options['orange']->val = '오렌지';
$layout_info->extra_var->colorset->options['ngreena'] = new stdClass;
$layout_info->extra_var->colorset->options['ngreena']->val = '네이버 그린 A';
$layout_info->extra_var->colorset->options['ngreenb'] = new stdClass;
$layout_info->extra_var->colorset->options['ngreenb']->val = '네이버 그린 B';
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = NULL;
$layout_info->extra_var->logo_image->title = '로고이미지';
$layout_info->extra_var->logo_image->type = 'image';
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = '레이아웃의 상단에 표시될 로고이미지를 입력하세요. (세로길이가 28px인 투명 이미지가 가장 어울립니다)';
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = NULL;
$layout_info->extra_var->index_url->title = '홈 페이지 URL';
$layout_info->extra_var->index_url->type = 'text';
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = '로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.';
$layout_info->extra_var_count = 5;
$layout_info->menu_count = 1;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'main_menu';
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = 'main_menu';
$layout_info->menu->main_menu->title = '상단 메뉴';
$layout_info->menu->main_menu->maxdepth = '3';
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";