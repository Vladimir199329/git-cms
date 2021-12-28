<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:46
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114387742161c89802275b39-10874624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d38a2509eea2a39952a94d4f40184adf9ca9c76' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/block_manager/render/block.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '114387742161c89802275b39-10874624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_data' => 0,
    'dynamic_object' => 0,
    'status' => 0,
    'action' => 0,
    'location' => 0,
    'default_class' => 0,
    'external_render' => 0,
    'external_id' => 0,
    'show_for_location' => 0,
    'parent_grid' => 0,
    'link_text_icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898022f9843_95495331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898022f9843_95495331')) {function content_61c898022f9843_95495331($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/vladimir/public_html/site.devel/git-cms/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('disable','enable','bm_confirm','block_options','enable_or_disable_block','block_settings','delete_block','editing_block','block_options','delete_block','on_off','select_block'));
?>
<?php if ($_smarty_tpl->tpl_vars['block_data']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['block_data']->value['status']) {?>
        <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['block_data']->value['status'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable("A", null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value&&$_smarty_tpl->tpl_vars['block_data']->value['items_count']>0) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("confirm_message", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['status']->value=="A") {?>
                <?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable(mb_strtolower($_smarty_tpl->__("disable"), 'UTF-8'), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable(mb_strtolower($_smarty_tpl->__("enable"), 'UTF-8'), null, 0);?>
            <?php }?>
            <span class="confirm-message hidden">
                <?php echo $_smarty_tpl->__("bm_confirm",array("[action]"=>$_smarty_tpl->tpl_vars['action']->value,"[location_name]"=>$_smarty_tpl->tpl_vars['location']->value['name']));?>

            </span>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>

    <div class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['default_class']->value)===null||$tmp==='' ? "device-specific-block block" : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['status']->value!="A") {?>block-off<?php }?> <?php if ($_smarty_tpl->tpl_vars['external_render']->value) {?>bm-external-render<?php }?>"
         data-ca-status="<?php if ($_smarty_tpl->tpl_vars['status']->value!="A") {?>disabled<?php } else { ?>active<?php }?>"
         data-block-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"
         data-ca-block-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
         <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['block_data']->value), 0);?>

         id="snapping_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['external_render']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_id']->value, ENT_QUOTES, 'UTF-8');
}?>"
    >
        <div class="block-header" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['block_data']->value), 0);?>

            <div class="block-header-icon <?php if ($_smarty_tpl->tpl_vars['block_data']->value['type']) {?>bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block_data']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');
}?>"></div>
            <div class="block-header__name">
                <div class="block-header-title <?php if ($_smarty_tpl->tpl_vars['show_for_location']->value&&$_smarty_tpl->tpl_vars['block_data']->value['location']!=$_smarty_tpl->tpl_vars['show_for_location']->value) {?>fixed-block<?php }?>">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </div>
                <div class="block-header__secondary muted">
                    <small data-ca-block-manager="block_id">
                        #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>

                    </small>
                </div>
            </div>
        </div>

        <div class="bm-full-menu block-control-menu bm-control-menu <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']<=2&&!$_smarty_tpl->tpl_vars['external_render']->value) {?>hidden keep-hidden<?php }?>">
            <?php if (!$_smarty_tpl->tpl_vars['external_render']->value) {?>
                
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['block_data']->value['is_manageable'])===null||$tmp==='' ? true : $tmp)) {?>
                    <div class="cm-tooltip cm-action icon-cog bm-action-properties action" title="<?php echo $_smarty_tpl->__("block_options");?>
"></div>
                <?php }?>
                <div class="cm-tooltip cm-action icon-off bm-action-switch<?php if ($_smarty_tpl->tpl_vars['status']->value!="A") {?> switch-off<?php }
if ($_smarty_tpl->tpl_vars['dynamic_object']->value) {?> bm-dynamic-object<?php }
if (!$_smarty_tpl->tpl_vars['dynamic_object']->value&&$_smarty_tpl->tpl_vars['block_data']->value['items_count']>0) {?> bm-confirm<?php }?> action" title="<?php echo $_smarty_tpl->__("enable_or_disable_block");?>
"<?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value) {?>data-ca-bm-object-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo Smarty::$_smarty_vars['capture']['confirm_message'];?>
</div>

            <?php } else { ?>
                <input type="hidden" name="block_data[block_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" id="ajax_update_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-cog",'assign'=>'link_text_icon'),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"edit_block_properties_".((string)$_smarty_tpl->tpl_vars['block_data']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['external_id']->value),'text'=>$_smarty_tpl->__("block_settings"),'link_text'=>$_smarty_tpl->tpl_vars['link_text_icon']->value,'act'=>"link",'href'=>"block_manager.update_block?block_data[block_id]=".((string)$_smarty_tpl->tpl_vars['block_data']->value['block_id'])."&ajax_update=1&html_id=".((string)$_smarty_tpl->tpl_vars['external_id']->value)."&force_close=1",'opener_ajax_class'=>"cm-ajax cm-ajax-force cm",'link_class'=>"action-properties bm-action-properties",'content'=>''), 0);?>

            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value&&!$_smarty_tpl->tpl_vars['external_render']->value) {?>
                <div class="cm-tooltip cm-action icon-trash pull-right bm-action-delete extra action <?php if ($_smarty_tpl->tpl_vars['block_data']->value['single_for_location']) {?>bm-block-single-for-location<?php }?>" title="<?php echo $_smarty_tpl->__("delete_block");?>
"></div>
            <?php }?>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['external_render']->value) {?>
        <div class="bm-compact-menu block-control-menu bm-control-menu <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>2) {?>hidden keep-hidden<?php }?>">
            <div class="action-showmenu action-control-menu">
                <div class="btn-group action">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='icon-align-justify cm-tooltip' title="<?php echo $_smarty_tpl->__("editing_block");?>
"></span></a>
                    <ul class="dropdown-menu droptop">
                        <?php if ($_smarty_tpl->tpl_vars['block_data']->value['is_manageable']) {?>
                            <li><a class="cm-action bm-action-properties"><?php echo $_smarty_tpl->__("block_options");?>
</a></li>
                            <li><a class="cm-action bm-action-delete extra"><?php echo $_smarty_tpl->__("delete_block");?>
</a></li>
                        <?php }?>
                        <li><a class="cm-action bm-action-switch <?php if ($_smarty_tpl->tpl_vars['status']->value!="A") {?>switch-off<?php }?>"><?php echo $_smarty_tpl->__("on_off");?>
<span class="action-switch"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php }?>

        <a class="cm-select-bm-block hidden" data-block-uid="<?php echo htmlspecialchars(fn_encrypt_text(((string)$_smarty_tpl->tpl_vars['block_data']->value['block_id']).":".((string)$_smarty_tpl->tpl_vars['block_data']->value['snapping_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-block-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><div class="text-center"><?php echo $_smarty_tpl->__("select_block");?>
</div></a>
<!--snapping_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['external_render']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block_data']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_id']->value, ENT_QUOTES, 'UTF-8');
}?>--></div>
<?php }?>
<?php }} ?>
