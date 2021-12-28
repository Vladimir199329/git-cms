<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:16
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95866102261c8c73c2c44e9-05926395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6160a1d160f5ba96417b42ac6a5c8b0faa23192' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/wishlist/hooks/cart/search_form.override.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95866102261c8c73c2c44e9-05926395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'check_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c73c2d33f6_28816585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c73c2d33f6_28816585')) {function content_61c8c73c2d33f6_28816585($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('cart','wishlist'));
?>
<label for="cb_product_type_c"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_c" id="cb_product_type_c" onclick="if (!this.checked) document.getElementById('cb_product_type_w').checked = true;"/>
<?php echo $_smarty_tpl->__("cart");?>
</label>

<label for="cb_product_type_w"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_w']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_w" id="cb_product_type_w" onclick="if (!this.checked) document.getElementById('cb_product_type_c').checked = true;"  />
<?php echo $_smarty_tpl->__("wishlist");?>
</label><?php }} ?>
