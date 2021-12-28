<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:43
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/update_product_usergroup_ids.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85933686961c897ffa35492-32897172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03883d9b8149b7c2e11a0e45393c959c1b8cdb60' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/update_product_usergroup_ids.override.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '85933686961c897ffa35492-32897172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897ffa38d15_49815836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897ffa38d15_49815836')) {function content_61c897ffa38d15_49815836($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("usergroup_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
