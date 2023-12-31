<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteHistory");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->history_srl)) {
${'history_srl20_argument'} = new ConditionArgument('history_srl', $args->history_srl, 'equal');
${'history_srl20_argument'}->checkFilter('number');
${'history_srl20_argument'}->createConditionValue();
if(!${'history_srl20_argument'}->isValid()) return ${'history_srl20_argument'}->getErrorMessage();
} else
${'history_srl20_argument'} = NULL;if(${'history_srl20_argument'} !== null) ${'history_srl20_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl21_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl21_argument'}->checkFilter('number');
${'document_srl21_argument'}->createConditionValue();
if(!${'document_srl21_argument'}->isValid()) return ${'document_srl21_argument'}->getErrorMessage();
} else
${'document_srl21_argument'} = NULL;if(${'document_srl21_argument'} !== null) ${'document_srl21_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl22_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl22_argument'}->checkFilter('number');
${'module_srl22_argument'}->createConditionValue();
if(!${'module_srl22_argument'}->isValid()) return ${'module_srl22_argument'}->getErrorMessage();
} else
${'module_srl22_argument'} = NULL;if(${'module_srl22_argument'} !== null) ${'module_srl22_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_document_histories`', '`document_histories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`history_srl`',$history_srl20_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl21_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl22_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>