<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:41:53
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Install\InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2357658fb87d1870b62-44371269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a64cb3c52f4ab2182f6d4171aa24b3d2c72f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1492879006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2357658fb87d1870b62-44371269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb87d1878af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb87d1878af')) {function content_58fb87d1878af($_smarty_tpl) {?>

<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>