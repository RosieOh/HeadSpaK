<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfoByMemberSrl");
$query->setAction("select");
$query->setPriority("");

${'member_srl6_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl6_argument'}->checkNotNull();
${'member_srl6_argument'}->createConditionValue();
if(!${'member_srl6_argument'}->isValid()) return ${'member_srl6_argument'}->getErrorMessage();
if(${'member_srl6_argument'} !== null) ${'member_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`HeadspaK_new_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>