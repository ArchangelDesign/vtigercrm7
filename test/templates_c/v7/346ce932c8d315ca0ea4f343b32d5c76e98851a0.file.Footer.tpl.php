<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:22:38
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Vtiger\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:690558fb915e2ff567-94391257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '346ce932c8d315ca0ea4f343b32d5c76e98851a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1492879011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690558fb915e2ff567-94391257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb915e30614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb915e30614')) {function content_58fb915e30614($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Powered by vtiger CRM - 7.0&nbsp;&nbsp;© 2004 - <?php echo date('Y');?>
&nbsp;&nbsp;
		<a href="//www.vtiger.com" target="_blank">Vtiger</a>&nbsp;|&nbsp;
		<a href="https://www.vtiger.com/privacy-policy" target="_blank">Privacy Policy</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>