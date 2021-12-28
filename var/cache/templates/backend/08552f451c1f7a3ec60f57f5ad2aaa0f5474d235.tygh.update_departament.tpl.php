<?php /* Smarty version Smarty-3.1.21, created on 2021-12-28 13:02:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/update_departament.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15869892161c8ad906221d8-46249053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08552f451c1f7a3ec60f57f5ad2aaa0f5474d235' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/update_departament.tpl',
      1 => 1640685744,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15869892161c8ad906221d8-46249053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8ad90684d14_80404505',
  'variables' => 
  array (
    'departament_data' => 0,
    'id' => 0,
    'settings' => 0,
    'newsletter' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8ad90684d14_80404505')) {function content_61c8ad90684d14_80404505($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_notes')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.notes.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','image','description','creation_date','users','add_users','delete','banner_details_notes','departament.new_departament'));
?>
<?php if ($_smarty_tpl->tpl_vars['departament_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['departament_data']->value['departament_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="departaments_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="departament_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />


    <div id="content_general">
        <div class="control-group">
            <label for="elm_departament_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
            <input type="text" name="departament_data[departament]" id="elm_banner_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['departament_data']->value['departament'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" /></div>
        </div>

        <div class="control-group" id="banner_graphic">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"departament_main",'image_object_type'=>"departament",'image_pair'=>$_smarty_tpl->tpl_vars['departament_data']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0);?>

            </div>
        </div>

        <div class="control-group id="departament_text">
            <label class="control-label" for="elm_departament_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <textarea id="elm_departament_description" name="departament_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['departament_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_departament_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
            <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_departament_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"departament_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['departament_data']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"departament_data[status]",'id'=>"elm_banner_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['departament_data']->value,'hidden'=>false), 0);?>


        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("users");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_users"),'data_id'=>"return_users",'but_meta'=>"btn",'input_name'=>"newsletter_data[users]",'item_ids'=>$_smarty_tpl->tpl_vars['newsletter']->value['users'],'placement'=>"right"), 0);?>

            </div>
        </div>
    <!--content_general--></div>

    <div id="content_addons" class="hidden clearfix">
    <!--content_addons--></div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profiles.delete_departament?departament_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"departaments_form",'but_name'=>"dispatch[profiles.update_departament]"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profiles.update_departament]",'but_role'=>"submit-link",'but_target_form'=>"departaments_form",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->__("banner_details_notes",array("[layouts_href]"=>fn_url('block_manager.manage')));?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['departament_data']->value['departament'] : $_smarty_tpl->__("departament.new_departament"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>



<?php }} ?>
