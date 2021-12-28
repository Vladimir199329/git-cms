<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:46
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/block_manager/components/device_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47349501761c89802263ed3-65911654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc136d1a26d793f4f3601e750e52b4a07a6b7eb' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/block_manager/components/device_icons.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47349501761c89802263ed3-65911654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'devices' => 0,
    'wrapper_class' => 0,
    'device' => 0,
    'all_devices' => 0,
    'is_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898022734b2_86592595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898022734b2_86592595')) {function content_61c898022734b2_86592595($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['devices'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['availability'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['all_devices'] = new Smarty_variable(array_filter($_smarty_tpl->tpl_vars['devices']->value)==$_smarty_tpl->tpl_vars['devices']->value, null, 0);?>

<div class="device-specific-block__devices <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars['is_available'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_available']->_loop = false;
 $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_available']->key => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->_loop = true;
 $_smarty_tpl->tpl_vars['device']->value = $_smarty_tpl->tpl_vars['is_available']->key;
?>
        <div class="device-specific-block__devices__device device-specific-block__devices__device--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['all_devices']->value||!$_smarty_tpl->tpl_vars['is_available']->value) {?>hidden<?php }?>"></div>
    <?php } ?>
</div>
<?php }} ?>
