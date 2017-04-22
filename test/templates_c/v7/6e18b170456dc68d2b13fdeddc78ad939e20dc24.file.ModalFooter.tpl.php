<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:27:37
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Vtiger\ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277158fb9289da1378-18545094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e18b170456dc68d2b13fdeddc78ad939e20dc24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ModalFooter.tpl',
      1 => 1492879011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277158fb9289da1378-18545094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BUTTON_NAME' => 0,
    'MODULE' => 0,
    'BUTTON_ID' => 0,
    'BUTTON_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb9289dafac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb9289dafac')) {function content_58fb9289dafac($_smarty_tpl) {?>
<div class="modal-footer "><center><?php if ($_smarty_tpl->tpl_vars['BUTTON_NAME']->value!=null){?><?php $_smarty_tpl->tpl_vars['BUTTON_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['BUTTON_NAME']->value, null, 0);?><?php }else{ ?><?php ob_start();?><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['BUTTON_LABEL'] = new Smarty_variable($_tmp1, null, 0);?><?php }?><button <?php if ($_smarty_tpl->tpl_vars['BUTTON_ID']->value!=null){?> id="<?php echo $_smarty_tpl->tpl_vars['BUTTON_ID']->value;?>
" <?php }?> class="btn btn-success" type="submit" name="saveButton"><strong><?php echo $_smarty_tpl->tpl_vars['BUTTON_LABEL']->value;?>
</strong></button><a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></div><?php }} ?>