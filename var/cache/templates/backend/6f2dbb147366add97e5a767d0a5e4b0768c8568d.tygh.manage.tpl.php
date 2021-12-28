<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_options/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27750611861c89800b70187-45840308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f2dbb147366add97e5a767d0a5e4b0768c8568d' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_options/manage.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '27750611861c89800b70187-45840308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable_search' => 0,
    'config' => 0,
    'object' => 0,
    'search' => 0,
    'is_global' => 0,
    'runtime' => 0,
    'product_data' => 0,
    'view_mode' => 0,
    'enable_add' => 0,
    'autofocus' => 0,
    'allow_add_option' => 0,
    'position' => 0,
    'extra' => 0,
    'product_id' => 0,
    'product_options' => 0,
    'has_permissions' => 0,
    'product_option_statuses' => 0,
    'has_available_options' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'product_option' => 0,
    'allow_save' => 0,
    'query_delete_product_id' => 0,
    'details' => 0,
    'hide_for_vendor' => 0,
    'status' => 0,
    'query_product_id' => 0,
    'href_delete' => 0,
    'delete_target_id' => 0,
    'additional_class' => 0,
    'link_text' => 0,
    'non_editable' => 0,
    'show_checkboxes' => 0,
    'select_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800c7ba34_66912013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800c7ba34_66912013')) {function content_61c89800c7ba34_66912013($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('create_or_link_an_existing_option','new_option','add_option','new_option','add_option','name','internal_option_name_tooltip','storefront_name','status','individual','edit','view','view','storefront_name','name','status','product_options_are_not_selectable_for_context_menu','no_data','options'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['enable_search']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/backend/products/products_update_options.js"),$_smarty_tpl);?>

<?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    function fn_check_option_type(value, tag_id)
    {
        var id = tag_id.replace('option_type_', '').replace('elm_', '');
        Tygh.$('#tab_option_variants_' + id).toggleBy(!(value == 'S' || value == 'R' || value == 'C'));
        Tygh.$('#required_options_' + id).toggleBy(!(value == 'I' || value == 'T' || value == 'F'));
        Tygh.$('#extra_options_' + id).toggleBy(!(value == 'I' || value == 'T'));
        Tygh.$('#file_options_' + id).toggleBy(!(value == 'F'));

        if (value == 'C') {
            var t = Tygh.$('table', '#content_tab_option_variants_' + id);
            Tygh.$('.cm-non-cb', t).switchAvailability(true); // hide obsolete columns
            Tygh.$('tbody:gt(1)', t).switchAvailability(true); // hide obsolete rows

        } else if (value == 'S' || value == 'R') {
            var t = Tygh.$('table', '#content_tab_option_variants_' + id);
            Tygh.$('.cm-non-cb', t).switchAvailability(false); // show all columns
            Tygh.$('tbody', t).switchAvailability(false); // show all rows
            Tygh.$('#box_add_variant_' + id).show(); // show "add new variants" box

        } else if (value == 'I' || value == 'T') {
            Tygh.$('#extra_options_' + id).show(); // show "add new variants" box
        }
    }
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_add_option'] = new Smarty_variable(fn_check_permissions("product_options","quick_add","admin","POST"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_global'] = new Smarty_variable($_smarty_tpl->tpl_vars['object']->value==="global", null, 0);?>
<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php if ($_smarty_tpl->tpl_vars['is_global']->value) {?>
        <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['delete_target_id'] = new Smarty_variable("pagination_contents", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_checkboxes'] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['delete_target_id'] = new Smarty_variable("product_options_list", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_checkboxes'] = new Smarty_variable(false, null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php if (!($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&(fn_allowed_for("MULTIVENDOR")||$_smarty_tpl->tpl_vars['product_data']->value['shared_product']=="Y")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']!=$_smarty_tpl->tpl_vars['product_data']->value['company_id'])) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("toolbar", null, null); ob_start(); ?>
            <div class="control-toolbar__btns-center">
                <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                    <?php if ($_smarty_tpl->tpl_vars['product_data']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/product_options/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option_id'=>"0",'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'disable_company_picker'=>true), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/product_options/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option_id'=>"0"), 0);?>

                    <?php }?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php if ($_smarty_tpl->tpl_vars['object']->value=="product") {?>
                    <?php $_smarty_tpl->tpl_vars['position'] = new Smarty_variable("pull-right", null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="embed"&&$_smarty_tpl->tpl_vars['enable_search']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['enable_add'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_add']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['object']->value=="product"&&fn_check_view_permissions("products.update")) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/product_options/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_id'=>"option_add",'input_name'=>"product_data[linked_option_ids][]",'multiple'=>true,'meta'=>"control-toolbar__select",'select_class'=>"cm-object-product-options-add",'autofocus'=>$_smarty_tpl->tpl_vars['autofocus']->value,'empty_variant_text'=>$_smarty_tpl->__("create_or_link_an_existing_option"),'allow_add'=>$_smarty_tpl->tpl_vars['enable_add']->value&&$_smarty_tpl->tpl_vars['allow_add_option']->value,'create_option_to_end'=>"true",'form'=>"form"), 0);?>

                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['view_mode']->value=="embed"&&!$_smarty_tpl->tpl_vars['enable_search']->value&&$_smarty_tpl->tpl_vars['allow_add_option']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_option",'text'=>$_smarty_tpl->__("new_option"),'link_text'=>$_smarty_tpl->__("add_option"),'act'=>"general",'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'meta'=>$_smarty_tpl->tpl_vars['position']->value,'icon'=>"icon-plus"), 0);?>


                <?php } elseif ($_smarty_tpl->tpl_vars['allow_add_option']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_option",'text'=>$_smarty_tpl->__("new_option"),'title'=>$_smarty_tpl->__("add_option"),'act'=>"general",'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'meta'=>$_smarty_tpl->tpl_vars['position']->value,'icon'=>"icon-plus"), 0);?>

                <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

        </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['object']->value!="global"&&$_smarty_tpl->tpl_vars['allow_add_option']->value) {?>
            <div class="control-toolbar cm-toggle-button">
                <div class="control-toolbar__btns">
                    <?php echo Smarty::$_smarty_vars['capture']['toolbar'];?>

                </div>
                <div class="control-toolbar__panel">
                    <div id="product_options_quick_add_option"
                        data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id="product_options_list"
                        data-ca-inline-dialog-action-context="products_update_options"
                        data-ca-inline-dialog-url="<?php echo htmlspecialchars(fn_url("product_options.quick_add"), ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
                <?php echo Smarty::$_smarty_vars['capture']['toolbar'];?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['product_option_statuses'] = new Smarty_variable(fn_get_default_statuses('',false), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['has_permissions'] = new Smarty_variable(fn_check_permissions("product_options","update","admin","POST"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['has_available_options'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['runtime']->value['company_id'])||in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['product_options']->value,'company_id')), null, 0);?>

        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_options_form" id="manage_product_options_form">
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->_capture_stack[0][] = array("product_options_table", null, null); ob_start(); ?>
                <div class="items-container <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" id="product_options_list">
                    <?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
                        <div class="table-responsive-wrapper longtap-selection">
                            <table width="100%" class="table table-middle table--relative table-objects table-responsive">
                                <?php if ($_smarty_tpl->tpl_vars['is_global']->value) {?>
                                    <thead
                                            data-ca-bulkedit-default-object="true"
                                            data-ca-bulkedit-component="defaultObject"
                                        >
                                        <tr>
                                            <th width="6%" class="left mobile-hide" >
                                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permissions']->value ? ($_smarty_tpl->tpl_vars['product_option_statuses']->value) : '','is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_options']->value), 0);?>


                                                <input type="checkbox"
                                                    class="bulkedit-toggler hide"
                                                    data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                                    data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                                />
                                            </th>
                                            <th>
                                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=internal_option_name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="internal_option_name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("internal_option_name_tooltip")), 0);?>
 /
                                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=option_name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("storefront_name");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="option_name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?>
                                            </th>
                                            <th></th>
                                            <th></th>
                                            <th class="pull-right">
                                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?>
                                            </th>
                                        </tr>
                                    </thead>
                                <?php }?>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['product_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->key => $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['object']->value=="product"&&$_smarty_tpl->tpl_vars['product_option']->value['product_id']) {?>
                                            <?php ob_start();
echo $_smarty_tpl->__("individual");
$_tmp28=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['details'] = new Smarty_variable("(".$_tmp28.")", null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['query_product_id'] = new Smarty_variable('', null, 0);?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->tpl_vars['details'] = new Smarty_variable('', null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['query_product_id'] = new Smarty_variable("&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['object']->value=="product") {?>
                                            <?php if (!$_smarty_tpl->tpl_vars['product_option']->value['product_id']) {?>
                                                <?php $_smarty_tpl->tpl_vars['query_product_id'] = new Smarty_variable("&object=".((string)$_smarty_tpl->tpl_vars['object']->value), null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['query_product_id'] = new Smarty_variable("&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&object=".((string)$_smarty_tpl->tpl_vars['object']->value), null, 0);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars['query_delete_product_id'] = new Smarty_variable("&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['product_data']->value,"products"), null, 0);?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->tpl_vars['query_product_id'] = new Smarty_variable('', null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['query_delete_product_id'] = new Smarty_variable('', null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['product_option']->value,"product_options"), null, 0);?>
                                        <?php }?>

                                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value&&($_smarty_tpl->tpl_vars['product_option']->value['company_id']||!$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
                                                <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['additional_class'] = new Smarty_variable("cm-no-hide-input cm-longtap-target", null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(false, null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['additional_class'] = new Smarty_variable("cm-longtap-target", null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(true, null, 0);?>
                                            <?php }?>
                                        <?php }?>

                                        <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_option']->value['status'], null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['href_delete'] = new Smarty_variable("product_options.delete?option_id=".((string)$_smarty_tpl->tpl_vars['product_option']->value['option_id']).((string)$_smarty_tpl->tpl_vars['query_delete_product_id']->value), null, 0);?>

                                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                                            <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(false, null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&(($_smarty_tpl->tpl_vars['product_data']->value['shared_product']=="Y"&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']!=$_smarty_tpl->tpl_vars['product_data']->value['company_id'])||($_smarty_tpl->tpl_vars['object']->value=="global"&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']!=$_smarty_tpl->tpl_vars['product_option']->value['company_id']))) {?>
                                                <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['href_delete'] = new Smarty_variable(false, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['is_view_link'] = new Smarty_variable(true, null, 0);?>
                                            <?php }?>
                                        <?php }?>

                                        <?php $_smarty_tpl->tpl_vars['option_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_option']->value['option_name'], null, 0);?>

                                        <?php ob_start();
echo $_smarty_tpl->__("storefront_name");
$_tmp29=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("name");
$_tmp30=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("status");
$_tmp31=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("product_options_are_not_selectable_for_context_menu");
$_tmp32=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_table'=>true,'no_padding'=>true,'id'=>$_smarty_tpl->tpl_vars['product_option']->value['option_id'],'id_prefix'=>"_product_option_",'details'=>$_smarty_tpl->tpl_vars['details']->value,'text'=>$_smarty_tpl->tpl_vars['product_option']->value['internal_option_name'],'href_desc'=>"<br />".((string)$_smarty_tpl->tpl_vars['product_option']->value['option_name']),'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'table'=>"product_options",'object_id_name'=>"option_id",'href'=>"product_options.update?option_id=".((string)$_smarty_tpl->tpl_vars['product_option']->value['option_id']).((string)$_smarty_tpl->tpl_vars['query_product_id']->value),'href_delete'=>$_smarty_tpl->tpl_vars['href_delete']->value,'delete_target_id'=>$_smarty_tpl->tpl_vars['delete_target_id']->value,'header_text'=>$_smarty_tpl->tpl_vars['product_option']->value['option_name'],'skip_delete'=>!$_smarty_tpl->tpl_vars['allow_save']->value,'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value,'prefix'=>"product_options",'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'non_editable'=>$_smarty_tpl->tpl_vars['non_editable']->value,'company_object'=>$_smarty_tpl->tpl_vars['product_option']->value,'href_desc_row_hint'=>$_tmp29." / ".$_tmp30,'status_row_hint'=>$_tmp31,'checkbox_name'=>"option_ids[]",'show_checkboxes'=>$_smarty_tpl->tpl_vars['show_checkboxes']->value,'hidden_checkbox'=>true,'checkbox_col_width'=>"6%",'is_bulkedit_menu'=>($_smarty_tpl->tpl_vars['is_global']->value&&$_smarty_tpl->tpl_vars['has_permissions']->value),'bulkedit_disabled_notice'=>$_smarty_tpl->tpl_vars['non_editable']->value ? $_tmp32 : '','link_meta'=>"bulkedit-deselect"), 0);?>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } else { ?>
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    <?php }?>
                <!--product_options_list--></div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"manage_product_options_form",'object'=>"product_options",'items'=>Smarty::$_smarty_vars['capture']['product_options_table'],'has_permissions'=>$_smarty_tpl->tpl_vars['is_global']->value&&$_smarty_tpl->tpl_vars['has_permissions']->value), 0);?>

        </form>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['object']->value=="product") {?>
    <?php echo Smarty::$_smarty_vars['capture']['mainbox'];?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("options"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_language'=>$_smarty_tpl->tpl_vars['select_language']->value), 0);?>

<?php }?>
<?php }} ?>
