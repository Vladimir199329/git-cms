<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:43
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/multiple_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206059688561c897ff9ff369-32428273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f5f66cfbc7961f13ac93c56add6163795fb02a9' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/multiple_checkboxes.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '206059688561c897ff9ff369-32428273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'id_field' => 0,
    'item' => 0,
    'k' => 0,
    'name_field' => 0,
    'list_mode' => 0,
    'input_id' => 0,
    'id' => 0,
    'input_name' => 0,
    'item_ids' => 0,
    'item_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897ffa1c752_25455568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897ffa1c752_25455568')) {function content_61c897ffa1c752_25455568($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['id_field']->value) {?>
        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['name_field']->value) {?>
        <?php $_smarty_tpl->tpl_vars['item_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name_field']->value], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['item_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
    <?php }?>

    <label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input 
            type="checkbox" 
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
]" 
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['item_ids']->value)) {?>
                checked="checked"
            <?php }?> 
        />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>

    </label>
<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    <?php echo $_smarty_tpl->__("no_items");?>

<?php } ?><?php }} ?>
