<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20737251861c89800440370-94383694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c3f0892f4b2687576579af2f3af860094ac47d5' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20737251861c89800440370-94383694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'auth' => 0,
    'communication_type' => 0,
    'but_icon' => 0,
    'but_text' => 0,
    'menu_button' => 0,
    'divider' => 0,
    'object_type' => 0,
    'object_id' => 0,
    'return_url' => 0,
    'href' => 0,
    'but_role' => 0,
    'but_meta' => 0,
    'allow_manage' => 0,
    'allow_new_thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800492d15_25287507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800492d15_25287507')) {function content_61c89800492d15_25287507($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.contact_admin','vendor_communication.contact_vendor'));
?>
<?php if (!$_smarty_tpl->tpl_vars['title']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("vendor_communication.contact_admin"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("vendor_communication.contact_vendor"), null, 0);?>
    <?php }?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['communication_type']->value) {?>
    <?php $_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['allow_manage'] = new Smarty_variable(fn_check_permissions("vendor_communication","create_thread","admin","GET",array("communication_type"=>$_smarty_tpl->tpl_vars['communication_type']->value)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_new_thread'] = new Smarty_variable(fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>

<?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_icon']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['title']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['menu_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['menu_button']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['divider']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?>
    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
    <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("vendor_communication.create_thread?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['object_id']->value)."&communication_type=".((string)$_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("vendor_communication.create_thread?communication_type=".((string)$_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['return_url']->value) {?>
    <?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['return_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['href']->value)."&return_url=".$_tmp15, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("thread_button", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['title']->value,'class'=>"cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close",'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>array("data-ca-dialog-title"=>$_smarty_tpl->tpl_vars['title']->value)));?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_href'=>$_smarty_tpl->tpl_vars['href']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['allow_manage']->value&&$_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['object_type']->value&&$_smarty_tpl->tpl_vars['menu_button']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['divider']->value) {?>
            <li class="divider"></li>
        <?php }?>
        <li><?php echo Smarty::$_smarty_vars['capture']['thread_button'];?>
</li>
    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['thread_button'];?>

    <?php }?>
<?php }?>
<?php }} ?>
