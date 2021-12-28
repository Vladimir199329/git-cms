<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/picker/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113649360261c89800321e73-03442958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32217625cc00cd5ea9cc4afd54e83898125c7e60' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/picker/picker.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113649360261c89800321e73-03442958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'picker_text_key' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'show_advanced' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'allow_clear' => 0,
    'show_positions' => 0,
    'item_ids' => 0,
    'for_current_storefront' => 0,
    'advanced_picker_id' => 0,
    'additional_query_params' => 0,
    'empty_variant_text' => 0,
    'meta' => 0,
    'view_mode' => 0,
    'select_group_class' => 0,
    'advanced_class' => 0,
    'object_picker_advanced_btn_class' => 0,
    'type' => 0,
    'simple_class' => 0,
    'select_class' => 0,
    'submit_url' => 0,
    'submit_form' => 0,
    'width' => 0,
    'show_empty_variant' => 0,
    'item_id' => 0,
    'selected_external_class' => 0,
    'selection_class' => 0,
    'result_class' => 0,
    'show_simple_product' => 0,
    'result_title_pre' => 0,
    'result_title_post' => 0,
    'selection_title_pre' => 0,
    'selection_title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898003b62c3_43904338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898003b62c3_43904338')) {function content_61c898003b62c3_43904338($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','none','advanced_products_search','no_data','delete'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['picker_text_key'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_text_key']->value)===null||$tmp==='' ? "value" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_advanced'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_advanced']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_clear'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_clear']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_positions'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_positions']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['for_current_storefront'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['for_current_storefront']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['advanced_picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['advanced_picker_id']->value)===null||$tmp==='' ? "object_picker_advanced_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['additional_query_params'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['additional_query_params']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&$_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search_or_click_button") : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['meta'] = new Smarty_variable("cm-object-product-add-container ".((string)$_smarty_tpl->tpl_vars['meta']->value), null, 0);?>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>object-picker--external<?php }?> object-picker--product <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>
            <div class="object-picker__advanced object-picker__advanced--products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advanced_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php ob_start();
echo $_smarty_tpl->__("advanced_products_search");
$_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_id'=>((string)$_smarty_tpl->tpl_vars['advanced_picker_id']->value),'data_id'=>"om",'no_container'=>true,'icon'=>"icon-reorder",'but_text'=>$_tmp5,'show_but_text'=>false,'view_mode'=>"button",'meta'=>"object-picker__advanced-btn object-picker__advanced-btn--products ".((string)$_smarty_tpl->tpl_vars['object_picker_advanced_btn_class']->value)), 0);?>

            </div>
        <?php }?>
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="product"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php ob_start();
if ($_smarty_tpl->tpl_vars['additional_query_params']->value) {?><?php echo (string)$_smarty_tpl->tpl_vars['additional_query_params']->value;?><?php }
$_tmp6=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['for_current_storefront']->value) {?><?php echo "&for_current_storefront=";?><?php echo (string)$_smarty_tpl->tpl_vars['for_current_storefront']->value;?><?php }
$_tmp7=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.get_products_list?".$_tmp6.$_tmp7), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-template-result-selector="#object_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advanced_picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_selected_external_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
                        data-ca-object-picker-allow-clear="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-predefined-variants="<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php echo htmlspecialchars(smarty_modifier_to_json(array(array("id"=>0,"text"=>$_tmp8))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>
        <div id="object_picker_selected_external_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="object-picker__selected-external <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_external_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            ><?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?><div class="object-picker__skeleton object-picker__skeleton--products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-data="<?php echo htmlspecialchars(smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/skeleton_external.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div
            ><?php } ?></div>
        <p class="no-items object-picker__selected-external-not-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
</div>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--products <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_class']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['show_simple_product']->value) {?> object-picker__result--simple-products<?php }?>">
        <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_title_pre']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_title_post']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/item_extended.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"result",'title_pre'=>$_tmp9,'title_post'=>$_tmp10), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="cm-object-picker-object object-picker__selection-extended object-picker__selection-extended--products">
            <?php if ($_smarty_tpl->tpl_vars['show_positions']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/item_position.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
            <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_title_pre']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_title_post']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/item_extended.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection",'title_pre'=>$_tmp11,'title_post'=>$_tmp12), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"button-icon",'but_meta'=>"btn cm-object-picker-remove-object object-picker__products-delete",'but_icon'=>"icon-remove object-picker__products-delete-icon",'title'=>$_smarty_tpl->__("delete")), 0);?>

        </div>
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="cm-object-picker-object object-picker__selection object-picker__selection--products<?php if ($_smarty_tpl->tpl_vars['show_simple_product']->value) {?> object-picker__selection--simple-products<?php }?>">
            <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_title_pre']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_title_post']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp14=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection",'title_pre'=>$_tmp13,'title_post'=>$_tmp14), 0);?>

        </div>
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--products">
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/skeleton_external.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php echo '</script'; ?>
><?php }} ?>
