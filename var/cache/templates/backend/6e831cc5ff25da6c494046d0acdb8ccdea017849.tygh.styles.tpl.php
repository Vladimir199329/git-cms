<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:32
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/statuses/components/styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162455896061c74458a29392-93850376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e831cc5ff25da6c494046d0acdb8ccdea017849' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/statuses/components/styles.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162455896061c74458a29392-93850376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'statuses' => 0,
    'status' => 0,
    'status_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c74458a403f1_65076580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c74458a403f1_65076580')) {function content_61c74458a403f1_65076580($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.style.php';
?><?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(fn_get_statuses($_smarty_tpl->tpl_vars['type']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("styles", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars["status_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["status_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["status_data"]->key => $_smarty_tpl->tpl_vars["status_data"]->value) {
$_smarty_tpl->tpl_vars["status_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["status_data"]->key;
?>
        .<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 {
            .buttonBackground(lighten(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 5%));
        }
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo smarty_function_style(array('content'=>Smarty::$_smarty_vars['capture']['styles'],'type'=>"less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
