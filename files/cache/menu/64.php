<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[66] = array("en"=>"Head spa K","ko"=>"헤드스파 K","jp"=>"$user_lang->userLang20200706132712069","zh-CN"=>"$user_lang->userLang20200706132712069","zh-TW"=>"$user_lang->userLang20200706132712069","fr"=>"$user_lang->userLang20200706132712069","de"=>"$user_lang->userLang20200706132712069","ru"=>"$user_lang->userLang20200706132712069","es"=>"$user_lang->userLang20200706132712069","tr"=>"$user_lang->userLang20200706132712069","vi"=>"$user_lang->userLang20200706132712069","mn"=>"$user_lang->userLang20200706132712069",); ; $menu->list = array(66=>array("node_srl"=>"66","parent_srl"=>"0","menu_name_key"=>'$user_lang->userLang20200706132712069',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[66][$lang_type]:""),"href"=>(true?getSiteUrl('', '','mid','index'):""),"url"=>(true?"index":""),"is_shortcut"=>"N","desc"=>'',"open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("index")&&in_array(Context::get("mid"),array("index"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("index")&&in_array(Context::get("mid"),array("index")) ?$_menu_names[66][$lang_type]:$_menu_names[66][$lang_type]):""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>