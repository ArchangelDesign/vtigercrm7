<?php /* Smarty version Smarty-3.1.7, created on 2017-04-22 17:22:36
         compiled from "C:\xampp\htdocs\vtiger_crm\v7\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\DashBoardPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42458fb915cdb7961-31017755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38bedc0e4a2e3d70d3c0bf017158ee0bcdf30b4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger_crm\\v7\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\DashBoardPreProcess.tpl',
      1 => 1492879011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42458fb915cdb7961-31017755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58fb915ce52e4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb915ce52e4')) {function content_58fb915ce52e4($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
 <div id='overlayPageContent' class='fade modal content-area overlayPageContent overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>

<?php }} ?>