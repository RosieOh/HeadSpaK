<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispSeoAdminSetting';
$info->menu = new stdClass;
$info->menu->setting = new stdClass;
$info->menu->setting->title='XE SEO';
$info->menu->setting->type='all';
$info->action = new stdClass;
$info->menu->setting->index='dispSeoAdminSetting';
$info->menu->setting->acts[0]='dispSeoAdminSetting';
$info->action->dispSeoAdminSetting = new stdClass;
$info->action->dispSeoAdminSetting->type='view';
$info->action->dispSeoAdminSetting->grant='guest';
$info->action->dispSeoAdminSetting->standalone='true';
$info->action->dispSeoAdminSetting->ruleset='';
$info->action->dispSeoAdminSetting->method='';
$info->action->procSeoAdminEnviromentGatheringAgreement = new stdClass;
$info->action->procSeoAdminEnviromentGatheringAgreement->type='controller';
$info->action->procSeoAdminEnviromentGatheringAgreement->grant='guest';
$info->action->procSeoAdminEnviromentGatheringAgreement->standalone='true';
$info->action->procSeoAdminEnviromentGatheringAgreement->ruleset='';
$info->action->procSeoAdminEnviromentGatheringAgreement->method='';
$info->action->procSeoAdminInsertModuleConfig = new stdClass;
$info->action->procSeoAdminInsertModuleConfig->type='controller';
$info->action->procSeoAdminInsertModuleConfig->grant='guest';
$info->action->procSeoAdminInsertModuleConfig->standalone='true';
$info->action->procSeoAdminInsertModuleConfig->ruleset='';
$info->action->procSeoAdminInsertModuleConfig->method='';
$info->action->procSeoAdminSaveSetting = new stdClass;
$info->action->procSeoAdminSaveSetting->type='controller';
$info->action->procSeoAdminSaveSetting->grant='guest';
$info->action->procSeoAdminSaveSetting->standalone='true';
$info->action->procSeoAdminSaveSetting->ruleset='';
$info->action->procSeoAdminSaveSetting->method='';
return $info;