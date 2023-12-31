<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExceptModule");
$query->setAction("select");
$query->setPriority("");

${'module_srl47_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl47_argument'}->checkFilter('number');
${'module_srl47_argument'}->checkNotNull();
${'module_srl47_argument'}->createConditionValue();
if(!${'module_srl47_argument'}->isValid()) return ${'module_srl47_argument'}->getErrorMessage();
if(${'module_srl47_argument'} !== null) ${'module_srl47_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`HeadspaK_new_syndication_except_modules`', '`syndication_except_modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl47_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>