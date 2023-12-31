<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl3_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl3_argument'}->checkFilter('number');
${'upload_target_srl3_argument'}->checkNotNull();
${'upload_target_srl3_argument'}->createConditionValue();
if(!${'upload_target_srl3_argument'}->isValid()) return ${'upload_target_srl3_argument'}->getErrorMessage();
if(${'upload_target_srl3_argument'} !== null) ${'upload_target_srl3_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid4_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid4_argument'}->createConditionValue();
if(!${'isvalid4_argument'}->isValid()) return ${'isvalid4_argument'}->getErrorMessage();
} else
${'isvalid4_argument'} = NULL;if(${'isvalid4_argument'} !== null) ${'isvalid4_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index5_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index5_argument'}->isValid()) return ${'sort_index5_argument'}->getErrorMessage();
} else
${'sort_index5_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl3_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index5_argument'}, "asc")
));
$query->setLimit();
return $query; ?>