<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45844422261c8c7475ef279-03800377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '410fba1505babf1d2dc8f3c074d34363016b5e8e' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45844422261c8c7475ef279-03800377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c747603174_20925297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c747603174_20925297')) {function content_61c8c747603174_20925297($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.verified_purchase','anonymous'));
?>


<?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']||$_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']===smarty_modifier_enum("YesNo::YES")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok-sign muted",'title'=>$_smarty_tpl->__("product_reviews.verified_purchase")),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_anon']) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-eye-close muted",'title'=>$_smarty_tpl->__("anonymous")),$_smarty_tpl);?>

    <?php }?>

<?php }?>
<?php }} ?>
