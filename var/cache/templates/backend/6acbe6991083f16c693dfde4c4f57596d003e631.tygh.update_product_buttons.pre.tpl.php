<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96306137061c898003f51f9-86239931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acbe6991083f16c693dfde4c4f57596d003e631' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96306137061c898003f51f9-86239931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898003fb285_16463988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898003fb285_16463988')) {function content_61c898003fb285_16463988($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->tpl_vars['allow_clone'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['allow_clone'] = clone $_smarty_tpl->tpl_vars['allow_clone'];?>
<?php }?>
<?php }} ?>
