<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispImporterAdminImportForm';
$info->menu = new stdClass;
$info->menu->importer = new stdClass;
$info->menu->importer->title='Data Migration';
$info->menu->importer->type='';
$info->action = new stdClass;
$info->menu->importer->index='dispImporterAdminImportForm';
$info->menu->importer->acts[0]='dispImporterAdminImportForm';
$info->action->dispImporterAdminImportForm = new stdClass;
$info->action->dispImporterAdminImportForm->type='view';
$info->action->dispImporterAdminImportForm->grant='guest';
$info->action->dispImporterAdminImportForm->standalone='true';
$info->action->dispImporterAdminImportForm->ruleset='';
$info->action->dispImporterAdminImportForm->method='';
$info->action->procImporterAdminImport = new stdClass;
$info->action->procImporterAdminImport->type='controller';
$info->action->procImporterAdminImport->grant='guest';
$info->action->procImporterAdminImport->standalone='true';
$info->action->procImporterAdminImport->ruleset='';
$info->action->procImporterAdminImport->method='';
$info->action->procImporterAdminPreProcessing = new stdClass;
$info->action->procImporterAdminPreProcessing->type='controller';
$info->action->procImporterAdminPreProcessing->grant='guest';
$info->action->procImporterAdminPreProcessing->standalone='true';
$info->action->procImporterAdminPreProcessing->ruleset='';
$info->action->procImporterAdminPreProcessing->method='';
$info->action->procImporterAdminSync = new stdClass;
$info->action->procImporterAdminSync->type='controller';
$info->action->procImporterAdminSync->grant='guest';
$info->action->procImporterAdminSync->standalone='true';
$info->action->procImporterAdminSync->ruleset='';
$info->action->procImporterAdminSync->method='';
$info->action->procImporterAdminMemberImport = new stdClass;
$info->action->procImporterAdminMemberImport->type='controller';
$info->action->procImporterAdminMemberImport->grant='guest';
$info->action->procImporterAdminMemberImport->standalone='true';
$info->action->procImporterAdminMemberImport->ruleset='';
$info->action->procImporterAdminMemberImport->method='';
$info->action->procImporterAdminMessageImport = new stdClass;
$info->action->procImporterAdminMessageImport->type='controller';
$info->action->procImporterAdminMessageImport->grant='guest';
$info->action->procImporterAdminMessageImport->standalone='true';
$info->action->procImporterAdminMessageImport->ruleset='';
$info->action->procImporterAdminMessageImport->method='';
$info->action->procImporterAdminModuleImport = new stdClass;
$info->action->procImporterAdminModuleImport->type='controller';
$info->action->procImporterAdminModuleImport->grant='guest';
$info->action->procImporterAdminModuleImport->standalone='true';
$info->action->procImporterAdminModuleImport->ruleset='';
$info->action->procImporterAdminModuleImport->method='';
$info->action->procImporterAdminTTXMLImport = new stdClass;
$info->action->procImporterAdminTTXMLImport->type='controller';
$info->action->procImporterAdminTTXMLImport->grant='guest';
$info->action->procImporterAdminTTXMLImport->standalone='true';
$info->action->procImporterAdminTTXMLImport->ruleset='';
$info->action->procImporterAdminTTXMLImport->method='';
$info->action->procImporterAdminCheckXmlFile = new stdClass;
$info->action->procImporterAdminCheckXmlFile->type='controller';
$info->action->procImporterAdminCheckXmlFile->grant='guest';
$info->action->procImporterAdminCheckXmlFile->standalone='true';
$info->action->procImporterAdminCheckXmlFile->ruleset='';
$info->action->procImporterAdminCheckXmlFile->method='';
return $info;