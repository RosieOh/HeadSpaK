<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/skins/06-01-headspa_startup/content.css--><?php $__tmp=array('modules/page/skins/06-01-headspa_startup/content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/page/skins/06-01-headspa_startup/content.js--><?php $__tmp=array('modules/page/skins/06-01-headspa_startup/content.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type == 'ko'){ ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub01_title_wrap">
				<h2>헤드스파 K 창업</h2>
			</div>
			<div class="sub_tab_wrap">
				<div class="sub_tab on">헤드스파 K 전문점</div>
				<div class="sub_tab">헤드스파 K 시스템</div>
				<div class="sub_tab">헤드스파 K 경쟁력</div>
				<div class="sub_tab">헤드스파 K 오픈 절차</div>
			</div>
			<select class="sub_sel">
				<option value="0">헤드스파 K 전문점</option>
				<option value="1">헤드스파 K 시스템</option>
				<option value="2">헤드스파 K 경쟁력</option>
				<option value="3">헤드스파 K 오픈 절차</option>
			</select>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_tabcon_wrap">
			<div class="sub_tabcon on"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_01.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_02.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_03.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_04.html') ?></div>
		</div>
	</section>
</div>
<?php }else if($__Context->lang_type == 'en'){ ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub01_title_wrap">
				<h2>HeadSpa K Start-up</h2>
			</div>
			<div class="sub_tab_wrap">
				<div class="sub_tab on">Specialty store</div>
				<div class="sub_tab">System</div>
				<div class="sub_tab">Competitiveness</div>
				<div class="sub_tab">Open process</div>
			</div>
			<select class="sub_sel">
				<option value="0">Specialty store</option>
				<option value="1">System</option>
				<option value="2">Competitiveness</option>
				<option value="3">Open process</option>
			</select>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_tabcon_wrap">
			<div class="sub_tabcon on"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_01.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_02.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_03.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_04.html') ?></div>
		</div>
	</section>
</div>
<?php }else if($__Context->lang_type == 'zh-CN'){ ?>
<div class="sub_wrap">
	<section class="sub_sec" id="sub01">
		<div class="sub_con">
			<div class="sub01_title_wrap">
				<h2>Head Spa K创业</h2>
			</div>
			<div class="sub_tab_wrap">
				<div class="sub_tab on">Head Spa K专门店 </div>
				<div class="sub_tab">Head Spa K系统 </div>
				<div class="sub_tab">Head Spa K竞争力 </div>
				<div class="sub_tab">Head Spa K开业程序</div>
			</div>
			<select class="sub_sel">
				<option value="0">Head Spa K专门店</option>
				<option value="1">Head Spa K系统</option>
				<option value="2">Head Spa K竞争力</option>
				<option value="3">Head Spa K开业程序</option>
			</select>
		</div>
	</section>
	<section class="sub_sec" id="sub02">
		<div class="sub_tabcon_wrap">
			<div class="sub_tabcon on"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_01.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_02.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_03.html') ?></div>
			<div class="sub_tabcon"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/skins/06-01-headspa_startup','tab_04.html') ?></div>
		</div>
	</section>
</div>
<?php } ?>