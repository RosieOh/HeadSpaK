<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispPollAdminList';
$info->menu = new stdClass;
$info->menu->poll = new stdClass;
$info->menu->poll->title='Poll';
$info->menu->poll->type='';
$info->action = new stdClass;
$info->action->getPollGetColorsetList = new stdClass;
$info->action->getPollGetColorsetList->type='model';
$info->action->getPollGetColorsetList->grant='guest';
$info->action->getPollGetColorsetList->standalone='true';
$info->action->getPollGetColorsetList->ruleset='';
$info->action->getPollGetColorsetList->method='';
$info->action->getPollGetColorsetList->check_csrf='true';
$info->action->getPollGetColorsetList->meta_noindex='false';
$info->action->procPollInsert = new stdClass;
$info->action->procPollInsert->type='controller';
$info->action->procPollInsert->grant='guest';
$info->action->procPollInsert->standalone='true';
$info->action->procPollInsert->ruleset='';
$info->action->procPollInsert->method='';
$info->action->procPollInsert->check_csrf='true';
$info->action->procPollInsert->meta_noindex='false';
$info->action->procPoll = new stdClass;
$info->action->procPoll->type='controller';
$info->action->procPoll->grant='guest';
$info->action->procPoll->standalone='true';
$info->action->procPoll->ruleset='poll';
$info->action->procPoll->method='';
$info->action->procPoll->check_csrf='true';
$info->action->procPoll->meta_noindex='false';
$info->action->procPollViewResult = new stdClass;
$info->action->procPollViewResult->type='controller';
$info->action->procPollViewResult->grant='guest';
$info->action->procPollViewResult->standalone='true';
$info->action->procPollViewResult->ruleset='';
$info->action->procPollViewResult->method='';
$info->action->procPollViewResult->check_csrf='true';
$info->action->procPollViewResult->meta_noindex='false';
$info->action->procPollGetList = new stdClass;
$info->action->procPollGetList->type='controller';
$info->action->procPollGetList->grant='guest';
$info->action->procPollGetList->standalone='true';
$info->action->procPollGetList->ruleset='';
$info->action->procPollGetList->method='';
$info->action->procPollGetList->check_csrf='true';
$info->action->procPollGetList->meta_noindex='false';
$info->menu->poll->index='dispPollAdminList';
$info->menu->poll->acts[0]='dispPollAdminList';
$info->action->dispPollAdminList = new stdClass;
$info->action->dispPollAdminList->type='view';
$info->action->dispPollAdminList->grant='guest';
$info->action->dispPollAdminList->standalone='true';
$info->action->dispPollAdminList->ruleset='';
$info->action->dispPollAdminList->method='';
$info->action->dispPollAdminList->check_csrf='true';
$info->action->dispPollAdminList->meta_noindex='false';
$info->action->dispPollAdminResult = new stdClass;
$info->action->dispPollAdminResult->type='view';
$info->action->dispPollAdminResult->grant='guest';
$info->action->dispPollAdminResult->standalone='true';
$info->action->dispPollAdminResult->ruleset='';
$info->action->dispPollAdminResult->method='';
$info->action->dispPollAdminResult->check_csrf='true';
$info->action->dispPollAdminResult->meta_noindex='false';
$info->action->dispPollAdminConfig = new stdClass;
$info->action->dispPollAdminConfig->type='view';
$info->action->dispPollAdminConfig->grant='guest';
$info->action->dispPollAdminConfig->standalone='true';
$info->action->dispPollAdminConfig->ruleset='';
$info->action->dispPollAdminConfig->method='';
$info->action->dispPollAdminConfig->check_csrf='true';
$info->action->dispPollAdminConfig->meta_noindex='false';
$info->action->getPollAdminTarget = new stdClass;
$info->action->getPollAdminTarget->type='model';
$info->action->getPollAdminTarget->grant='guest';
$info->action->getPollAdminTarget->standalone='true';
$info->action->getPollAdminTarget->ruleset='';
$info->action->getPollAdminTarget->method='';
$info->action->getPollAdminTarget->check_csrf='true';
$info->action->getPollAdminTarget->meta_noindex='false';
$info->action->procPollAdminDeleteChecked = new stdClass;
$info->action->procPollAdminDeleteChecked->type='controller';
$info->action->procPollAdminDeleteChecked->grant='guest';
$info->action->procPollAdminDeleteChecked->standalone='true';
$info->action->procPollAdminDeleteChecked->ruleset='deleteChecked';
$info->action->procPollAdminDeleteChecked->method='';
$info->action->procPollAdminDeleteChecked->check_csrf='true';
$info->action->procPollAdminDeleteChecked->meta_noindex='false';
$info->action->procPollAdminInsertConfig = new stdClass;
$info->action->procPollAdminInsertConfig->type='controller';
$info->action->procPollAdminInsertConfig->grant='guest';
$info->action->procPollAdminInsertConfig->standalone='true';
$info->action->procPollAdminInsertConfig->ruleset='insertConfig';
$info->action->procPollAdminInsertConfig->method='';
$info->action->procPollAdminInsertConfig->check_csrf='true';
$info->action->procPollAdminInsertConfig->meta_noindex='false';
$info->action->procPollAdminAddCart = new stdClass;
$info->action->procPollAdminAddCart->type='controller';
$info->action->procPollAdminAddCart->grant='guest';
$info->action->procPollAdminAddCart->standalone='true';
$info->action->procPollAdminAddCart->ruleset='';
$info->action->procPollAdminAddCart->method='';
$info->action->procPollAdminAddCart->check_csrf='true';
$info->action->procPollAdminAddCart->meta_noindex='false';
return $info;