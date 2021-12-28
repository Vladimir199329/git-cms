<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:32
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20136813761c74458a4f159-84890899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3352f4039ac50c07e9a54c2ba0f6e1596b0f2808' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20136813761c74458a4f159-84890899',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c74458a55077_14040975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c74458a55077_14040975')) {function content_61c74458a55077_14040975($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
