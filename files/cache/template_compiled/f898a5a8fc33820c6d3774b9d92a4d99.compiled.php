<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->cmd_trash ?> <?php echo $__Context->lang->trash_description ?></h1>
</div>
<h2><?php echo $__Context->lang->delete_info ?></h2>
<table class="x_table x_table-striped x_table-hover">
	<col width="120">
	<tr>
		<th scope="col" class="nowr"><?php echo $__Context->lang->trasher ?></th>
		<td>
		<?php echo htmlspecialchars($__Context->remover_info->nick_name) ?> <a href="#popup_menu_area" class="member_<?php echo escape($__Context->oTrashVO->getRemoverSrl(), false) ?>" onclick="return false">[<?php echo escape($__Context->remover_info->user_id, false) ?>]</a>
		</td>
	</tr>
	<tr>
		<th scope="col" class="nowr"><?php echo $__Context->lang->trash_date ?></th>
		<td><?php echo escape(zdate($__Context->oTrashVO->getRegdate(), "Y-m-d H:i:s"), false) ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->trash_description ?></th>
		<td class="text"><?php echo escape($__Context->oTrashVO->getDescription(), false) ?></td>
	</tr>
</table>
<br>
<h2><?php echo $__Context->lang->origin_info ?></h2>
<table class="x_table x_table-striped x_table-hover">
	<col width="120">
	<tr>
		<th scope="row"><?php echo $__Context->lang->module ?></th>
		<td class="text">
		<?php echo escape($__Context->module_info->browser_title, false) ?> (<?php echo escape($__Context->module_info->mid, false) ?>)
		</td>
	</tr>	
	<tr>
		<th scope="row"><?php echo $__Context->lang->title ?></th>
		<td class="text"><?php echo escape($__Context->oOrigin->title, false) ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->writer ?></th>
		<td class="text"><?php echo htmlspecialchars($__Context->oOrigin->nick_name) ?> <a href="#popup_menu_area" class="member_<?php echo escape($__Context->oOrigin->member_srl, false) ?>" onclick="return false">[<?php echo escape($__Context->oOrigin->user_id, false) ?>]</a></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->regdate ?></th>
		<td class="text"><?php echo escape(zdate($__Context->oOrigin->regdate,'Y.m.d H:i:s'), false) ?></td>
	</tr>
	<tr>
		<th scope="row"><?php echo $__Context->lang->ipaddress ?></th>
		<td class="text"><?php echo escape($__Context->oOrigin->ipaddress, false) ?></td>
	</tr>
	<?php if($__Context->oOriginExtraVars&&count($__Context->oOriginExtraVars))foreach($__Context->oOriginExtraVars as $__Context->key=>$__Context->val){ ?>
	<tr><th><?php echo escape($__Context->val->name, false) ?></th>	
		<td><?php echo escape($__Context->val->value, false) ?></td>
	</tr>
	<?php } ?>
	<tr>
		<th scope="row"><?php echo $__Context->lang->content ?></th>
		<td class="text"><?php echo $__Context->oOrigin->content ?></td>
	</tr>
</table>
<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="trash" />
	<input type="hidden" name="act" value="procTrashAdminEmptyTrash" />
	<input type="hidden" name="page" value="<?php echo escape($__Context->page, false) ?>" />
	<input type="hidden" name="is_all" value="false" />
	<input type="hidden" name="origin_module" value="<?php echo escape($__Context->oTrashVO->getOriginModule(), false) ?>" />
	<input type="hidden" name="cart[]" value="<?php echo escape($__Context->oTrashVO->getTrashSrl(), false) ?>" />
	<div class="x_pull-left"><button class="x_btn" type="button" onclick="history.go(-1)"><?php echo $__Context->lang->cmd_list ?></button></div>
	<div class="x_pull-right">
		<button type="submit" name="is_all" class="x_btn"  value="false"><?php echo $__Context->lang->cmd_delete ?></button>
		<button type="submit" name="act" class="x_btn x_btn-primary"  value="procTrashAdminRestore"><?php echo $__Context->lang->cmd_restore ?></button>
	</div>
</form>
