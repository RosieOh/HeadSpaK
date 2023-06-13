<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispFileAdminList';
$info->permission = new stdClass;
$info->permission->procFileAdminInsertModuleConfig = 'manager';
$info->menu = new stdClass;
$info->menu->file = new stdClass;
$info->menu->file->title='File';
$info->menu->file->type='';
$info->menu->fileUpload = new stdClass;
$info->menu->fileUpload->title='File Upload';
$info->menu->fileUpload->type='';
$info->action = new stdClass;
$info->menu->file->index='dispFileAdminList';
$info->menu->file->acts[0]='dispFileAdminList';
$info->action->dispFileAdminList = new stdClass;
$info->action->dispFileAdminList->type='view';
$info->action->dispFileAdminList->grant='guest';
$info->action->dispFileAdminList->standalone='true';
$info->action->dispFileAdminList->ruleset='';
$info->action->dispFileAdminList->method='';
$info->menu->fileUpload->index='dispFileAdminConfig';
$info->menu->fileUpload->acts[0]='dispFileAdminConfig';
$info->action->dispFileAdminConfig = new stdClass;
$info->action->dispFileAdminConfig->type='view';
$info->action->dispFileAdminConfig->grant='guest';
$info->action->dispFileAdminConfig->standalone='true';
$info->action->dispFileAdminConfig->ruleset='';
$info->action->dispFileAdminConfig->method='';
$info->action->getFileList = new stdClass;
$info->action->getFileList->type='model';
$info->action->getFileList->grant='guest';
$info->action->getFileList->standalone='true';
$info->action->getFileList->ruleset='';
$info->action->getFileList->method='';
$info->action->procFileUpload = new stdClass;
$info->action->procFileUpload->type='controller';
$info->action->procFileUpload->grant='guest';
$info->action->procFileUpload->standalone='true';
$info->action->procFileUpload->ruleset='';
$info->action->procFileUpload->method='';
$info->action->procFileIframeUpload = new stdClass;
$info->action->procFileIframeUpload->type='controller';
$info->action->procFileIframeUpload->grant='guest';
$info->action->procFileIframeUpload->standalone='true';
$info->action->procFileIframeUpload->ruleset='';
$info->action->procFileIframeUpload->method='';
$info->action->procFileImageResize = new stdClass;
$info->action->procFileImageResize->type='controller';
$info->action->procFileImageResize->grant='guest';
$info->action->procFileImageResize->standalone='true';
$info->action->procFileImageResize->ruleset='imageResize';
$info->action->procFileImageResize->method='';
$info->action->procFileDelete = new stdClass;
$info->action->procFileDelete->type='controller';
$info->action->procFileDelete->grant='guest';
$info->action->procFileDelete->standalone='true';
$info->action->procFileDelete->ruleset='';
$info->action->procFileDelete->method='';
$info->action->procFileDownload = new stdClass;
$info->action->procFileDownload->type='controller';
$info->action->procFileDownload->grant='guest';
$info->action->procFileDownload->standalone='true';
$info->action->procFileDownload->ruleset='';
$info->action->procFileDownload->method='GET|POST';
$info->action->procFileOutput = new stdClass;
$info->action->procFileOutput->type='controller';
$info->action->procFileOutput->grant='guest';
$info->action->procFileOutput->standalone='true';
$info->action->procFileOutput->ruleset='';
$info->action->procFileOutput->method='GET|POST';
$info->action->procFileAdminDeleteChecked = new stdClass;
$info->action->procFileAdminDeleteChecked->type='controller';
$info->action->procFileAdminDeleteChecked->grant='guest';
$info->action->procFileAdminDeleteChecked->standalone='true';
$info->action->procFileAdminDeleteChecked->ruleset='deleteChecked';
$info->action->procFileAdminDeleteChecked->method='';
$info->action->procFileAdminInsertConfig = new stdClass;
$info->action->procFileAdminInsertConfig->type='controller';
$info->action->procFileAdminInsertConfig->grant='guest';
$info->action->procFileAdminInsertConfig->standalone='true';
$info->action->procFileAdminInsertConfig->ruleset='insertConfig';
$info->action->procFileAdminInsertConfig->method='';
$info->action->procFileAdminInsertModuleConfig = new stdClass;
$info->action->procFileAdminInsertModuleConfig->type='controller';
$info->action->procFileAdminInsertModuleConfig->grant='guest';
$info->action->procFileAdminInsertModuleConfig->standalone='true';
$info->action->procFileAdminInsertModuleConfig->ruleset='fileModuleConfig';
$info->action->procFileAdminInsertModuleConfig->method='';
$info->action->procFileAdminAddCart = new stdClass;
$info->action->procFileAdminAddCart->type='controller';
$info->action->procFileAdminAddCart->grant='guest';
$info->action->procFileAdminAddCart->standalone='true';
$info->action->procFileAdminAddCart->ruleset='';
$info->action->procFileAdminAddCart->method='';
$info->action->procFileGetList = new stdClass;
$info->action->procFileGetList->type='controller';
$info->action->procFileGetList->grant='guest';
$info->action->procFileGetList->standalone='true';
$info->action->procFileGetList->ruleset='';
$info->action->procFileGetList->method='';
$info->action->procFileSetCoverImage = new stdClass;
$info->action->procFileSetCoverImage->type='controller';
$info->action->procFileSetCoverImage->grant='guest';
$info->action->procFileSetCoverImage->standalone='true';
$info->action->procFileSetCoverImage->ruleset='';
$info->action->procFileSetCoverImage->method='';
return $info;