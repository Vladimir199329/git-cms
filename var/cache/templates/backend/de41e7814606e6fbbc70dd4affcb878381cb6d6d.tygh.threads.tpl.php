<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 23:34:08
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/vendor_communication/views/vendor_communication/threads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128845030461c8d1c0673261-02976866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de41e7814606e6fbbc70dd4affcb878381cb6d6d' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/vendor_communication/views/vendor_communication/threads.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128845030461c8d1c0673261-02976866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'config' => 0,
    'auth' => 0,
    'runtime' => 0,
    'threads' => 0,
    'thread' => 0,
    'show_subject_image_column' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'has_new_message' => 0,
    'thread_href' => 0,
    'settings' => 0,
    'communication_type' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8d1c07c8df8_90187673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8d1c07c8df8_90187673')) {function content_61c8d1c07c8df8_90187673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','message','subject','customer','date','id','vendor_communication.thread','message','subject','vendor_communication.you','vendor_communication.admin','customer','customer','delete','date','no_data','vendor_communication.message_center'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['show_subject_image_column'] = new Smarty_variable(false, null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_vendor_col"] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_type']=="A"&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>



    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="threads_list_form" id="threads_list_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>" id="threads_list_form">
            <?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['thread']->value['object_type']===(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)||$_smarty_tpl->tpl_vars['thread']->value['object_type']===(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
                        <?php $_smarty_tpl->tpl_vars['show_subject_image_column'] = new Smarty_variable(true, null, 0);?>
                    <?php }?>
                <?php } ?>

                <input type="hidden" name="communication_type" value="<?php echo htmlspecialchars($_REQUEST['communication_type'], ENT_QUOTES, 'UTF-8');?>
"/>
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_capture_stack[0][] = array("threads_list_table", null, null); ob_start(); ?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table width="100%" class="table table-middle table--relative table-responsive">
                            <thead
                                    data-ca-bulkedit-default-object="true"
                                    data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                    <th class="left" width="4%">
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                        <input type="checkbox"
                                               class="bulkedit-toggler hide"
                                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                        />
                                    </th>
                                <?php }?>
                                <th width="2%" class="status-label">&nbsp;</th>
                                <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                                    <th width="7%">&nbsp;</th>
                                <?php }?>
                                <th width="14%">
                                    <a class="cm-ajax"
                                       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                                        <?php echo $_smarty_tpl->__("id");?>

                                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="thread") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>

                                        <?php }?>
                                    </a>
                                </th>
                                <th width="30%"><?php echo $_smarty_tpl->__("message");?>
 / <?php echo $_smarty_tpl->__("subject");?>
</th>
                                <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type']==smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")) {?>
                                    <th width="19%">
                                        <a class="cm-ajax"
                                           href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                                            <?php echo $_smarty_tpl->__("customer");?>

                                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="name") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['c_icon']->value;?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>

                                            <?php }?>
                                        </a>
                                    </th>
                                <?php }?>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <th width="8%">&nbsp;</th>
                                <th width="15%">
                                    <a class="cm-ajax"
                                       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
                                        <?php echo $_smarty_tpl->__("date");?>

                                        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="last_updated") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;?>

                                        <?php }?>
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['thread_href'] = new Smarty_variable(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])."&communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type'])), null, 0);?>

                                <?php $_smarty_tpl->tpl_vars['has_new_message'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id']!=$_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']&&$_smarty_tpl->tpl_vars['thread']->value['user_status']==(defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null), null, 0);?>
                                <tr class="cm-longtap-target"
                                    data-ca-longtap-action="setCheckBox"
                                    data-ca-longtap-target="input.cm-item"
                                    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"
                                >
                                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['compnay_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                        <td class="left mobile-hide">
                                            <input type="checkbox" name="thread_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" />
                                        </td>
                                    <?php }?>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                                            <span class="status-new__label"></span>
                                        <?php }?>
                                    </td>
                                    <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                                        <td class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="&nbsp;">
                                            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                                        </td>
                                    <?php }?>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_href']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <bdi><?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id']));?>
</bdi>
                                        </a>
                                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                                    </td>
                                    <td class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("message");?>
 / <?php echo $_smarty_tpl->__("subject");?>
">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_href']->value, ENT_QUOTES, 'UTF-8');?>
" class="no-link vendor-communication__message" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['last_message'], ENT_QUOTES, 'UTF-8');?>
">
                                            <strong>
                                                <?php if ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                                    <?php echo $_smarty_tpl->__("vendor_communication.you");?>
:
                                                <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                                    <?php echo $_smarty_tpl->__("vendor_communication.admin");?>
:
                                                <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
:
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->__("customer");?>
:
                                                <?php }?>
                                            </strong>
                                            <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],200,"...",true), ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                        <div>
                                            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                                        </div>
                                    </td>
                                    <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type']==smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")) {?>
                                        <td class="<?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']=="A") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['thread']->value['customer_email']) {?><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['thread']->value['customer_email']), ENT_QUOTES, 'UTF-8');?>
">@</a><?php }?>
                                                <a href="<?php echo htmlspecialchars(fn_url("profiles.update&user_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                                </a>
                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        </td>
                                    <?php }?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <td class="right">
                                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_delete", null, null); ob_start(); ?>
                                                <li>
                                                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"vendor_communication.delete_thread?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])."&communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type']),'method'=>"POST"));?>

                                                </li>
                                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']=="A") {?>
                                                <?php echo Smarty::$_smarty_vars['capture']['tools_delete'];?>

                                            <?php }?>
                                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                        <div class="hidden-tools">
                                            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                        </div>
                                    </td>
                                    <td class="nowrap <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>status-new__text<?php }?>" data-th="<?php echo $_smarty_tpl->__("date");?>
">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_href']->value, ENT_QUOTES, 'UTF-8');?>
"  class="no-link">
                                            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"threads_list_form",'object'=>"vendor_communication_threads",'items'=>Smarty::$_smarty_vars['capture']['threads_list_table'],'is_check_all_shown'=>true,'communication_type'=>$_smarty_tpl->tpl_vars['communication_type']->value), 0);?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        </form>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_smarty_tpl->tpl_vars['communication_type']->value,'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_smarty_tpl->__("vendor_communication.message_center"), null, 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type']==smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_icon'=>"icon-plus",'but_role'=>"text",'but_meta'=>"btn btn-primary cm-dialog-opener"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"vendor_communication.threads",'period'=>$_smarty_tpl->tpl_vars['search']->value['period']), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'content_id'=>"manage_threads"), 0);?>

<?php }} ?>
