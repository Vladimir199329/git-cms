<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:35
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/pickers/orders/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135117286561c897f74147d2-78660983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '914827da6f329b81ce484b9342874bcff831710c' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/pickers/orders/js.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '135117286561c897f74147d2-78660983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_mode' => 0,
    'clone' => 0,
    'holder' => 0,
    'order_id' => 0,
    'hidden' => 0,
    'first_item' => 0,
    'status' => 0,
    'customer' => 0,
    'timestamp' => 0,
    'settings' => 0,
    'total' => 0,
    'view_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897f7458379_14458887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897f7458379_14458887')) {function content_61c897f7458379_14458887($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','status','customer','date','total','edit','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="simple") {?>
<span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone<?php }
if ($_smarty_tpl->tpl_vars['clone']->value||$_smarty_tpl->tpl_vars['hidden']->value) {?> hidden<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['first_item']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">, </span><?php }?>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
</span>
<?php } else { ?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <td data-th="<?php echo $_smarty_tpl->__("id");?>
">
        <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)), ENT_QUOTES, 'UTF-8');?>
">&nbsp;<span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</a></td>
    <td data-th="<?php echo $_smarty_tpl->__("status");?>
"><?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['status']->value,'display'=>"view",'name'=>"order_statuses[".((string)$_smarty_tpl->tpl_vars['order_id']->value)."]"), 0);
}?></td>
    <td data-th="<?php echo $_smarty_tpl->__("customer");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value, ENT_QUOTES, 'UTF-8');?>
</td>
    <td data-th="<?php echo $_smarty_tpl->__("date");?>
">
        <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['timestamp']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');
}?></a></td>
    <td class="right" data-th="<?php echo $_smarty_tpl->__("total");?>
">
        <?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value), 0);
}?></td>
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
    <td class="nowrap" data-th="&nbsp;">
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['order_id']->value)."', 'o'); return false;"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <?php }?>
</tr>
<?php }?>
<?php }} ?>
