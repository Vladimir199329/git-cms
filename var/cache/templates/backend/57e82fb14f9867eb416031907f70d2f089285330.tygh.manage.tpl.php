<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 20:52:13
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36543952761c897f6981014-55616970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e82fb14f9867eb416031907f70d2f089285330' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/manage.tpl',
      1 => 1640541130,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36543952761c897f6981014-55616970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897f6b38c53_52104389',
  'variables' => 
  array (
    'delete_redirect_url' => 0,
    'config' => 0,
    'search' => 0,
    'runtime' => 0,
    'products' => 0,
    'settings' => 0,
    'show_list_price_column' => 0,
    'product_add_button_as_dropdown' => 0,
    'has_available_products' => 0,
    'has_select_permission' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'product' => 0,
    'hide_inputs_if_shared_product' => 0,
    'is_use_context_menu' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'no_hide_input_if_shared_product' => 0,
    'show_update_for_all' => 0,
    'import_product_href' => 0,
    'has_permission_an_import' => 0,
    'allow_create_product' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897f6b38c53_52104389')) {function content_61c897f6b38c53_52104389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_to_json')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','price','list_price','purchased_qty','subtotal_sum','quantity','status','products_are_not_selectable_for_context_menu','name','price','list_price','purchased_qty','subtotal_sum','quantity','edit','delete','status','no_data','text_select_fields2edit_note','cancel','modify_selected','clone_selected','export_selected','global_update','bulk_product_addition','product_subscriptions','export_found_products','import_products','create_new_product','add_product','select_fields_to_edit','products'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/products_manage.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/products_bulk_edit.js"),$_smarty_tpl);?>

<?php ob_start();?><?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['delete_redirect_url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['delete_redirect_url']->value)===null||$tmp==='' ? $_tmp1 : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_products_form" id="manage_products_form" data-ca-main-content-selector="[data-ca-main-content]">
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cid'], ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['has_available_products'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['runtime']->value['company_id'])||in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['products']->value,'company_id')), null, 0);?>
<?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_list_price_column'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_list_price_column']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['product_add_button_as_dropdown'] = new Smarty_variable((($tmp = @($_smarty_tpl->tpl_vars['product_add_button_as_dropdown']->value||(fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])))===null||$tmp==='' ? false : $tmp), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("products_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%"  class="table table-middle table--relative table-responsive products-table" data-ca-main-content>
            <thead data-ca-bulkedit-default-object="true" data-target=".products-table" data-ca-bulkedit-component="defaultObject">
            <tr>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_head")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_head"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <th class="left mobile-hide table__check-items-column<?php if (!$_smarty_tpl->tpl_vars['has_available_products']->value) {?> table__check-items-column--disabled<?php }?>">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>fn_get_default_status_filters('',true),'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_select_permission']->value,'meta'=>"table__check-items"), 0);?>


                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th></th>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['cid']&&$_smarty_tpl->tpl_vars['search']->value['subcats']!=="Y") {?>
                <th class="nowrap"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=position&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("position_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="position") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php }?>
                <th><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="product") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a> </th>
                <th width="13%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php if ($_smarty_tpl->tpl_vars['show_list_price_column']->value) {?>
                <th width="12%" class="mobile-hide"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=list_price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("list_price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="list_price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['order_ids']) {?>
                <th width="9%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=p_qty&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("purchased_qty");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="p_qty") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="9%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=p_subtotal&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("subtotal_sum");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="p_subtotal") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php }?>
                <th width="9%" class="nowrap"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("quantity");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="amount") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_head"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <th width="9%" class="mobile-hide">&nbsp;</th>
                <th width="9%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_table_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_table_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


            <?php $_smarty_tpl->tpl_vars['is_use_context_menu'] = new Smarty_variable(true, null, 0);?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product']->value['is_shared_product']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['company_id']!=$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    <?php $_smarty_tpl->tpl_vars["hide_inputs_if_shared_product"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["no_hide_input_if_shared_product"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["hide_inputs_if_shared_product"] = new Smarty_variable('', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["no_hide_input_if_shared_product"] = new Smarty_variable('', null, 0);?>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product']->value['is_shared_product']=="Y") {?>
                    <?php $_smarty_tpl->tpl_vars["show_update_for_all"] = new Smarty_variable(true, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["show_update_for_all"] = new Smarty_variable(false, null, 0);?>
                <?php }?>

                <?php $_smarty_tpl->tpl_vars['is_use_context_menu'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||(intval($_smarty_tpl->tpl_vars['product']->value['company_id'])===intval($_smarty_tpl->tpl_vars['runtime']->value['company_id'])), null, 0);?>
            <?php }?>

            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['is_use_context_menu']->value) {?>longtap-selection-disable<?php }?>"
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-category-ids="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['product']->value['category_ids']), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['is_use_context_menu']->value) {?>data-ca-bulkedit-disabled-notice="<?php echo $_smarty_tpl->__("products_are_not_selectable_for_context_menu");?>
"<?php }?>
                >
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <td class="left mobile-hide table__check-items-cell">
                    <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                    <td class="products-list__image">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),'image_css_class'=>"products-list__image--img",'link_css_class'=>"products-list__image--link"), 0);?>

                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['cid']&&$_smarty_tpl->tpl_vars['search']->value['subcats']!="Y") {?>
                    <td class="<?php if ($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');
}?>">
                        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro" /></td>
                    <?php }?>
                    <td class="product-name-column wrap-word" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value) {?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                        <a class="row-status" href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                        <div class="product-list__labels">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <div class="product-code">
                                    <span class="product-code__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                    </td>
                    <td width="13%" class="<?php if ($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');
}?> products-list__list-price" data-th="<?php echo $_smarty_tpl->__("price");?>
">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:list_price")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:list_price"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"update_all_vendors[price][".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'component'=>"products.price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), 0);?>


                            <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" size="6" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden cm-numeric" data-a-sep/>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:list_price"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['show_list_price_column']->value) {?>
                    <td width="12%" class="mobile-hide" data-th="<?php echo $_smarty_tpl->__("list_price");?>
">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:list_list_price")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:list_list_price"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][list_price]" size="6" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['list_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden cm-numeric" data-a-sep />
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:list_list_price"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </td>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['order_ids']) {?>
                    <td width="9%" data-th="<?php echo $_smarty_tpl->__("purchased_qty");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['purchased_qty'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td width="9%" data-th="<?php echo $_smarty_tpl->__("subtotal_sum");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['purchased_subtotal'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <?php }?>
                    <td width="9%" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:list_quantity")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:list_quantity"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="6" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['inventory_amount'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden" />
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:list_quantity"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </td>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <td width="9%" class="nowrap mobile-hide">
                        <div class="hidden-tools">
                            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>
</li>
                                    <?php if (!$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value) {?>
                                        <li><?php ob_start();
if ($_smarty_tpl->tpl_vars['delete_redirect_url']->value) {?><?php echo "&redirect_url=";?><?php echo (string)$_smarty_tpl->tpl_vars['delete_redirect_url']->value;?><?php }
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"products.delete?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_tmp2,'method'=>"POST"));?>

                                        </li>
                                    <?php }?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                        </div>
                    </td>
                    <td width="9%" class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/status_on_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'status'=>$_smarty_tpl->tpl_vars['product']->value['status'],'hidden'=>true,'object_id_name'=>"product_id",'table'=>"products",'non_editable_status'=>!fn_check_permissions("tools","update_status","admin","POST",array("table"=>"products"))), 0);?>

                    </td>
                </tr>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_table_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>
            </tbody>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"manage_products_form",'object'=>"products",'items'=>Smarty::$_smarty_vars['capture']['products_table']), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("select_fields_to_edit", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("components/easter_egg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p><?php echo $_smarty_tpl->__("text_select_fields2edit_note");?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_select_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="buttons-container">
    <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn bulkedit-unchanged"><?php echo $_smarty_tpl->__("cancel");?>
</a>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("modify_selected"),'but_role'=>"submit",'but_name'=>"dispatch[products.store_selection]",'but_meta'=>"btn-primary"), 0);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:action_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:action_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="bulkedit-action--legacy hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>
</li>
        <li class="bulkedit-action--legacy hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range]",'form'=>"manage_products_form"));?>
</li>
        <li class="bulkedit-action--legacy hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>
</li>
        <li class="divider bulkedit-action--legacy hide"></li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("global_update"),'href'=>"products.global_update"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_product_addition"),'href'=>"products.m_add"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("product_subscriptions"),'href'=>"products.p_subscr"));?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_found_products"),'href'=>"products.export_found"));?>
</li>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:action_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.m_update]",'but_role'=>"action",'but_target_form'=>"manage_products_form",'but_meta'=>"cm-submit"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->tpl_vars['import_product_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['import_product_href']->value)===null||$tmp==='' ? "exim.import&section=products" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['has_permission_an_import'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['has_permission_an_import']->value)===null||$tmp==='' ? fn_check_permissions("exim","import","admin","POST") : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['allow_create_product'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_create_product']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list_items", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:tools_list_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:tools_list_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['has_permission_an_import']->value) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("import_products"),'href'=>((string)$_smarty_tpl->tpl_vars['import_product_href']->value)));?>
</li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:tools_list_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php if ($_smarty_tpl->tpl_vars['product_add_button_as_dropdown']->value&&trim(Smarty::$_smarty_vars['capture']['tools_list_items'])) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("dropdown_list", null, null); ob_start(); ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:tools_list_before_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:tools_list_before_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:tools_list_before_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['allow_create_product']->value) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("create_new_product"),'href'=>"products.add"));?>
</li>
                <?php }?>
                <?php echo Smarty::$_smarty_vars['capture']['tools_list_items'];?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['dropdown_list'],'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"));?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_add_button")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_add_button"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"products.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_product"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_add_button"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"select_fields_to_edit",'text'=>$_smarty_tpl->__("select_fields_to_edit"),'content'=>Smarty::$_smarty_vars['capture']['select_fields_to_edit']), 0);?>


<div class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>

</div>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>(($tmp = @$_smarty_tpl->tpl_vars['dispatch']->value)===null||$tmp==='' ? "products.manage" : $tmp),'view_type'=>"products"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>(($tmp = @$_smarty_tpl->tpl_vars['dispatch']->value)===null||$tmp==='' ? "products.manage" : $tmp)), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_mainbox_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_mainbox_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->__("products");?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_mainbox_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content_id'=>"manage_products"), 0);?>

<?php }} ?>
