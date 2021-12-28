<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:35
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69604392261c897f74663e7-14496204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063a8ef0488dbdaa8b3602dbbf30daf5221c6df6' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '69604392261c897f74663e7-14496204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897f746afe4_97749762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897f746afe4_97749762')) {function content_61c897f746afe4_97749762($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }} ?>
