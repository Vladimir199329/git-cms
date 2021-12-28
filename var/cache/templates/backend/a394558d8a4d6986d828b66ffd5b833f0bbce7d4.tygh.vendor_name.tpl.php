<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76228534761c8c7475b0c07-09175311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a394558d8a4d6986d828b66ffd5b833f0bbce7d4' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '76228534761c8c7475b0c07-09175311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_reply' => 0,
    'NAME_CHARACTERS_THRESHOLD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c7475c2dc1_47812209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c7475c2dc1_47812209')) {function content_61c8c7475c2dc1_47812209($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('administrator'));
?>


<?php $_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD'] = new Smarty_variable(30, null, 0);
if ($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company']) {?><a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company_id'])), ENT_QUOTES, 'UTF-8');?>
"title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("administrator");?>
</span><?php }?>
<?php }} ?>
