<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentCategory");
$query->setAction("update");
$query->setPriority("");
if(isset($args->target_category_srl)) {
${'target_category_srl4_argument'} = new Argument('target_category_srl', $args->{'target_category_srl'});
if(!${'target_category_srl4_argument'}->isValid()) return ${'target_category_srl4_argument'}->getErrorMessage();
} else
${'target_category_srl4_argument'} = NULL;if(${'target_category_srl4_argument'} !== null) ${'target_category_srl4_argument'}->setColumnType('number');

${'source_category_srl5_argument'} = new ConditionArgument('source_category_srl', $args->source_category_srl, 'equal');
${'source_category_srl5_argument'}->checkFilter('number');
${'source_category_srl5_argument'}->checkNotNull();
${'source_category_srl5_argument'}->createConditionValue();
if(!${'source_category_srl5_argument'}->isValid()) return ${'source_category_srl5_argument'}->getErrorMessage();
if(${'source_category_srl5_argument'} !== null) ${'source_category_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`category_srl`', ${'target_category_srl4_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$source_category_srl5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>