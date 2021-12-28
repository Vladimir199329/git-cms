<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:43
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/variants_picker/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97765619261c897ffe3ecd0-22697817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd74c25175d675abf5253687c1a402fda9809308' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/variants_picker/picker.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '97765619261c897ffe3ecd0-22697817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'show_advanced' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'close_on_select' => 0,
    'allow_clear' => 0,
    'item_ids' => 0,
    'search_data' => 0,
    'feature_id' => 0,
    'allow_add' => 0,
    'template_type' => 0,
    'unremovable_item_ids' => 0,
    'enable_color' => 0,
    'disabled' => 0,
    'predefined_variants' => 0,
    'show_empty_variant' => 0,
    'empty_variant_text' => 0,
    'id' => 0,
    'variant' => 0,
    'meta' => 0,
    'select_group_class' => 0,
    'type' => 0,
    'simple_class' => 0,
    'input_id' => 0,
    'select_class' => 0,
    'url' => 0,
    'width' => 0,
    'new_value_holder_selector' => 0,
    'dropdown_parent_selector' => 0,
    'enable_permanent_placeholder' => 0,
    'predefined_variant_items' => 0,
    'item_id' => 0,
    'enable_images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897ffefccc9_74195771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897ffefccc9_74195771')) {function content_61c897ffefccc9_74195771($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search','none','none','add','add','add'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_advanced'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_advanced']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['close_on_select'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['close_on_select']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_clear'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_clear']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['search_data'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search_data']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('search_data', null, 0);
$_smarty_tpl->tpl_vars['search_data']->value['feature_id'] = $_smarty_tpl->tpl_vars['feature_id']->value;?>
<?php $_smarty_tpl->tpl_vars['allow_add'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_add']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['template_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['template_type']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['unremovable_item_ids'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['unremovable_item_ids']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['enable_color'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_color']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['disabled']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars['predefined_variants'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['predefined_variants']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['predefined_variant_items'] = new Smarty_variable(array(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('predefined_variants', null, 0);
$_smarty_tpl->tpl_vars['predefined_variants']->value["0"] = $_smarty_tpl->tpl_vars['empty_variant_text']->value;?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['predefined_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['variant']->key;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('predefined_variant_items', null, 0);
$_smarty_tpl->tpl_vars['predefined_variant_items']->value[] = array("id"=>$_smarty_tpl->tpl_vars['id']->value,"text"=>$_smarty_tpl->tpl_vars['variant']->value,"data"=>array("name"=>$_smarty_tpl->tpl_vars['variant']->value));?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&$_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search") : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("product_features.get_variants_list"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['meta'] = new Smarty_variable("cm-object-feature-variants-add-container ".((string)$_smarty_tpl->tpl_vars['meta']->value), null, 0);?>

<div class="object-picker object-picker--feature-variants <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--feature-variants <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--feature-variants <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>
                    class="cm-object-picker object-picker__select object-picker__select--feature-variants <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="product_feature_variants"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-close-on-select="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['close_on_select']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-search-request-data="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['search_data']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-unremovable-item-ids="<?php echo htmlspecialchars(smarty_modifier_to_json(array_values($_smarty_tpl->tpl_vars['unremovable_item_ids']->value)), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-allow-clear="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-result-selector="#product_feature_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-selector="#product_feature_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#product_feature_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-allow-multiple-created-objects="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['multiple']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                        data-ca-object-picker-enable-create-object="true"
                        data-ca-object-picker-template-result-new-selector="#product_feature_picker_result_new_selector_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-template-selection-new-selector="#product_feature_picker_selection_new_selector_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-created-object-holder-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_value_holder_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value) {?>
                        data-ca-object-picker-dropdown-parent-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['enable_permanent_placeholder']->value) {?>
                        data-ca-object-picker-enable-permanent-placeholder="true"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['predefined_variant_items']->value) {?>
                        data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars(smarty_modifier_to_json(array_reverse($_smarty_tpl->tpl_vars['predefined_variant_items']->value)), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                <?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['template_type']->value=="color"||$_smarty_tpl->tpl_vars['template_type']->value=="image"||$_smarty_tpl->tpl_vars['template_type']->value=="text") {?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" 
                            <?php if ($_smarty_tpl->tpl_vars['item_id']->value['selected']) {?> selected="selected"<?php }?>
                            data-data="<?php echo htmlspecialchars(smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value['variant_id'],"loaded"=>"true","data"=>array("name"=>$_smarty_tpl->tpl_vars['item_id']->value['variant'],"color"=>$_smarty_tpl->tpl_vars['item_id']->value['color']))), ENT_QUOTES, 'UTF-8');?>
">
                        </option>
                    <?php } else { ?> 
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                    <?php }?>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-product-feature">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value=="color") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('help'=>false,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value=="image") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('enable_image'=>$_smarty_tpl->tpl_vars['enable_images']->value), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>           
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-product-feature">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value=="color") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('help'=>false,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value=="image") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('enable_image'=>false), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_result_new_selector_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-product-feature object-picker__result-product-feature--new">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value=="color") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_pre'=>$_smarty_tpl->__("add"),'help'=>true,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value=="image") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('enable_image'=>false,'title_pre'=>$_smarty_tpl->__("add")), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_pre'=>$_smarty_tpl->__("add")), 0);?>

        <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_selection_new_selector_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-product-feature object-picker__selection-product-feature--new">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value=="color") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('help'=>false,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value=="image") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('enable_image'=>false), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton-product-feature">...</div>
<?php echo '</script'; ?>
><?php }} ?>
