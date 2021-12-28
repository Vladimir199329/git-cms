<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:45
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194849972761c89801793e18-80154286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '228b39508334e731e641b8d8150a81e4ed3dac3b' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '194849972761c89801793e18-80154286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'group_codes' => 0,
    'group_id' => 0,
    'group_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8980179e524_79093687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8980179e524_79093687')) {function content_61c8980179e524_79093687($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.group_code.link','none','none'));
?>
<div class="object-picker__simple object-picker__simple--variation-group input-xlarge">
    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_id">
    <select id="product_variations_code"
        class="cm-object-picker object-picker__select product-variations__toolbar-code-link"
        name="group_id"
        data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("product_variations.group_code.link");?>
"
    >
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
        <?php  $_smarty_tpl->tpl_vars['group_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_code']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_code']->key => $_smarty_tpl->tpl_vars['group_code']->value) {
$_smarty_tpl->tpl_vars['group_code']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group_code']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_code']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
    </select>
</div><?php }} ?>
