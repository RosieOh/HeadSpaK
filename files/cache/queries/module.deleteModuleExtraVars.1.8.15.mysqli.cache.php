<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl41_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl41_argument'}->checkFilter('number');
${'module_srl41_argument'}->checkNotNull();
${'module_srl41_argument'}->createConditionValue();
if(!${'module_srl41_argument'}->isValid()) return ${'module_srl41_argument'}->getErrorMessage();
if(${'module_srl41_argument'} !== null) ${'module_srl41_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`HeadspaK_new_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl41_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>