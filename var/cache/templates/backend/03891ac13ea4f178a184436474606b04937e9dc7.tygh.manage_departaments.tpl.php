<?php /* Smarty version Smarty-3.1.21, created on 2021-12-28 14:32:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/manage_departaments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101736025661c7445966ac01-60413046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03891ac13ea4f178a184436474606b04937e9dc7' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/manage_departaments.tpl',
      1 => 1640691151,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101736025661c7445966ac01-60413046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c74459725308_55076178',
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'departaments' => 0,
    'has_permission' => 0,
    'departament_statuses' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'departament' => 0,
    'allow_save' => 0,
    'settings' => 0,
    'departament_data' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'no_hide_input' => 0,
    'page_title' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c74459725308_55076178')) {function content_61c74459725308_55076178($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','description','creation_date','status','name','creation_date','edit','delete','status','no_data','add_departament','departaments'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="departaments_form" name="departaments_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_departament"), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents_departament" : $tmp), null, 0);?>
<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['departament_statuses'] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("departament","update_status","admin","POST"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['departaments']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("departament_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
            <tr>
                <th width="6%" class="left mobile-hide">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission']->value,'check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['departament_statuses']->value : ''), 0);?>


                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th  width="6%"></th>
                <th  width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" 
                data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                </th>
                <th width="15%"><?php echo $_smarty_tpl->__("description");?>
</th></a>

                <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" 
                data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("creation_date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="timestamp") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                </th>

            
                <th width="6%" class="mobile-hide">&nbsp;</th>
                <th width="10%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" 
                data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                </th>
            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['departament'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['departament']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departaments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['departament']->key => $_smarty_tpl->tpl_vars['departament']->value) {
$_smarty_tpl->tpl_vars['departament']->_loop = true;
?>
            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['departament']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['departament']->value['departament_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(true, null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable('', null, 0);?>
                <?php }?>
                
                <?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'], null, 0);?>

                <td width="6%" class="left mobile-hide">
                <td class="products-list__image">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['departament']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['departament_data']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['departament_data']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'href'=>fn_url("profiles.update_departament?departament_id=".((string)$_smarty_tpl->tpl_vars['departament']->value['departament_id'])),'image_css_class'=>"products-list__image--img",'link_css_class'=>"products-list__image--link"), 0);?>

                </td>
                    <input type="checkbox" name="departament_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['departament']->value['departament_id'], ENT_QUOTES, 'UTF-8');?>
" 
                    class="cm-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 
                    cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['departament']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                </td>
                
                <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("profiles.update_departament?departament_id=".((string)$_smarty_tpl->tpl_vars['departament']->value['departament_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['departament']->value['departament'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['departament']->value), 0);?>

                </td>
                <td width="15%">
                   <text class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['departament']->value['description'], ENT_QUOTES, 'UTF-8');?>
</text>
                </td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("creation_date");?>
">
                    <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['departament']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                </td>

                

                <td width="6%" class="mobile-hide">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"profiles.update_departament?departament_id=".((string)$_smarty_tpl->tpl_vars['departament']->value['departament_id'])));?>

                        </li>
                    <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"profiles.delete?departament_id=".((string)$_smarty_tpl->tpl_vars['departament']->value['departament_id']),'method'=>"POST"));?>
</li>
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
                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['departament']->value['departament_id'],'status'=>$_smarty_tpl->tpl_vars['departament']->value['status'],'hidden'=>false,'object_id_name'=>"departament_id",'table'=>"departaments",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value)." dropleft"), 0);?>

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

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"departaments_form",'object'=>"departaments",'items'=>Smarty::$_smarty_vars['capture']['departament_table'],'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_departaments"), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
   
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"profiles.add_departament",'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_departament"),'icon'=>"icon-plus"), 0);?>

  
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</form>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:manage_mainbox_params")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:manage_mainbox_params"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("departaments"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable(true, null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:manage_mainbox_params"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>$_smarty_tpl->tpl_vars['select_languages']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>



<?php }} ?>
