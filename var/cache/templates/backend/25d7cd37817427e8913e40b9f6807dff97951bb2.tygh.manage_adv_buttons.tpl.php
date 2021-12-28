<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 23:41:41
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/addons/components/manage/manage_adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128282091061c8d38531f601-32991773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d7cd37817427e8913e40b9f6807dff97951bb2' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/addons/components/manage/manage_adv_buttons.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128282091061c8d38531f601-32991773',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8d38532a2c9_00645223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8d38532a2c9_00645223')) {function content_61c8d38532a2c9_00645223($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('visit_marketplace'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url("helpdesk_connector.visit_marketplace"),'but_text'=>$_smarty_tpl->__("visit_marketplace"),'but_meta'=>"btn btn-primary",'but_role'=>"action",'but_target'=>"_blank"), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
