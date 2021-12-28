<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:32
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41843517661c74458a63822-06806062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab7bf00778d257c7716d1e8630e289b0679acf48' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '41843517661c74458a63822-06806062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c74458a69490_27749976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c74458a69490_27749976')) {function content_61c74458a69490_27749976($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
