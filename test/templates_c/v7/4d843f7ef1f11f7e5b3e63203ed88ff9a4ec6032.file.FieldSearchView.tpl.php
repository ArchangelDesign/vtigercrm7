<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:27:38
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Vtiger\uitypes\FieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82858fb928aca8c90-40396970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d843f7ef1f11f7e5b3e63203ed88ff9a4ec6032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\uitypes\\FieldSearchView.tpl',
      1 => 1492879012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82858fb928aca8c90-40396970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb928acb3ad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb928acb3ad')) {function content_58fb928acb3ad($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><div class=""><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="listSearchContributor inputElement" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/></div><?php }} ?>