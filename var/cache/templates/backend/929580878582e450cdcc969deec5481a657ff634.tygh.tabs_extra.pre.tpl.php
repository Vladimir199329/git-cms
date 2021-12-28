<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108339615761c898004bb0b3-38425411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '929580878582e450cdcc969deec5481a657ff634' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108339615761c898004bb0b3-38425411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_form_readonly' => 0,
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898004c0ee2_00036944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898004c0ee2_00036944')) {function content_61c898004c0ee2_00036944($_smarty_tpl) {?><div class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>cm-hide-inputs<?php }?> <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="variations") {?>hidden<?php }?>" id="content_variations"></div><?php }} ?>
