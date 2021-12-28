<?php /* Smarty version Smarty-3.1.21, created on 2021-12-27 11:41:25
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/views/product_bundles/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141091587261c97c35b60c55-39758720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb5dd9ab5eadefa2765373d068f68203debe71c' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/views/product_bundles/manage.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141091587261c97c35b60c55-39758720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'bundles' => 0,
    'context_menu_id' => 0,
    'bundle' => 0,
    'hide_controls' => 0,
    'item' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c97c35bbcf55_49093521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c97c35bbcf55_49093521')) {function content_61c97c35bbcf55_49093521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_count')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.product_bundle_name','product_bundles.internal_feature_name_tooltip','storefront_name','product_bundles.products_in_bundle','no_data','product_bundles.new_bundle','product_bundles.add_new_bundle','product_bundles.product_bundles'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_bundles_form" class="form-horizontal form-edit cm-ajax" id="manage_product_bundles_form">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <div id="update_bundles_list">
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
            <?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['context_menu_id'] = new Smarty_variable("context_menu_".$_tmp1, null, 0);?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_bundles_table", null, null); ob_start(); ?>
                <div class="items-container">
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
                                <th width="28%"><?php echo $_smarty_tpl->__("product_bundles.product_bundle_name");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("product_bundles.internal_feature_name_tooltip")), 0);?>
 / <?php echo $_smarty_tpl->__("storefront_name");?>
</th>
                                <th width="50%"></th>
                                <th width="10%"><?php echo $_smarty_tpl->__("product_bundles.products_in_bundle");?>
</th>
                                <th width="12%"></th>
                            </tr>
                            </thead>
                            <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array("extra_data", null, null); ob_start(); ?>
                                    <?php if ($_smarty_tpl->tpl_vars['bundle']->value['products']) {?>
                                        <td><a href="<?php echo htmlspecialchars(fn_url("products.manage&pid=".((string)$_smarty_tpl->tpl_vars['bundle']->value['product_ids'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products']), ENT_QUOTES, 'UTF-8');?>
</a></td>
                                    <?php } else { ?>
                                        <td><?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products']), ENT_QUOTES, 'UTF-8');?>
</td>
                                    <?php }?>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'],'id_prefix'=>"_pb_",'text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'status'=>$_smarty_tpl->tpl_vars['bundle']->value['status'],'hidden'=>false,'href'=>"product_bundles.update?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])),'object_id_name'=>"bundle_id",'table'=>"product_bundles",'href_delete'=>"product_bundles.delete?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])),'delete_target_id'=>"update_bundles_list",'header_text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'skip_delete'=>false,'no_table'=>true,'hide_for_vendor'=>false,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"1%",'checkbox_name'=>"bundle_ids[]",'show_checkboxes'=>!$_smarty_tpl->tpl_vars['hide_controls']->value,'hidden_checkbox'=>true,'extra_data'=>Smarty::$_smarty_vars['capture']['extra_data'],'company_object'=>array("company_id"=>$_smarty_tpl->tpl_vars['bundle']->value['company_id']),'storefront_name'=>$_smarty_tpl->tpl_vars['bundle']->value['storefront_name']), 0);?>

                            <?php } ?>
                        </table>
                    </div>
                    </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_product_bundles_form",'object'=>"product_bundles",'items'=>Smarty::$_smarty_vars['capture']['product_bundles_table']), 0);?>


        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
            <div class="clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <!--update_bundles_list--></div>
    </form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/views/product_bundles/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'hide_for_vendor'=>false), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_bundles",'text'=>$_smarty_tpl->__("product_bundles.new_bundle"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/views/product_bundles/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("product_bundles.product_bundles"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_storefront'=>fn_allowed_for("ULTIMATE"),'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0);?>
<?php }} ?>
