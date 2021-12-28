<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:34
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204077473061c7445a937519-33980174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f74ebd0646c8dd1cb3cae2715acf2142283782b' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '204077473061c7445a937519-33980174',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c7445a939067_21284365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c7445a939067_21284365')) {function content_61c7445a939067_21284365($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/rus_payments/yandex_checkpoint.js"),$_smarty_tpl);?>
<?php }} ?>
