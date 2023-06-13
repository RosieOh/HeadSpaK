<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraKeys");
$query->setAction("insert");
$query->setPriority("");

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'var_idx5_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx5_argument'}->checkFilter('number');
${'var_idx5_argument'}->checkNotNull();
if(!${'var_idx5_argument'}->isValid()) return ${'var_idx5_argument'}->getErrorMessage();
if(${'var_idx5_argument'} !== null) ${'var_idx5_argument'}->setColumnType('number');

${'var_name6_argument'} = new Argument('var_name', $args->{'var_name'});
${'var_name6_argument'}->checkNotNull();
if(!${'var_name6_argument'}->isValid()) return ${'var_name6_argument'}->getErrorMessage();
if(${'var_name6_argument'} !== null) ${'var_name6_argument'}->setColumnType('varchar');

${'var_type7_argument'} = new Argument('var_type', $args->{'var_type'});
${'var_type7_argument'}->checkNotNull();
if(!${'var_type7_argument'}->isValid()) return ${'var_type7_argument'}->getErrorMessage();
if(${'var_type7_argument'} !== null) ${'var_type7_argument'}->setColumnType('varchar');

${'var_is_required8_argument'} = new Argument('var_is_required', $args->{'var_is_required'});
${'var_is_required8_argument'}->ensureDefaultValue('N');
${'var_is_required8_argument'}->checkNotNull();
if(!${'var_is_required8_argument'}->isValid()) return ${'var_is_required8_argument'}->getErrorMessage();
if(${'var_is_required8_argument'} !== null) ${'var_is_required8_argument'}->setColumnType('char');

${'var_search9_argument'} = new Argument('var_search', $args->{'var_search'});
${'var_search9_argument'}->ensureDefaultValue('N');
${'var_search9_argument'}->checkNotNull();
if(!${'var_search9_argument'}->isValid()) return ${'var_search9_argument'}->getErrorMessage();
if(${'var_search9_argument'} !== null) ${'var_search9_argument'}->setColumnType('char');
if(isset($args->var_default)) {
${'var_default10_argument'} = new Argument('var_default', $args->{'var_default'});
if(!${'var_default10_argument'}->isValid()) return ${'var_default10_argument'}->getErrorMessage();
} else
${'var_default10_argument'} = NULL;if(${'var_default10_argument'} !== null) ${'var_default10_argument'}->setColumnType('text');
if(isset($args->var_desc)) {
${'var_desc11_argument'} = new Argument('var_desc', $args->{'var_desc'});
if(!${'var_desc11_argument'}->isValid()) return ${'var_desc11_argument'}->getErrorMessage();
} else
${'var_desc11_argument'} = NULL;if(${'var_desc11_argument'} !== null) ${'var_desc11_argument'}->setColumnType('text');

${'eid12_argument'} = new Argument('eid', $args->{'eid'});
${'eid12_argument'}->checkNotNull();
if(!${'eid12_argument'}->isValid()) return ${'eid12_argument'}->getErrorMessage();
if(${'eid12_argument'} !== null) ${'eid12_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`var_idx`', ${'var_idx5_argument'})
,new InsertExpression('`var_name`', ${'var_name6_argument'})
,new InsertExpression('`var_type`', ${'var_type7_argument'})
,new InsertExpression('`var_is_required`', ${'var_is_required8_argument'})
,new InsertExpression('`var_search`', ${'var_search9_argument'})
,new InsertExpression('`var_default`', ${'var_default10_argument'})
,new InsertExpression('`var_desc`', ${'var_desc11_argument'})
,new InsertExpression('`eid`', ${'eid12_argument'})
));
$query->setTables(array(
new Table('`HeadspaK_new_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>