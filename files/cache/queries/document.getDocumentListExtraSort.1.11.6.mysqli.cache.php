<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentListExtraSort");
$query->setAction("select");
$query->setPriority("");
if(isset($args->sort_index)) {
${'sort_index5_argument'} = new ConditionArgument('sort_index', $args->sort_index, 'equal');
${'sort_index5_argument'}->createConditionValue();
if(!${'sort_index5_argument'}->isValid()) return ${'sort_index5_argument'}->getErrorMessage();
} else
${'sort_index5_argument'} = NULL;if(${'sort_index5_argument'} !== null) ${'sort_index5_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
} else
${'module_srl6_argument'} = NULL;if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl7_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl7_argument'}->checkFilter('number');
${'exclude_module_srl7_argument'}->createConditionValue();
if(!${'exclude_module_srl7_argument'}->isValid()) return ${'exclude_module_srl7_argument'}->getErrorMessage();
} else
${'exclude_module_srl7_argument'} = NULL;if(${'exclude_module_srl7_argument'} !== null) ${'exclude_module_srl7_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl8_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl8_argument'}->createConditionValue();
if(!${'category_srl8_argument'}->isValid()) return ${'category_srl8_argument'}->getErrorMessage();
} else
${'category_srl8_argument'} = NULL;if(${'category_srl8_argument'} !== null) ${'category_srl8_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice9_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice9_argument'}->createConditionValue();
if(!${'s_is_notice9_argument'}->isValid()) return ${'s_is_notice9_argument'}->getErrorMessage();
} else
${'s_is_notice9_argument'} = NULL;if(${'s_is_notice9_argument'} !== null) ${'s_is_notice9_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl10_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl10_argument'}->checkFilter('number');
${'member_srl10_argument'}->createConditionValue();
if(!${'member_srl10_argument'}->isValid()) return ${'member_srl10_argument'}->getErrorMessage();
} else
${'member_srl10_argument'} = NULL;if(${'member_srl10_argument'} !== null) ${'member_srl10_argument'}->setColumnType('number');
if(isset($args->member_srls)) {
${'member_srls11_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls11_argument'}->checkFilter('number');
${'member_srls11_argument'}->createConditionValue();
if(!${'member_srls11_argument'}->isValid()) return ${'member_srls11_argument'}->getErrorMessage();
} else
${'member_srls11_argument'} = NULL;if(${'member_srls11_argument'} !== null) ${'member_srls11_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList12_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList12_argument'}->createConditionValue();
if(!${'statusList12_argument'}->isValid()) return ${'statusList12_argument'}->getErrorMessage();
} else
${'statusList12_argument'} = NULL;if(${'statusList12_argument'} !== null) ${'statusList12_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division13_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division13_argument'}->createConditionValue();
if(!${'division13_argument'}->isValid()) return ${'division13_argument'}->getErrorMessage();
} else
${'division13_argument'} = NULL;if(${'division13_argument'} !== null) ${'division13_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division14_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division14_argument'}->createConditionValue();
if(!${'last_division14_argument'}->isValid()) return ${'last_division14_argument'}->getErrorMessage();
} else
${'last_division14_argument'} = NULL;if(${'last_division14_argument'} !== null) ${'last_division14_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title15_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title15_argument'}->createConditionValue();
if(!${'s_title15_argument'}->isValid()) return ${'s_title15_argument'}->getErrorMessage();
} else
${'s_title15_argument'} = NULL;if(${'s_title15_argument'} !== null) ${'s_title15_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content16_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content16_argument'}->createConditionValue();
if(!${'s_content16_argument'}->isValid()) return ${'s_content16_argument'}->getErrorMessage();
} else
${'s_content16_argument'} = NULL;if(${'s_content16_argument'} !== null) ${'s_content16_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name17_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name17_argument'}->createConditionValue();
if(!${'s_user_name17_argument'}->isValid()) return ${'s_user_name17_argument'}->getErrorMessage();
} else
${'s_user_name17_argument'} = NULL;if(${'s_user_name17_argument'} !== null) ${'s_user_name17_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id18_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id18_argument'}->createConditionValue();
if(!${'s_user_id18_argument'}->isValid()) return ${'s_user_id18_argument'}->getErrorMessage();
} else
${'s_user_id18_argument'} = NULL;if(${'s_user_id18_argument'} !== null) ${'s_user_id18_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name19_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name19_argument'}->createConditionValue();
if(!${'s_nick_name19_argument'}->isValid()) return ${'s_nick_name19_argument'}->getErrorMessage();
} else
${'s_nick_name19_argument'} = NULL;if(${'s_nick_name19_argument'} !== null) ${'s_nick_name19_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address20_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address20_argument'}->createConditionValue();
if(!${'s_email_address20_argument'}->isValid()) return ${'s_email_address20_argument'}->getErrorMessage();
} else
${'s_email_address20_argument'} = NULL;if(${'s_email_address20_argument'} !== null) ${'s_email_address20_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage21_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage21_argument'}->createConditionValue();
if(!${'s_homepage21_argument'}->isValid()) return ${'s_homepage21_argument'}->getErrorMessage();
} else
${'s_homepage21_argument'} = NULL;if(${'s_homepage21_argument'} !== null) ${'s_homepage21_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags22_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags22_argument'}->createConditionValue();
if(!${'s_tags22_argument'}->isValid()) return ${'s_tags22_argument'}->getErrorMessage();
} else
${'s_tags22_argument'} = NULL;if(${'s_tags22_argument'} !== null) ${'s_tags22_argument'}->setColumnType('text');
if(isset($args->s_is_secret)) {
${'s_is_secret23_argument'} = new ConditionArgument('s_is_secret', $args->s_is_secret, 'equal');
${'s_is_secret23_argument'}->createConditionValue();
if(!${'s_is_secret23_argument'}->isValid()) return ${'s_is_secret23_argument'}->getErrorMessage();
} else
${'s_is_secret23_argument'} = NULL;if(isset($args->s_member_srl)) {
${'s_member_srl24_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl24_argument'}->createConditionValue();
if(!${'s_member_srl24_argument'}->isValid()) return ${'s_member_srl24_argument'}->getErrorMessage();
} else
${'s_member_srl24_argument'} = NULL;if(${'s_member_srl24_argument'} !== null) ${'s_member_srl24_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count25_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count25_argument'}->createConditionValue();
if(!${'s_readed_count25_argument'}->isValid()) return ${'s_readed_count25_argument'}->getErrorMessage();
} else
${'s_readed_count25_argument'} = NULL;if(${'s_readed_count25_argument'} !== null) ${'s_readed_count25_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count26_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count26_argument'}->createConditionValue();
if(!${'s_voted_count26_argument'}->isValid()) return ${'s_voted_count26_argument'}->getErrorMessage();
} else
${'s_voted_count26_argument'} = NULL;if(${'s_voted_count26_argument'} !== null) ${'s_voted_count26_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count27_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count27_argument'}->createConditionValue();
if(!${'s_blamed_count27_argument'}->isValid()) return ${'s_blamed_count27_argument'}->getErrorMessage();
} else
${'s_blamed_count27_argument'} = NULL;if(${'s_blamed_count27_argument'} !== null) ${'s_blamed_count27_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count28_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count28_argument'}->createConditionValue();
if(!${'s_comment_count28_argument'}->isValid()) return ${'s_comment_count28_argument'}->getErrorMessage();
} else
${'s_comment_count28_argument'} = NULL;if(${'s_comment_count28_argument'} !== null) ${'s_comment_count28_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count29_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count29_argument'}->createConditionValue();
if(!${'s_trackback_count29_argument'}->isValid()) return ${'s_trackback_count29_argument'}->getErrorMessage();
} else
${'s_trackback_count29_argument'} = NULL;if(${'s_trackback_count29_argument'} !== null) ${'s_trackback_count29_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count30_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count30_argument'}->createConditionValue();
if(!${'s_uploaded_count30_argument'}->isValid()) return ${'s_uploaded_count30_argument'}->getErrorMessage();
} else
${'s_uploaded_count30_argument'} = NULL;if(${'s_uploaded_count30_argument'} !== null) ${'s_uploaded_count30_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate31_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate31_argument'}->createConditionValue();
if(!${'s_regdate31_argument'}->isValid()) return ${'s_regdate31_argument'}->getErrorMessage();
} else
${'s_regdate31_argument'} = NULL;if(${'s_regdate31_argument'} !== null) ${'s_regdate31_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update32_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update32_argument'}->createConditionValue();
if(!${'s_last_update32_argument'}->isValid()) return ${'s_last_update32_argument'}->getErrorMessage();
} else
${'s_last_update32_argument'} = NULL;if(${'s_last_update32_argument'} !== null) ${'s_last_update32_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress33_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress33_argument'}->createConditionValue();
if(!${'s_ipaddress33_argument'}->isValid()) return ${'s_ipaddress33_argument'}->getErrorMessage();
} else
${'s_ipaddress33_argument'} = NULL;if(${'s_ipaddress33_argument'} !== null) ${'s_ipaddress33_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date34_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date34_argument'}->createConditionValue();
if(!${'start_date34_argument'}->isValid()) return ${'start_date34_argument'}->getErrorMessage();
} else
${'start_date34_argument'} = NULL;if(${'start_date34_argument'} !== null) ${'start_date34_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date35_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date35_argument'}->createConditionValue();
if(!${'end_date35_argument'}->isValid()) return ${'end_date35_argument'}->getErrorMessage();
} else
${'end_date35_argument'} = NULL;if(${'end_date35_argument'} !== null) ${'end_date35_argument'}->setColumnType('date');

${'page38_argument'} = new Argument('page', $args->{'page'});
${'page38_argument'}->ensureDefaultValue('1');
if(!${'page38_argument'}->isValid()) return ${'page38_argument'}->getErrorMessage();

${'page_count39_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count39_argument'}->ensureDefaultValue('10');
if(!${'page_count39_argument'}->isValid()) return ${'page_count39_argument'}->getErrorMessage();

${'list_count40_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count40_argument'}->ensureDefaultValue('20');
if(!${'list_count40_argument'}->isValid()) return ${'list_count40_argument'}->getErrorMessage();

${'ev.value36_argument'} = new Argument('ev.value', $args->{'ev.value'});
${'ev.value36_argument'}->ensureDefaultValue('ev.value');
if(!${'ev.value36_argument'}->isValid()) return ${'ev.value36_argument'}->getErrorMessage();

${'order_type37_argument'} = new SortArgument('order_type37', $args->order_type);
${'order_type37_argument'}->ensureDefaultValue('asc');
if(!${'order_type37_argument'}->isValid()) return ${'order_type37_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`d`.*')
));
$query->setTables(array(
new Table('`HeadspaK_new_documents`', '`d`')
,new Table('`HeadspaK_new_document_extra_vars`', '`ev`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ev`.`eid`',$sort_index5_argument,"equal")
,new ConditionWithoutArgument('`ev`.`document_srl`','`d`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`d`.`module_srl`',$module_srl6_argument,"in", 'and')
,new ConditionWithArgument('`d`.`module_srl`',$exclude_module_srl7_argument,"notin", 'and')
,new ConditionWithArgument('`d`.`category_srl`',$category_srl8_argument,"in", 'and')
,new ConditionWithArgument('`d`.`is_notice`',$s_is_notice9_argument,"equal", 'and')
,new ConditionWithArgument('`d`.`member_srl`',$member_srl10_argument,"equal", 'and')
,new ConditionWithArgument('`d`.`member_srl`',$member_srls11_argument,"in", 'and')
,new ConditionWithArgument('`d`.`status`',$statusList12_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`d`.`list_order`',$division13_argument,"more", 'and')
,new ConditionWithArgument('`d`.`list_order`',$last_division14_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`d`.`title`',$s_title15_argument,"like")
,new ConditionWithArgument('`d`.`content`',$s_content16_argument,"like", 'or')
,new ConditionWithArgument('`d`.`user_name`',$s_user_name17_argument,"like", 'or')
,new ConditionWithArgument('`d`.`user_id`',$s_user_id18_argument,"like", 'or')
,new ConditionWithArgument('`d`.`nick_name`',$s_nick_name19_argument,"like", 'or')
,new ConditionWithArgument('`d`.`email_address`',$s_email_address20_argument,"like", 'or')
,new ConditionWithArgument('`d`.`homepage`',$s_homepage21_argument,"like", 'or')
,new ConditionWithArgument('`d`.`tags`',$s_tags22_argument,"like", 'or')
,new ConditionWithArgument('`d`.`is_secret`',$s_is_secret23_argument,"equal", 'or')
,new ConditionWithArgument('`d`.`member_srl`',$s_member_srl24_argument,"equal", 'or')
,new ConditionWithArgument('`d`.`readed_count`',$s_readed_count25_argument,"more", 'or')
,new ConditionWithArgument('`d`.`voted_count`',$s_voted_count26_argument,"more", 'or')
,new ConditionWithArgument('`d`.`blamed_count`',$s_blamed_count27_argument,"less", 'or')
,new ConditionWithArgument('`d`.`comment_count`',$s_comment_count28_argument,"more", 'or')
,new ConditionWithArgument('`d`.`trackback_count`',$s_trackback_count29_argument,"more", 'or')
,new ConditionWithArgument('`d`.`uploaded_count`',$s_uploaded_count30_argument,"more", 'or')
,new ConditionWithArgument('`d`.`regdate`',$s_regdate31_argument,"like_prefix", 'or')
,new ConditionWithArgument('`d`.`last_update`',$s_last_update32_argument,"like_prefix", 'or')
,new ConditionWithArgument('`d`.`ipaddress`',$s_ipaddress33_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`d`.`last_update`',$start_date34_argument,"more", 'and')
,new ConditionWithArgument('`d`.`last_update`',$end_date35_argument,"less", 'and')),'and')
));
$query->setGroups(array(
'`d`.`document_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'ev.value36_argument'}, $order_type37_argument)
));
$query->setLimit(new Limit(${'list_count40_argument'}, ${'page38_argument'}, ${'page_count39_argument'}));
return $query; ?>