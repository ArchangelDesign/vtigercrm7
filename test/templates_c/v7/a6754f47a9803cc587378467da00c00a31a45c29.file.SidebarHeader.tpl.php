<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:22:37
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Vtiger\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160658fb915d5b0701-57069941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6754f47a9803cc587378467da00c00a31a45c29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\partials\\SidebarHeader.tpl',
      1 => 1492879011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160658fb915d5b0701-57069941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
    'APP_IMAGE_MAP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb915d5ec08',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb915d5ec08')) {function content_58fb915d5ec08($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["APP_IMAGE_MAP"] = new Smarty_variable(array('MARKETING'=>'fa-users','SALES'=>'fa-dot-circle-o','SUPPORT'=>'fa-life-ring','INVENTORY'=>'vicon-inventory','PROJECT'=>'fa-briefcase'), null, 0);?>

<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<div class="row" title="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?> <?php echo vtranslate('LBL_DASHBOARD');?>
 <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
<?php }?>">
		<span class="app-indicator-icon fa <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?>fa-dashboard<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value];?>
<?php }?>"></span>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>