<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:15:27
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Install\Step7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:983758fb8faf38e992-68083469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8151e1a4753f9933654cb267f3051e35f3fe0caf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Install\\Step7.tpl',
      1 => 1492879006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '983758fb8faf38e992-68083469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APPUNIQUEKEY' => 0,
    'CURRENT_VERSION' => 0,
    'INDUSTRY' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb8faf3c9c5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb8faf3c9c5')) {function content_58fb8faf3c9c5($_smarty_tpl) {?>

<center><?php echo vtranslate('LBL_LOADING_PLEASE_WAIT');?>
...</center>

<form class="form-horizontal" name="step7" method="post" action="?module=Users&action=Login">
	<img src="//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=I&industry=<?php echo urlencode($_smarty_tpl->tpl_vars['INDUSTRY']->value);?>
" alt='' title='' border=0 width='1px' height='1px'>
	<input type=hidden name="username" value="admin" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<script type="text/javascript">
	jQuery(function () { /* Delay to let page load complete */
		setTimeout(function () {
			jQuery('form[name="step7"]').submit();
		}, 150);
	});
</script>
<?php }} ?>