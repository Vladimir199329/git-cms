<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:34
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/store_locator/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48029442061c7445a910fb4-38524819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41b0077bc46d1b3db3ba23be05c48d564c357efe' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/store_locator/hooks/index/scripts.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '48029442061c7445a910fb4-38524819',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c7445a9141b2_76075970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c7445a9141b2_76075970')) {function content_61c7445a9141b2_76075970($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/store_locator/configure_shipping.js"),$_smarty_tpl);?>

<?php }} ?>
