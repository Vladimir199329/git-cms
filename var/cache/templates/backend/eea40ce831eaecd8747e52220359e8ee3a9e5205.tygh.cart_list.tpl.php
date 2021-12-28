<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:15
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/cart/cart_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109729818261c8c73bef7cf7-11534970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea40ce831eaecd8747e52220359e8ee3a9e5205' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/cart/cart_list.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109729818261c8c73bef7cf7-11534970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'carts_list' => 0,
    'has_permission_update' => 0,
    'search' => 0,
    'c_url' => 0,
    'customer' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'settings' => 0,
    'current_redirect_url' => 0,
    'delete_url' => 0,
    'user_js_id' => 0,
    'user_info_js_id' => 0,
    'user_data' => 0,
    'cart_products_js_id' => 0,
    'sl_user_id' => 0,
    'cart_products' => 0,
    'product' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c73c2153b2_04257769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c73c2153b2_04257769')) {function content_61c8c73c2153b2_04257769($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','customer','date','cart','total','customer','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','unregistered_customer_short','date','cart','n_products','order','tools','delete','add_as_order','add_as_order','total','user_info','email','phone','first_name','last_name','ip_address','billing_address','billing_shipping_address','first_name','last_name','phone','address','address_2','city','state','country','zip_postal_code','shipping_address','first_name','last_name','phone','address','address_2','city','state','country','zip_postal_code','user_info','customer','unregistered_customer_short','email','phone','first_name','last_name','ip_address','product','quantity','price','product','deleted_product','quantity','price','total','total','quantity','subtotal','no_data','users_carts'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="" name="carts_list_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_url'=>true), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_permission_update'] = new Smarty_variable(fn_check_permissions("cart","delete","admin","POST"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['carts_list']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("carts_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-sort table-middle table--relative table-responsive table--cart">
            <thead
                data-ca-bulkedit-default-object="true" 
                data-ca-bulkedit-component="defaultObject"
            >
                <tr>
                    <th width="6%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_check_all_shown'=>true,'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission_update']->value), 0);?>


                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="45%">
                        <div class="btn-expand-wrapper">
                            <span id="off_carts" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hidden hand cm-combinations-carts btn-expand btn-expand--header"/><span class="icon-caret-down"></span></span>
                            <span id="on_carts" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="cm-combinations-carts btn-expand btn-expand--header"><span class="icon-caret-right"></span></span>
                        </div>
                        <a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a>
                    </th>
                    <th width="15%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="date") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a></th>
                    <th width="15%"><?php echo $_smarty_tpl->__("cart");?>
</th>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:items_list_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:items_list_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:items_list_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <th width="8%" class="mobile-hide">&nbsp;</th>
                    <th width="8%" class="right"><?php echo $_smarty_tpl->__("total");?>
</th>
                </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carts_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->key => $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->_loop = true;
?>
            <tr 
                <?php if ($_smarty_tpl->tpl_vars['has_permission_update']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars(!fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['customer']->value['storefront_id'] ? ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) : ($_smarty_tpl->tpl_vars['customer']->value['user_id']), ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <td width="6%" class="left mobile-hide">
                    <?php if (fn_allowed_for("ULTIMATE")) {?>
                        <input type="checkbox" name="user_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" /></td>
                    <?php }?>
                    <?php if (!fn_allowed_for("ULTIMATE")) {?>
                        <input type="checkbox" name="user_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" /></td>
                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                            <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['storefront_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
                        <?php }?>
                    <?php }?>
                <td width="45%" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                    <div class="cart__customer">
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts btn-expand" onclick="Tygh.$.ceAjax('request', '<?php echo fn_url("cart.cart_list?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&c_company_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'cart_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
,wishlist_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"><span class="icon-caret-right"></span></a>
                            <a href="#" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-combination-carts btn-expand"><span class="icon-caret-down"></span></a>
                        <?php }?>

                        <?php if (!fn_allowed_for("ULTIMATE")) {?>
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                                <a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts btn-expand" onclick="Tygh.$.ceAjax('request', '<?php echo fn_url("cart.cart_list?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&storefront_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['storefront_id']));?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'cart_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
,wishlist_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"><span class="icon-caret-right"></span></a>
                            <?php } else { ?>
                                <a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts btn-expand" onclick="Tygh.$.ceAjax('request', '<?php echo fn_url("cart.cart_list?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']));?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'cart_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
,wishlist_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"><span class="icon-caret-right"></span></a>
                            <?php }?>
                            <a href="#" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-combination-carts btn-expand"><span class="icon-caret-down"></span></a>
                        <?php }?>

                        <div class="cart__customer-data-wrapper">
                            <div class="cart__customer-data">
                                <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_data']['email']) {?>
                                    <a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['customer']->value['user_data']['email']), ENT_QUOTES, 'UTF-8');?>
" class="cart__customer-email">@</a>
                                    <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_data']['user_id']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                        <span class="cart__customer-name">
                                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['firstname']||$_smarty_tpl->tpl_vars['customer']->value['lastname']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_data']['email'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        </span>
                                    <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_data']['user_id']) {?></a><?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['customer']->value['email']) {?><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['customer']->value['email']), ENT_QUOTES, 'UTF-8');?>
" class="cart__customer-email">@</a><?php }?>
                                    <span class="cart__customer-name">
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['lastname']||$_smarty_tpl->tpl_vars['customer']->value['firstname']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->__("unregistered_customer_short");?>

                                        <?php }?>
                                    </span>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_data']['s_state_descr']||$_smarty_tpl->tpl_vars['customer']->value['user_data']['s_country']) {?>
                                    <span class="muted"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['customer']->value['user_data']['s_state_descr'],25,"...",true), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['customer']->value['user_data']['s_state_descr']) {?>, <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['user_data']['s_country'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } else { ?>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['phone']) {?>
                                <div class="cart__customer-phone">
                                    <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
                                </div>
                            <?php }?>

                            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['customer']->value), 0);?>


                        </div>
                    </div>
                </td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("date");?>
">
                    <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['customer']->value['date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                </td>
                <td width="15%" data-th="<?php echo $_smarty_tpl->__("cart");?>
">
                    <?php echo $_smarty_tpl->__("n_products",array((($tmp = @$_smarty_tpl->tpl_vars['customer']->value['cart_products'])===null||$tmp==='' ? "0" : $tmp)));?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:cart_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:cart_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['order_id']) {?>
                        <div><small><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order");?>
 <bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi></a></small></div>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:cart_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </td>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:items_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:items_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:items_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <td width="8%" class="center" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if (fn_check_view_permissions("cart.delete")) {?>
                                <?php $_smarty_tpl->tpl_vars['current_redirect_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                                    <?php $_smarty_tpl->tpl_vars['delete_url'] = new Smarty_variable("cart.delete?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value)."&storefront_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['storefront_id']), null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['delete_url'] = new Smarty_variable("cart.delete?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value), null, 0);?>
                                <?php }?>
                                <?php if (fn_allowed_for("ULTIMATE")) {?>
                                    <?php $_smarty_tpl->tpl_vars['delete_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['delete_url']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']), null, 0);?>
                                <?php }?>
                                <li><?php ob_start();?><?php echo $_smarty_tpl->__("delete");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>$_smarty_tpl->tpl_vars['delete_url']->value,'class'=>"cm-confirm",'text'=>$_tmp1,'method'=>"POST"));?>
</li>
                            <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="hidden-tools">
                        <div class="btn-group">
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_text'=>$_smarty_tpl->__("add_as_order"),'but_href'=>"cart.convert_to_order?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&storefront_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['storefront_id']),'but_meta'=>"cm-post"), 0);?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_text'=>$_smarty_tpl->__("add_as_order"),'but_href'=>"cart.convert_to_order?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']),'but_meta'=>"cm-post"), 0);?>

                            <?php }?>
                            <?php if (trim(Smarty::$_smarty_vars['capture']['tools_items'])) {?>
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php echo Smarty::$_smarty_vars['capture']['tools_items'];?>

                                </ul>
                            <?php }?>
                        </div>
                    </div>
                </td>
                <td width="8%" class="right" data-th="<?php echo $_smarty_tpl->__("total");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['customer']->value['total']), 0);?>

                </td>
            </tr>
            <?php $_smarty_tpl->tpl_vars['user_js_id'] = new Smarty_variable("user_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']), null, 0);?>
            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php $_smarty_tpl->tpl_vars['user_js_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']), null, 0);?>
            <?php }?>
            <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_js_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden row-more">
                <tr class="no-border">
                    <td colspan="100%" class="row-more-body top row-gray cart__detailed-wrapper">
                        <div class="cart__detailed">

                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_data']) {?>
                            <?php $_smarty_tpl->tpl_vars['user_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['customer']->value['user_data'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['user_info_js_id'] = new Smarty_variable("user_info_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']), null, 0);?>
                            <?php if (fn_allowed_for("ULTIMATE")) {?>
                                <?php $_smarty_tpl->tpl_vars['user_info_js_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_info_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']), null, 0);?>
                            <?php }?>
                            <div class="cart__detailed-user">
                                <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <h4><?php echo $_smarty_tpl->__("user_info");?>
</h4>
                                    <dl>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
                                            <dt><?php echo $_smarty_tpl->__("email");?>
</dt>
                                            <dd><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['user_data']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['ip_address']) {?>
                                            <dt><?php echo $_smarty_tpl->__("ip_address");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                    </dl>

                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ship_to_another']) {?>
                                        <h4><?php echo $_smarty_tpl->__("billing_address");?>
</h4>
                                    <?php } else { ?>
                                        <h4><?php echo $_smarty_tpl->__("billing_shipping_address");?>
</h4>
                                    <?php }?>
                                    <dl>
                                        <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("address");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_2']) {?>
                                            <dt><?php echo $_smarty_tpl->__("address_2");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("city");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("state");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("country");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("zip_postal_code");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                    </dl>

                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ship_to_another']) {?>
                                    <h4><?php echo $_smarty_tpl->__("shipping_address");?>
</h4>
                                    <dl>
                                        <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("address");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_2']) {?>
                                            <dt><?php echo $_smarty_tpl->__("address_2");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("city");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("state");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("country");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("zip_postal_code");?>
</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                    </dl>
                                    <?php }?>
                                <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['user_info_js_id'] = new Smarty_variable("user_info_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']), null, 0);?>
                            <?php if (fn_allowed_for("ULTIMATE")) {?>
                                <?php $_smarty_tpl->tpl_vars['user_info_js_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_info_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']), null, 0);?>
                            <?php }?>
                            <div class="cart__detailed-user">
                                <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <h4><?php echo $_smarty_tpl->__("user_info");?>
</h4>
                                    <dl>
                                        <?php if (!$_smarty_tpl->tpl_vars['customer']->value['lastname']&&!$_smarty_tpl->tpl_vars['customer']->value['firstname']) {?>
                                            <dt><?php echo $_smarty_tpl->__("customer");?>
</dt>
                                            <dd><?php echo $_smarty_tpl->__("unregistered_customer_short");?>
</dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['email']) {?>
                                            <dt><?php echo $_smarty_tpl->__("email");?>
</dt>
                                            <dd><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['customer']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['firstname']) {?>
                                            <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['lastname']) {?>
                                            <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['ip_address']) {?>
                                            <dt><?php echo $_smarty_tpl->__("ip_address");?>
</dt>
                                            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                    </dl>
                                <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                            </div>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['cart_products_js_id'] = new Smarty_variable("cart_products_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']), null, 0);?>
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <?php $_smarty_tpl->tpl_vars['cart_products_js_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['cart_products_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']), null, 0);?>
                        <?php }?>
                        <div class="cart__detailed-products">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:products_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:products_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_id']==$_smarty_tpl->tpl_vars['sl_user_id']->value) {?>
                                <?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                                <div class="table-responsive-wrapper">
                                    <table class="table table-condensed table--relative table-responsive">
                                        <thead>
                                            <tr class="no-hover">
                                                <th><?php echo $_smarty_tpl->__("product");?>
</th>
                                                <th class="center nowrap"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                <th class="right"><?php echo $_smarty_tpl->__("price");?>
</th>
                                            </tr>
                                        </thead>
                                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:product_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:product_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['extra']['parent']) {?>
                                                <tr>
                                                    <td data-th="<?php echo $_smarty_tpl->__("product");?>
" class="cart__detailed-products-name">
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['item_type']=="P") {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                                        <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>

                                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                        <?php } else { ?>
                                                        <?php echo $_smarty_tpl->__("deleted_product");?>

                                                        <?php }?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:products_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:products_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:products_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                    </td>
                                                    <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                    <td data-th="<?php echo $_smarty_tpl->__("price");?>
" class="right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price'],'span_id'=>"c_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."_".((string)$_smarty_tpl->tpl_vars['product']->value['item_id'])), 0);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:product_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php } ?>
                                        <tr>
                                            <td data-th="<?php echo $_smarty_tpl->__("total");?>
" class="right"><span class="mobile-hide"><?php echo $_smarty_tpl->__("total");?>
:</span></td>
                                            <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['cart_products'], ENT_QUOTES, 'UTF-8');?>
</span></td>
                                            <td data-th="<?php echo $_smarty_tpl->__("subtotal");?>
" class="right"><span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['customer']->value['total'],'span_id'=>"u_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])), 0);?>
</span></td>
                                        </tr>
                                    </table>
                                </div>
                                <?php }?>
                            <?php }?>
                            <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:products_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    </div>
                </td>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </tr>
            </tbody>
            <?php } ?>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"carts_list_form",'object'=>"cart",'items'=>Smarty::$_smarty_vars['capture']['carts_table'],'has_permission'=>$_smarty_tpl->tpl_vars['has_permission_update']->value,'is_check_all_shown'=>true), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"cart:sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"cart:sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"cart.cart_list",'view_type'=>"carts"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/cart/components/carts_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"cart.cart_list"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"cart:sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("users_carts"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0);?>

<?php }} ?>
