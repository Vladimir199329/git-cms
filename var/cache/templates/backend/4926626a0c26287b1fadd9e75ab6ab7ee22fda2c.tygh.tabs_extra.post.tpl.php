<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115624987861c89800647091-03654151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4926626a0c26287b1fadd9e75ab6ab7ee22fda2c' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/hooks/products/tabs_extra.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '115624987861c89800647091-03654151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'selected_section' => 0,
    'hide_controls' => 0,
    'config' => 0,
    'bundles' => 0,
    'context_menu_id' => 0,
    'bundle' => 0,
    'return_url' => 0,
    'link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800685c62_49513749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800685c62_49513749')) {function content_61c89800685c62_49513749($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.add_new_bundle','product_bundles.add_new_bundle','product_bundles.add_new_bundle','edit','no_data'));
?>
<?php $_smarty_tpl->tpl_vars['hide_controls'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['product_data']->value['company_id'], null, 0);?>

<div id="content_product_bundles" class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_bundles") {?>hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
    <div class="clearfix">
        <div class="pull-right">
            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <div id="add_new_bundle">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/views/product_bundles/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'item'=>array("company_id"=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'])), 0);?>

                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_bundle",'text'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'link_text'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'title'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'act'=>"general"), 0);?>

        </div>
    </div><br>
    <?php }?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_bundle_form" class="form-horizontal form-edit cm-ajax" id="manage_product_bundles_form">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
            <?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp20=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['context_menu_id'] = new Smarty_variable("context_menu_".$_tmp20, null, 0);?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_bundles_table", null, null); ob_start(); ?>
                <div class="items-container" id="update_bundles_list">
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-objects table-responsive">
                            <thead
                                    data-ca-bulkedit-default-object="true"
                                    data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left" width="1%">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('elms_container'=>"#".((string)$_smarty_tpl->tpl_vars['context_menu_id']->value)), 0);?>


                                    <input type="checkbox"
                                           class="bulkedit-toggler hide"
                                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="1%"></th>
                                <th width="28%"></th>
                                <th width="50%"></th>
                                <th width="10%"></th>
                                <th width="12%"></th>
                            </tr>
                            </thead>
                            <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(rawurlencode(((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])."&selected_section=product_bundles"), null, 0);?>
                                
                                <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'],'id_prefix'=>"_pb_",'text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'status'=>$_smarty_tpl->tpl_vars['bundle']->value['status'],'hidden'=>false,'href'=>"product_bundles.update?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'object_id_name'=>"bundle_id",'table'=>"product_bundles",'href_delete'=>"product_bundles.delete?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'delete_target_id'=>"update_bundles_list",'header_text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'skip_delete'=>false,'no_table'=>true,'hide_for_vendor'=>false,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"1%",'checkbox_name'=>"bundle_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true), 0);?>

                            <?php } ?>
                        </table>
                    </div>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_product_bundles_form",'object'=>"product_bundles",'items'=>Smarty::$_smarty_vars['capture']['product_bundles_table']), 0);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_bundles_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_bundles_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_bundles_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
        <!--update_bundles_list--></div>
    </form>
    <!--content_product_bundles--></div><?php }} ?>
