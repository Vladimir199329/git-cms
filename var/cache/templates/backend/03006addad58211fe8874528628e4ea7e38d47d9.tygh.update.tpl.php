<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/views/product_bundles/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71931647361c8980068a795-92458179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03006addad58211fe8874528628e4ea7e38d47d9' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/views/product_bundles/update.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '71931647361c8980068a795-92458179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'product_id' => 0,
    'product_data' => 0,
    'item_product' => 0,
    'return_url' => 0,
    'config' => 0,
    'id' => 0,
    'allow_save' => 0,
    'companies_tooltip' => 0,
    'date_disabled' => 0,
    'settings' => 0,
    'bundle_products' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800738828_32652695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800738828_32652695')) {function content_61c89800738828_32652695($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_to_json')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','products','description','product_bundles.display_in_promotions','product_bundles.promo_image','use_avail_period','avail_from','avail_till','product_bundles.bundle_products','recalculate','product_bundles.total_cost','product_bundles.price_for_all','product_bundles.share_discount','apply','product_bundles.confirm_text_on_empty_bundle','product_bundles.confirm_text_with_one_product_bundle','product_bundles.confirm_text_on_empty_bundle','product_bundles.confirm_text_with_one_product_bundle'));
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['bundle_id']) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['bundle_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['extra_mode'] = new Smarty_variable("product_bundles", null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_bundles/func.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_check_view_permissions("product_bundles.update","POST"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product_id']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['price'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp21=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['item_product'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_data']->value ? (array(array("product_id"=>$_smarty_tpl->tpl_vars['product_id']->value,"product"=>((string)$_smarty_tpl->tpl_vars['product_data']->value['product']),"price"=>$_tmp21,"amount"=>"1"))) : (array()), null, 0);?>
<?php $_smarty_tpl->tpl_vars['bundle_products'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['products'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_product']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['return_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), null, 0);?>

<div class="content-product-bundle" id="content_group_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="item_update_form_pb" id="item_update_form_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php }?>" enctype="multipart/form-data">
        <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
        <input type="hidden" class="cm-no-hide-input" name="item_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" class="cm-no-hide-input" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" class="cm-no-hide-input" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
">

        <div class="tabs cm-j-tabs">
            <ul class="nav nav-tabs">
                <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                <li id="tab_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("products");?>
</a></li>
            </ul>
        </div>

        <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>
                <div id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("components/copy_on_type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('source_value'=>$_smarty_tpl->tpl_vars['item']->value['name'],'source_name'=>"item_data[name]",'target_value'=>$_smarty_tpl->tpl_vars['item']->value['storefront_name'],'target_name'=>"item_data[storefront_name]",'type'=>"bundle_name"), 0);?>


                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"item_data[company_id]",'id'=>"product_bundle_company_id_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'tooltip'=>$_smarty_tpl->tpl_vars['companies_tooltip']->value,'disable_company_picker'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>


                    <div class="control-group">
                        <label class="control-label" for="elm_product_bundle_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
                        <div class="controls">
                            <textarea id="elm_product_bundle_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="item_data[description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </div>
                    </div>
                    <?php if (fn_check_permissions("promotions","manage","admin","POST")) {?>
                        <div class="control-group">
                            <label class="control-label" for="elm_product_bundle_promotions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_bundles.display_in_promotions");?>
:</label>
                            <div class="controls">
                                <input type="hidden" name="item_data[display_in_promotions]" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="checkbox" name="item_data[display_in_promotions]" id="elm_product_bundle_promotions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNO::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("YesNO::YES"), ENT_QUOTES, 'UTF-8');
$_tmp22=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['item']->value['display_in_promotions']==$_tmp22) {?>checked="checked"<?php }?>>
                            </div>
                        </div>
                    <?php }?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("product_bundles.promo_image");?>
</label>
                        <div class="controls">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"bundle_main",'image_object_type'=>"product_bundle",'image_pair'=>$_smarty_tpl->tpl_vars['item']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0);?>

                        </div>
                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['item']->value['date_from']&&!$_smarty_tpl->tpl_vars['item']->value['date_to']) {?>
                        <?php $_smarty_tpl->tpl_vars['date_disabled'] = new Smarty_variable('disabled="disabled"', null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['date_disabled'] = new Smarty_variable(false, null, 0);?>
                    <?php }?>
                    <div class="control-group">
                        <label class="control-label" for="elm_use_avail_period"><?php echo $_smarty_tpl->__("use_avail_period");?>
:</label>
                        <div class="controls">
                            <input type="checkbox" name="avail_period" class="use_avail_period" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['date_disabled']->value) {?> checked="checked"<?php }?> value="Y"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="elm_product_bundle_avail_from_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("avail_from");?>
:</label>
                        <div class="controls">
                            <input type="hidden" name="item_data[date_from]" value="0" />
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_product_bundle_avail_from_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"item_data[date_from]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['date_from'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->tpl_vars['date_disabled']->value), 0);?>

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="elm_product_bundle_avail_till_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("avail_till");?>
:</label>
                        <div class="controls">
                            <input type="hidden" name="item_data[date_to]" value="0" />
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_product_bundle_avail_till_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"item_data[date_to]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['date_to'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->tpl_vars['date_disabled']->value), 0);?>

                        </div>
                    </div>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"item_data[status]",'id'=>"elm_product_bundle_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['item']->value,'hidden'=>false), 0);?>

                </div>

                <div id="content_tab_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>class="cm-hide-inputs"<?php }?>>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("product_bundles.bundle_products")), 0);?>


                    <?php ob_start();
echo htmlspecialchars(smarty_modifier_enum('YesNo::YES'), ENT_QUOTES, 'UTF-8');
$_tmp23=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'select_group_class'=>"btn-toolbar",'display'=>"options",'advanced_picker_id'=>"add_new_bundles_".((string)$_smarty_tpl->tpl_vars['id']->value)."_",'select_class'=>"cm-object-product-add--product-bundles",'aoc'=>true,'additional_query_params'=>"product_type=P&any_variation=".$_tmp23), 0);?>


                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_id'=>"add_new_bundles_".((string)$_smarty_tpl->tpl_vars['id']->value)."_",'input_name'=>"item_data[products]",'item_ids'=>$_smarty_tpl->tpl_vars['bundle_products']->value,'get_option_info'=>false,'view_mode'=>"list",'type'=>"table",'table_meta'=>"product-bundles-table",'aoc'=>true), 0);?>


                    <ul class="pull-right unstyled right span6">
                        <li>
                            <a class="btn" onclick="fn_product_bundles_recalculate('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');"><?php echo $_smarty_tpl->__("recalculate");?>
</a><br><br>
                        </li>
                        <li>
                            <input id="elm_product_bundle_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="item_data[total_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['total_price'], ENT_QUOTES, 'UTF-8');?>
" />
                            <em><?php echo $_smarty_tpl->__("product_bundles.total_cost");?>
:</em>
                            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['item']->value['total_price'],'span_id'=>"total_price_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>
</strong>
                        </li>
                        <li>
                            <input id="elm_product_bundle_price_for_all_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"  type="hidden" name="item_data[price_for_all]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['discounted_price'], ENT_QUOTES, 'UTF-8');?>
" />
                            <em><?php echo $_smarty_tpl->__("product_bundles.price_for_all");?>
:</em>
                            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['item']->value['discounted_price'],'span_id'=>"price_for_all_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>
</strong>
                        </li>
                        <li><br>
                            <label for="elm_product_bundle_global_discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <em><?php echo $_smarty_tpl->__("product_bundles.share_discount");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</em>&nbsp;
                                <input type="text" class="input-mini" size="4"
                                       id="elm_product_bundle_global_discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       onkeypress="fn_product_bundles_share_discount(event, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" />&nbsp;
                                <a onclick="fn_product_bundles_apply_discount('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="btn"><?php echo $_smarty_tpl->__("apply");?>
</a>
                            </label>
                        </li>
                    </ul>
                </div>
            </fieldset>
        </div>

        <div class="buttons-container">
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <?php ob_start();?><?php echo $_smarty_tpl->__("product_bundles.confirm_text_on_empty_bundle");?>
<?php $_tmp24=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->__("product_bundles.confirm_text_with_one_product_bundle");?>
<?php $_tmp25=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_bundles.update]",'cancel_action'=>"close",'but_confirm_text'=>smarty_modifier_to_json(array("emptyProductBundle"=>$_tmp24,"withOneProductBundle"=>$_tmp25))), 0);?>

            <?php } else { ?>
                <?php ob_start();?><?php echo $_smarty_tpl->__("product_bundles.confirm_text_on_empty_bundle");?>
<?php $_tmp26=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->__("product_bundles.confirm_text_with_one_product_bundle");?>
<?php $_tmp27=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_bundles.update]",'but_confirm_text'=>smarty_modifier_to_json(array("emptyProductBundle"=>$_tmp26,"withOneProductBundle"=>$_tmp27)),'cancel_action'=>"close",'hide_first_button'=>false,'hide_second_button'=>false,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

            <?php }?>
        </div>

    </form>

    <!--content_group_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
