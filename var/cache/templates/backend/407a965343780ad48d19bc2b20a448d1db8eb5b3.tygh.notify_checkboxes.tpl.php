<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 20:35:36
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190822103061c8a7e8100720-38470912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '407a965343780ad48d19bc2b20a448d1db8eb5b3' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190822103061c8a7e8100720-38470912',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8a7e8107e34_64101401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8a7e8107e34_64101401')) {function content_61c8a7e8107e34_64101401($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0);?>
<?php }} ?>
