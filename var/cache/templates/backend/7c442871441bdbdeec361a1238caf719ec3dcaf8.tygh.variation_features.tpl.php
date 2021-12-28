<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:53:07
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/views/product_variations/components/variation_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128972445961c89df3566131-78159413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c442871441bdbdeec361a1238caf719ec3dcaf8' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/views/product_variations/components/variation_features.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128972445961c89df3566131-78159413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'variation_features' => 0,
    'feature' => 0,
    'variant_names' => 0,
    'features_secondary' => 0,
    'features_brackets' => 0,
    'features_separator' => 0,
    'features_split' => 0,
    'features_inline' => 0,
    'features_mini' => 0,
    'features_tags' => 0,
    'features_clearfix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89df359ff53_56819075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89df359ff53_56819075')) {function content_61c89df359ff53_56819075($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['variation_features']->value) {
$_smarty_tpl->tpl_vars['variant_names'] = new Smarty_variable(array(), null, 0);
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
if ($_smarty_tpl->tpl_vars['feature']->value['purpose']===constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {
$_smarty_tpl->createLocalArrayVariable('variant_names', null, 0);
$_smarty_tpl->tpl_vars['variant_names']->value[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];
}
}
if ($_smarty_tpl->tpl_vars['variant_names']->value) {
$_smarty_tpl->tpl_vars['features_secondary'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_secondary']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_brackets'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_brackets']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_separator'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_separator']->value)===null||$tmp==='' ? " • " : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_split'] = new Smarty_variable($_smarty_tpl->tpl_vars['features_split']->value===true ? "—" : $_smarty_tpl->tpl_vars['features_split']->value, null, 0);
$_smarty_tpl->tpl_vars['features_inline'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_inline']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_mini'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_mini']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_tags'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_tags']->value)===null||$tmp==='' ? true : $tmp), null, 0);
$_smarty_tpl->tpl_vars['features_clearfix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['features_clearfix']->value)===null||$tmp==='' ? false : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?><div class="product-variations__variation-features<?php if ($_smarty_tpl->tpl_vars['features_secondary']->value) {?> product-variations__variation-features--secondary<?php }
if ($_smarty_tpl->tpl_vars['features_inline']->value) {?> product-variations__variation-features--inline<?php }
if ($_smarty_tpl->tpl_vars['features_mini']->value) {?> product-variations__variation-features--mini<?php }
if ($_smarty_tpl->tpl_vars['features_clearfix']->value) {?> product-variations__variation-features--clearfix<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>(<?php }
echo htmlspecialchars(implode($_smarty_tpl->tpl_vars['features_separator']->value,$_smarty_tpl->tpl_vars['variant_names']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>)<?php }
if ($_smarty_tpl->tpl_vars['features_split']->value) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features_split']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?></div><?php }
}
}?><?php }} ?>
