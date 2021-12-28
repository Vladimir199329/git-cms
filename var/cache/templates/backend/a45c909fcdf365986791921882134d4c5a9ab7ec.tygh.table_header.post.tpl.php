<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124655398161c8980098ce96-08787028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a45c909fcdf365986791921882134d4c5a9ab7ec' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '124655398161c8980098ce96-08787028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'extra_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898009985d6_25035956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898009985d6_25035956')) {function content_61c898009985d6_25035956($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price','discount','value','discounted_price','product_bundles.show_on_product_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']==="product_bundles"||$_smarty_tpl->tpl_vars['extra_mode']->value==="product_bundles") {?>
    <th><?php echo $_smarty_tpl->__("price");?>
</th>
    <th><?php echo $_smarty_tpl->__("discount");?>
</th>
    <th><?php echo $_smarty_tpl->__("value");?>
</th>
    <th><?php echo $_smarty_tpl->__("discounted_price");?>
</th>
    <th><?php echo $_smarty_tpl->__("product_bundles.show_on_product_page");?>
</th>
<?php }?><?php }} ?>
