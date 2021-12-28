<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116261021061c89800f373e2-80895571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4cb50e4f74a07a7baafce95a0c36247415f8718' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '116261021061c89800f373e2-80895571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800f3e256_91496560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800f3e256_91496560')) {function content_61c89800f3e256_91496560($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.yml2_option_variant'));
?>
<div class="control-group cm-non-cb">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_option_variant");?>
</label>
    <div class="controls">
        <input type="text" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_variant]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'], ENT_QUOTES, 'UTF-8');
}?>" class="input-medium" />
    </div>
</div>
<?php }} ?>
