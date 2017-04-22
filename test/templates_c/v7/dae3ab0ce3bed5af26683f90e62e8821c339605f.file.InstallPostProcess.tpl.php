<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:41:53
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Install\InstallPostProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1954258fb87d19825b4-61949742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dae3ab0ce3bed5af26683f90e62e8821c339605f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Install\\InstallPostProcess.tpl',
      1 => 1492879006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954258fb87d19825b4-61949742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VTIGER_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb87d198eff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb87d198eff')) {function content_58fb87d198eff($_smarty_tpl) {?>

<br>
<center>
	<footer class="noprint">
		<div class="vtFooter">
			<p>
				<?php echo vtranslate('POWEREDBY');?>
 <?php echo $_smarty_tpl->tpl_vars['VTIGER_VERSION']->value;?>
&nbsp;
				&copy; 2004 - <?php echo date('Y');?>
&nbsp;
				<a href="//www.vtiger.com" target="_blank">vtiger.com</a>
				&nbsp;|&nbsp;
				<a href="#" onclick="window.open('copyright.html', 'copyright', 'height=115,width=575').moveTo(210, 620)"><?php echo vtranslate('LBL_READ_LICENSE');?>
</a>
				&nbsp;|&nbsp;
				<a href="https://www.vtiger.com/privacy-policy" target="_blank"><?php echo vtranslate('LBL_PRIVACY_POLICY');?>
</a>
			</p>
		</div>
	</footer>
</center>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>