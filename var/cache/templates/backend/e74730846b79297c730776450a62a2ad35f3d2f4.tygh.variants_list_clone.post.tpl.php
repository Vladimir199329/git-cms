<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:52:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51900107261c89dd1744794-41539990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74730846b79297c730776450a62a2ad35f3d2f4' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '51900107261c89dd1744794-41539990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89dd1747886_56823541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89dd1747886_56823541')) {function content_61c89dd1747886_56823541($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2">
</td>
<?php }} ?>
