<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'Headspa_K';
$layout_info->type = NULL;
$layout_info->path = './layouts/Headspa_K/';
$layout_info->title = 'SIC';
$layout_info->description = NULL;
$layout_info->version = 'v1.0.0';
$layout_info->date = '20200611';
$layout_info->homepage = NULL;
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'P';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'ONPLUS';
$layout_info->author[0]->email_address = 'onplus_cpo@naver.com';
$layout_info->author[0]->homepage = '';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->layout_type = new stdClass;
$layout_info->extra_var->layout_type->group = 'General setting';
$layout_info->extra_var->layout_type->title = 'Layout Type';
$layout_info->extra_var->layout_type->type = 'select';
$layout_info->extra_var->layout_type->value = $vars->layout_type;
$layout_info->extra_var->layout_type->description = 'Select layout type within main/sub';
$layout_info->extra_var->layout_type->options = array();
$layout_info->extra_var->layout_type->options['main'] = new stdClass;
$layout_info->extra_var->layout_type->options['main']->val = 'Main Type';
$layout_info->extra_var->layout_type->options['sub'] = new stdClass;
$layout_info->extra_var->layout_type->options['sub']->val = 'Sub Type';
$layout_info->extra_var->header_logo = new stdClass;
$layout_info->extra_var->header_logo->group = 'General setting';
$layout_info->extra_var->header_logo->title = 'Header logo';
$layout_info->extra_var->header_logo->type = 'image';
$layout_info->extra_var->header_logo->value = $vars->header_logo;
$layout_info->extra_var->header_logo->description = 'Input logo image to applicate in header area. (jpg, png, gif. image height 50 pixel.)';
$layout_info->extra_var->header_text = new stdClass;
$layout_info->extra_var->header_text->group = 'General setting';
$layout_info->extra_var->header_text->title = 'Logo text';
$layout_info->extra_var->header_text->type = 'text';
$layout_info->extra_var->header_text->value = $vars->header_text;
$layout_info->extra_var->header_text->description = 'Input logo text to position in header.';
$layout_info->extra_var->logo_text_color = new stdClass;
$layout_info->extra_var->logo_text_color->group = 'General setting';
$layout_info->extra_var->logo_text_color->title = 'Header text color';
$layout_info->extra_var->logo_text_color->type = 'text';
$layout_info->extra_var->logo_text_color->value = $vars->logo_text_color;
$layout_info->extra_var->logo_text_color->description = 'Input color value for header logo text. (Hex value - ex:#888)';
$layout_info->extra_var->header_logo_link = new stdClass;
$layout_info->extra_var->header_logo_link->group = 'General setting';
$layout_info->extra_var->header_logo_link->title = 'Logo link';
$layout_info->extra_var->header_logo_link->type = 'text';
$layout_info->extra_var->header_logo_link->value = $vars->header_logo_link;
$layout_info->extra_var->header_logo_link->description = 'Input url to link with header logo';
$layout_info->extra_var->member_use = new stdClass;
$layout_info->extra_var->member_use->group = 'General setting';
$layout_info->extra_var->member_use->title = 'Member menu use';
$layout_info->extra_var->member_use->type = 'select';
$layout_info->extra_var->member_use->value = $vars->member_use;
$layout_info->extra_var->member_use->description = 'Decide use of member menu';
$layout_info->extra_var->member_use->options = array();
$layout_info->extra_var->member_use->options['Y'] = new stdClass;
$layout_info->extra_var->member_use->options['Y']->val = 'Use';
$layout_info->extra_var->member_use->options['N'] = new stdClass;
$layout_info->extra_var->member_use->options['N']->val = 'Not use';
$layout_info->extra_var->profile_img = new stdClass;
$layout_info->extra_var->profile_img->group = 'General setting';
$layout_info->extra_var->profile_img->title = 'Profile image';
$layout_info->extra_var->profile_img->type = 'image';
$layout_info->extra_var->profile_img->value = $vars->profile_img;
$layout_info->extra_var->profile_img->description = 'Apply profile image for member menu box profile (150*150pixel image recommended.)';
$layout_info->extra_var->profile_desc = new stdClass;
$layout_info->extra_var->profile_desc->group = 'General setting';
$layout_info->extra_var->profile_desc->title = 'Profile caption';
$layout_info->extra_var->profile_desc->type = 'text';
$layout_info->extra_var->profile_desc->value = $vars->profile_desc;
$layout_info->extra_var->profile_desc->description = 'Input text which will be positioned under the profile image.';
$layout_info->extra_var->header_background = new stdClass;
$layout_info->extra_var->header_background->group = 'General setting';
$layout_info->extra_var->header_background->title = 'Header background color';
$layout_info->extra_var->header_background->type = 'text';
$layout_info->extra_var->header_background->value = $vars->header_background;
$layout_info->extra_var->header_background->description = 'Input color value for header background. (Hex value - ex:#888)';
$layout_info->extra_var->menu_color = new stdClass;
$layout_info->extra_var->menu_color->group = 'General setting';
$layout_info->extra_var->menu_color->title = 'Menu color';
$layout_info->extra_var->menu_color->type = 'text';
$layout_info->extra_var->menu_color->value = $vars->menu_color;
$layout_info->extra_var->menu_color->description = 'Input color value for header menu. (Hex value - ex:#888)';
$layout_info->extra_var->point_color = new stdClass;
$layout_info->extra_var->point_color->group = 'General setting';
$layout_info->extra_var->point_color->title = 'Point color';
$layout_info->extra_var->point_color->type = 'text';
$layout_info->extra_var->point_color->value = $vars->point_color;
$layout_info->extra_var->point_color->description = 'Decide button basic background color and mouse hovered header menu color  (Input Hex value - ex: #888)';
$layout_info->extra_var->footer_title01 = new stdClass;
$layout_info->extra_var->footer_title01->group = 'General setting';
$layout_info->extra_var->footer_title01->title = 'Fotter left title';
$layout_info->extra_var->footer_title01->type = 'text';
$layout_info->extra_var->footer_title01->value = $vars->footer_title01;
$layout_info->extra_var->footer_title01->description = NULL;
$layout_info->extra_var->footer_intro = new stdClass;
$layout_info->extra_var->footer_intro->group = 'General setting';
$layout_info->extra_var->footer_intro->title = 'Fotter left information';
$layout_info->extra_var->footer_intro->type = 'textarea';
$layout_info->extra_var->footer_intro->value = $vars->footer_intro;
$layout_info->extra_var->footer_intro->description = 'html is available';
$layout_info->extra_var->footer_title02 = new stdClass;
$layout_info->extra_var->footer_title02->group = 'General setting';
$layout_info->extra_var->footer_title02->title = 'Fotter middle title';
$layout_info->extra_var->footer_title02->type = 'text';
$layout_info->extra_var->footer_title02->value = $vars->footer_title02;
$layout_info->extra_var->footer_title02->description = NULL;
$layout_info->extra_var->footer_info = new stdClass;
$layout_info->extra_var->footer_info->group = 'General setting';
$layout_info->extra_var->footer_info->title = 'Fotter middle information';
$layout_info->extra_var->footer_info->type = 'textarea';
$layout_info->extra_var->footer_info->value = $vars->footer_info;
$layout_info->extra_var->footer_info->description = 'html is available';
$layout_info->extra_var->copyright = new stdClass;
$layout_info->extra_var->copyright->group = 'General setting';
$layout_info->extra_var->copyright->title = 'Copyright';
$layout_info->extra_var->copyright->type = 'text';
$layout_info->extra_var->copyright->value = $vars->copyright;
$layout_info->extra_var->copyright->description = NULL;
$layout_info->extra_var->sec01_use = new stdClass;
$layout_info->extra_var->sec01_use->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_use->title = 'Use of section 1';
$layout_info->extra_var->sec01_use->type = 'select';
$layout_info->extra_var->sec01_use->value = $vars->sec01_use;
$layout_info->extra_var->sec01_use->description = NULL;
$layout_info->extra_var->sec01_use->options = array();
$layout_info->extra_var->sec01_use->options['Y'] = new stdClass;
$layout_info->extra_var->sec01_use->options['Y']->val = 'Use';
$layout_info->extra_var->sec01_use->options['N'] = new stdClass;
$layout_info->extra_var->sec01_use->options['N']->val = 'Not use';
$layout_info->extra_var->sli_pause = new stdClass;
$layout_info->extra_var->sli_pause->group = 'Section 1 - Slider';
$layout_info->extra_var->sli_pause->title = 'Slide changing cycle';
$layout_info->extra_var->sli_pause->type = 'text';
$layout_info->extra_var->sli_pause->value = $vars->sli_pause;
$layout_info->extra_var->sli_pause->description = 'Setup changing cycle of slider. (1sec = 1000 / put in number only)';
$layout_info->extra_var->sec01_img01 = new stdClass;
$layout_info->extra_var->sec01_img01->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_img01->title = 'slide 1 image';
$layout_info->extra_var->sec01_img01->type = 'image';
$layout_info->extra_var->sec01_img01->value = $vars->sec01_img01;
$layout_info->extra_var->sec01_img01->description = 'Recommend 1915*969 sized image';
$layout_info->extra_var->sec01_sub01 = new stdClass;
$layout_info->extra_var->sec01_sub01->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_sub01->title = 'slide 1 subtitle';
$layout_info->extra_var->sec01_sub01->type = 'text';
$layout_info->extra_var->sec01_sub01->value = $vars->sec01_sub01;
$layout_info->extra_var->sec01_sub01->description = NULL;
$layout_info->extra_var->sec01_title01 = new stdClass;
$layout_info->extra_var->sec01_title01->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_title01->title = 'slide 1 title';
$layout_info->extra_var->sec01_title01->type = 'text';
$layout_info->extra_var->sec01_title01->value = $vars->sec01_title01;
$layout_info->extra_var->sec01_title01->description = 'Point color would be applied if cover with span tag';
$layout_info->extra_var->sec01_desc01 = new stdClass;
$layout_info->extra_var->sec01_desc01->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_desc01->title = 'slide 1 description';
$layout_info->extra_var->sec01_desc01->type = 'textarea';
$layout_info->extra_var->sec01_desc01->value = $vars->sec01_desc01;
$layout_info->extra_var->sec01_desc01->description = NULL;
$layout_info->extra_var->sec01_link01 = new stdClass;
$layout_info->extra_var->sec01_link01->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_link01->title = 'slide 1 button link';
$layout_info->extra_var->sec01_link01->type = 'text';
$layout_info->extra_var->sec01_link01->value = $vars->sec01_link01;
$layout_info->extra_var->sec01_link01->description = NULL;
$layout_info->extra_var->sec01_img02 = new stdClass;
$layout_info->extra_var->sec01_img02->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_img02->title = 'slide 2 image';
$layout_info->extra_var->sec01_img02->type = 'image';
$layout_info->extra_var->sec01_img02->value = $vars->sec01_img02;
$layout_info->extra_var->sec01_img02->description = 'Recommend 1915*969 sized image';
$layout_info->extra_var->sec01_sub02 = new stdClass;
$layout_info->extra_var->sec01_sub02->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_sub02->title = 'slide 2 subtitle';
$layout_info->extra_var->sec01_sub02->type = 'text';
$layout_info->extra_var->sec01_sub02->value = $vars->sec01_sub02;
$layout_info->extra_var->sec01_sub02->description = NULL;
$layout_info->extra_var->sec01_title02 = new stdClass;
$layout_info->extra_var->sec01_title02->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_title02->title = 'slide 2 title';
$layout_info->extra_var->sec01_title02->type = 'text';
$layout_info->extra_var->sec01_title02->value = $vars->sec01_title02;
$layout_info->extra_var->sec01_title02->description = 'Point color would be applied if cover with span tag';
$layout_info->extra_var->sec01_desc02 = new stdClass;
$layout_info->extra_var->sec01_desc02->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_desc02->title = 'slide 2 description';
$layout_info->extra_var->sec01_desc02->type = 'textarea';
$layout_info->extra_var->sec01_desc02->value = $vars->sec01_desc02;
$layout_info->extra_var->sec01_desc02->description = NULL;
$layout_info->extra_var->sec01_link02 = new stdClass;
$layout_info->extra_var->sec01_link02->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_link02->title = 'slide 2 button link';
$layout_info->extra_var->sec01_link02->type = 'text';
$layout_info->extra_var->sec01_link02->value = $vars->sec01_link02;
$layout_info->extra_var->sec01_link02->description = NULL;
$layout_info->extra_var->sec01_img03 = new stdClass;
$layout_info->extra_var->sec01_img03->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_img03->title = 'slide 3 image';
$layout_info->extra_var->sec01_img03->type = 'image';
$layout_info->extra_var->sec01_img03->value = $vars->sec01_img03;
$layout_info->extra_var->sec01_img03->description = 'Recommend 1915*969 sized image';
$layout_info->extra_var->sec01_sub03 = new stdClass;
$layout_info->extra_var->sec01_sub03->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_sub03->title = 'slide 3 subtitle';
$layout_info->extra_var->sec01_sub03->type = 'text';
$layout_info->extra_var->sec01_sub03->value = $vars->sec01_sub03;
$layout_info->extra_var->sec01_sub03->description = NULL;
$layout_info->extra_var->sec01_title03 = new stdClass;
$layout_info->extra_var->sec01_title03->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_title03->title = 'slide 3 title';
$layout_info->extra_var->sec01_title03->type = 'text';
$layout_info->extra_var->sec01_title03->value = $vars->sec01_title03;
$layout_info->extra_var->sec01_title03->description = 'Point color would be applied if cover with span tag';
$layout_info->extra_var->sec01_desc03 = new stdClass;
$layout_info->extra_var->sec01_desc03->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_desc03->title = 'slide 3 description';
$layout_info->extra_var->sec01_desc03->type = 'textarea';
$layout_info->extra_var->sec01_desc03->value = $vars->sec01_desc03;
$layout_info->extra_var->sec01_desc03->description = NULL;
$layout_info->extra_var->sec01_link03 = new stdClass;
$layout_info->extra_var->sec01_link03->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_link03->title = 'slide 3 button link';
$layout_info->extra_var->sec01_link03->type = 'text';
$layout_info->extra_var->sec01_link03->value = $vars->sec01_link03;
$layout_info->extra_var->sec01_link03->description = NULL;
$layout_info->extra_var->sec01_img04 = new stdClass;
$layout_info->extra_var->sec01_img04->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_img04->title = 'slide 4 image';
$layout_info->extra_var->sec01_img04->type = 'image';
$layout_info->extra_var->sec01_img04->value = $vars->sec01_img04;
$layout_info->extra_var->sec01_img04->description = 'Recommend 1915*969 sized image';
$layout_info->extra_var->sec01_sub04 = new stdClass;
$layout_info->extra_var->sec01_sub04->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_sub04->title = 'slide 4 subtitle';
$layout_info->extra_var->sec01_sub04->type = 'text';
$layout_info->extra_var->sec01_sub04->value = $vars->sec01_sub04;
$layout_info->extra_var->sec01_sub04->description = NULL;
$layout_info->extra_var->sec01_title04 = new stdClass;
$layout_info->extra_var->sec01_title04->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_title04->title = 'slide 4 title';
$layout_info->extra_var->sec01_title04->type = 'text';
$layout_info->extra_var->sec01_title04->value = $vars->sec01_title04;
$layout_info->extra_var->sec01_title04->description = 'Point color would be applied if cover with span tag';
$layout_info->extra_var->sec01_desc04 = new stdClass;
$layout_info->extra_var->sec01_desc04->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_desc04->title = 'slide 4 description';
$layout_info->extra_var->sec01_desc04->type = 'textarea';
$layout_info->extra_var->sec01_desc04->value = $vars->sec01_desc04;
$layout_info->extra_var->sec01_desc04->description = NULL;
$layout_info->extra_var->sec01_link04 = new stdClass;
$layout_info->extra_var->sec01_link04->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_link04->title = 'slide 4 button link';
$layout_info->extra_var->sec01_link04->type = 'text';
$layout_info->extra_var->sec01_link04->value = $vars->sec01_link04;
$layout_info->extra_var->sec01_link04->description = NULL;
$layout_info->extra_var->sec01_img05 = new stdClass;
$layout_info->extra_var->sec01_img05->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_img05->title = 'slide 5 image';
$layout_info->extra_var->sec01_img05->type = 'image';
$layout_info->extra_var->sec01_img05->value = $vars->sec01_img05;
$layout_info->extra_var->sec01_img05->description = 'Recommend 1915*969 sized image';
$layout_info->extra_var->sec01_sub05 = new stdClass;
$layout_info->extra_var->sec01_sub05->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_sub05->title = 'slide 5 subtitle';
$layout_info->extra_var->sec01_sub05->type = 'text';
$layout_info->extra_var->sec01_sub05->value = $vars->sec01_sub05;
$layout_info->extra_var->sec01_sub05->description = NULL;
$layout_info->extra_var->sec01_title05 = new stdClass;
$layout_info->extra_var->sec01_title05->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_title05->title = 'slide 5 title';
$layout_info->extra_var->sec01_title05->type = 'text';
$layout_info->extra_var->sec01_title05->value = $vars->sec01_title05;
$layout_info->extra_var->sec01_title05->description = 'Point color would be applied if cover with span tag';
$layout_info->extra_var->sec01_desc05 = new stdClass;
$layout_info->extra_var->sec01_desc05->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_desc05->title = 'slide 5 description';
$layout_info->extra_var->sec01_desc05->type = 'textarea';
$layout_info->extra_var->sec01_desc05->value = $vars->sec01_desc05;
$layout_info->extra_var->sec01_desc05->description = NULL;
$layout_info->extra_var->sec01_link05 = new stdClass;
$layout_info->extra_var->sec01_link05->group = 'Section 1 - Slider';
$layout_info->extra_var->sec01_link05->title = 'slide 5 button link';
$layout_info->extra_var->sec01_link05->type = 'text';
$layout_info->extra_var->sec01_link05->value = $vars->sec01_link05;
$layout_info->extra_var->sec01_link05->description = NULL;
$layout_info->extra_var->subpage_type = new stdClass;
$layout_info->extra_var->subpage_type->group = 'Subpage layout';
$layout_info->extra_var->subpage_type->title = 'Subpage layout type';
$layout_info->extra_var->subpage_type->type = 'select';
$layout_info->extra_var->subpage_type->value = $vars->subpage_type;
$layout_info->extra_var->subpage_type->description = NULL;
$layout_info->extra_var->subpage_type->options = array();
$layout_info->extra_var->subpage_type->options['full'] = new stdClass;
$layout_info->extra_var->subpage_type->options['full']->val = 'Full page';
$layout_info->extra_var->subpage_type->options['left'] = new stdClass;
$layout_info->extra_var->subpage_type->options['left']->val = 'Left side menu';
$layout_info->extra_var->subpage_type->options['right'] = new stdClass;
$layout_info->extra_var->subpage_type->options['right']->val = 'Right side menu';
$layout_info->extra_var->subtop_height = new stdClass;
$layout_info->extra_var->subtop_height->group = 'Subpage layout';
$layout_info->extra_var->subtop_height->title = 'Subtop area minimal height';
$layout_info->extra_var->subtop_height->type = 'text';
$layout_info->extra_var->subtop_height->value = $vars->subtop_height;
$layout_info->extra_var->subtop_height->description = 'Input number over 300. (unit : pixel)';
$layout_info->extra_var->subtop_image = new stdClass;
$layout_info->extra_var->subtop_image->group = 'Subpage layout';
$layout_info->extra_var->subtop_image->title = 'Subtop background image';
$layout_info->extra_var->subtop_image->type = 'image';
$layout_info->extra_var->subtop_image->value = $vars->subtop_image;
$layout_info->extra_var->subtop_image->description = 'Attach image that matched height with subtop`s.';
$layout_info->extra_var->subtop_color = new stdClass;
$layout_info->extra_var->subtop_color->group = 'Subpage layout';
$layout_info->extra_var->subtop_color->title = 'Subtop background color';
$layout_info->extra_var->subtop_color->type = 'text';
$layout_info->extra_var->subtop_color->value = $vars->subtop_color;
$layout_info->extra_var->subtop_color->description = 'ex : #242424';
$layout_info->extra_var->subtop_txt_use = new stdClass;
$layout_info->extra_var->subtop_txt_use->group = 'Subpage layout';
$layout_info->extra_var->subtop_txt_use->title = 'Use of subtop text';
$layout_info->extra_var->subtop_txt_use->type = 'select';
$layout_info->extra_var->subtop_txt_use->value = $vars->subtop_txt_use;
$layout_info->extra_var->subtop_txt_use->description = NULL;
$layout_info->extra_var->subtop_txt_use->options = array();
$layout_info->extra_var->subtop_txt_use->options['Y'] = new stdClass;
$layout_info->extra_var->subtop_txt_use->options['Y']->val = 'Use';
$layout_info->extra_var->subtop_txt_use->options['N'] = new stdClass;
$layout_info->extra_var->subtop_txt_use->options['N']->val = 'Not use';
$layout_info->extra_var->subtop_txt_color = new stdClass;
$layout_info->extra_var->subtop_txt_color->group = 'Subpage layout';
$layout_info->extra_var->subtop_txt_color->title = 'Subtop text color';
$layout_info->extra_var->subtop_txt_color->type = 'text';
$layout_info->extra_var->subtop_txt_color->value = $vars->subtop_txt_color;
$layout_info->extra_var->subtop_txt_color->description = NULL;
$layout_info->extra_var->subtop_title = new stdClass;
$layout_info->extra_var->subtop_title->group = 'Subpage layout';
$layout_info->extra_var->subtop_title->title = 'Subtop title';
$layout_info->extra_var->subtop_title->type = 'text';
$layout_info->extra_var->subtop_title->value = $vars->subtop_title;
$layout_info->extra_var->subtop_title->description = NULL;
$layout_info->extra_var->subtop_subtitle = new stdClass;
$layout_info->extra_var->subtop_subtitle->group = 'Subpage layout';
$layout_info->extra_var->subtop_subtitle->title = 'Subtop subtitle';
$layout_info->extra_var->subtop_subtitle->type = 'text';
$layout_info->extra_var->subtop_subtitle->value = $vars->subtop_subtitle;
$layout_info->extra_var->subtop_subtitle->description = NULL;
$layout_info->extra_var->content_width = new stdClass;
$layout_info->extra_var->content_width->group = 'Subpage layout';
$layout_info->extra_var->content_width->title = 'Content width';
$layout_info->extra_var->content_width->type = 'text';
$layout_info->extra_var->content_width->value = $vars->content_width;
$layout_info->extra_var->content_width->description = 'Input width value of content area (Only number / unit : px / include side menu area if it used)';
$layout_info->extra_var_count = 52;
$layout_info->menu_count = 2;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'GNB';
$layout_info->menu->GNB = new stdClass;
$layout_info->menu->GNB->name = 'GNB';
$layout_info->menu->GNB->title = 'Main menu';
$layout_info->menu->GNB->maxdepth = '2';
$layout_info->menu->GNB->menu_srl = $vars->GNB;
$layout_info->menu->GNB->xml_file = "./files/cache/menu/".$vars->GNB.".xml.php";
$layout_info->menu->GNB->php_file = "./files/cache/menu/".$vars->GNB.".php";
$layout_info->default_menu = 'FNB';
$layout_info->menu->FNB = new stdClass;
$layout_info->menu->FNB->name = 'FNB';
$layout_info->menu->FNB->title = 'Main menu';
$layout_info->menu->FNB->maxdepth = '2';
$layout_info->menu->FNB->menu_srl = $vars->FNB;
$layout_info->menu->FNB->xml_file = "./files/cache/menu/".$vars->FNB.".xml.php";
$layout_info->menu->FNB->php_file = "./files/cache/menu/".$vars->FNB.".php";