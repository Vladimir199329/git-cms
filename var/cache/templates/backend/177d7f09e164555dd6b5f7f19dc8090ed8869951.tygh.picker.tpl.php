<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:34
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/components/picker/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162967079861c897f6db2cc7-68181597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177d7f09e164555dd6b5f7f19dc8090ed8869951' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/components/picker/picker.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162967079861c897f6db2cc7-68181597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'id' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'show_advanced' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'allow_clear' => 0,
    'item_ids' => 0,
    'empty_variant_text' => 0,
    'dropdown_css_class' => 0,
    'allow_add' => 0,
    'allow_sorting' => 0,
    'required' => 0,
    'disabled' => 0,
    'allow_multiple_created_objects' => 0,
    'close_on_select' => 0,
    'container_css_class' => 0,
    'predefined_variants' => 0,
    'is_bulk_edit' => 0,
    'has_removable_items' => 0,
    'is_tristate_checkbox' => 0,
    'no_items_text' => 0,
    'query_params' => 0,
    'show_empty_variant' => 0,
    'variant' => 0,
    'view_mode' => 0,
    'meta' => 0,
    'type' => 0,
    'simple_class' => 0,
    'advanced_class' => 0,
    'runtime' => 0,
    'object_picker_advanced_btn_class' => 0,
    'tabindex' => 0,
    'select2_tabindex' => 0,
    'select_id' => 0,
    'select_class' => 0,
    'submit_url' => 0,
    'submit_form' => 0,
    'width' => 0,
    'picker_text_key' => 0,
    'created_object_holder_selector' => 0,
    'predefined_variant_items' => 0,
    'item_id' => 0,
    'selected_external_class' => 0,
    'result_class' => 0,
    'selection_title_pre' => 0,
    'selection_title_post' => 0,
    'selection_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897f6e74774_59743586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897f6e74774_59743586')) {function content_61c897f6e74774_59743586($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.to_json.php';
if (!is_callable('smarty_modifier_count')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('none','no_data','delete_selected','delete','add'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['select_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "product_categories_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_advanced'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_advanced']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_clear'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_clear']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['dropdown_css_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['dropdown_css_class']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_add'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_add']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_sorting'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_sorting']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['required'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['required']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['disabled']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_multiple_created_objects'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['close_on_select'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['close_on_select']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['container_css_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['container_css_class']->value)===null||$tmp==='' ? ".object-picker--categories" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['predefined_variants'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['predefined_variants']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['predefined_variant_items'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_bulk_edit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['is_bulk_edit']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_removable_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['has_removable_items']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_tristate_checkbox'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['is_tristate_checkbox']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['no_items_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['no_items_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_data") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['query_params'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['query_params']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>

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

<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value, ENT_QUOTES, 'UTF-8');?>
" value=""/>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>object-picker--external<?php }?> object-picker--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> object-picker__simple--categories <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>
            <div class="object-picker__advanced object-picker__advanced--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advanced_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_id'=>"object_picker_advanced_".((string)$_smarty_tpl->tpl_vars['picker_id']->value),'company_ids'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'rnd'=>"category",'data_id'=>"categories",'view_mode'=>"button",'but_meta'=>"object-categories-add__picker object-picker__advanced-btn object-picker__advanced-btn--categories ".((string)$_smarty_tpl->tpl_vars['object_picker_advanced_btn_class']->value),'but_icon'=>"icon-reorder",'but_role'=>"add",'but_text'=>'','multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'is_tristate_checkbox'=>$_smarty_tpl->tpl_vars['is_tristate_checkbox']->value,'extra_url'=>"&".((string)http_build_query($_smarty_tpl->tpl_vars['query_params']->value))), 0);?>

            </div>
        <?php }?>

        <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-object-picker object-picker__select object-picker__select--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-dropdown-css-class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-close-on-select="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['close_on_select']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-object-type="categories"
            data-ca-object-picker-escape-html="false"
            data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url("categories.get_categories_list?".((string)http_build_query($_smarty_tpl->tpl_vars['query_params']->value))), ENT_QUOTES, 'UTF-8');?>
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
            data-ca-object-picker-allow-sorting="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_sorting']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-required="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['required']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder="<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder-value=""
            data-ca-object-picker-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-extended-picker-id="object_picker_advanced_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-has-removable-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['has_removable_items']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>
                data-ca-object-picker-external-container-selector="#object_picker_selected_external_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                data-ca-object-picker-enable-create-object="true"
                data-ca-object-picker-template-result-new-selector="#object_picker_result_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-template-selection-new-selector="#object_picker_selection_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-created-object-holder-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['created_object_holder_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-allow-multiple-created-objects="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['predefined_variant_items']->value) {?>
                data-ca-object-picker-allow-clear="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars(smarty_modifier_to_json(array_reverse($_smarty_tpl->tpl_vars['predefined_variant_items']->value)), ENT_QUOTES, 'UTF-8');?>
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

    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>      
        <div class="object-picker__categories-check-all <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item_ids']->value)===0) {?>hide-check-all<?php }?>" data-ca-bulkedit-default-object="true">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete",'class'=>"btn cm-object-picker-remove-multiple-objects",'text'=>$_smarty_tpl->__("delete_selected")));?>

        </div>

        <div id="object_picker_selected_external_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="object-picker__selected-external object-picker__selected-external--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_external_class']->value, ENT_QUOTES, 'UTF-8');?>
"></div>

        <p class="no-items object-picker__selected-external-not-items"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_items_text']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?>
</div>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <?php if ($_smarty_tpl->tpl_vars['is_bulk_edit']->value) {?>
        ${data.name}
    <?php } else { ?>
        <div class="object-picker__result object-picker__result--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"result",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0);?>

        </div>
    <?php }?>
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="cm-object-picker-object object-picker__selection-extended object-picker__selection-extended--categories">
            <input type="checkbox" name="category_ids[]" value="${data.id}" class="checkbox cm-item"/>
            <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection_external",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0);?>

            <a href="#" class="btn object-picker__categories-delete cm-object-picker-remove-object" title="<?php echo $_smarty_tpl->__("delete");?>
">
                <span class="icon-remove"></span>
            </a>
        </div>
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="object-picker__selection object-picker__selection--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0);?>

        </div>
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <?php if ($_smarty_tpl->tpl_vars['is_bulk_edit']->value) {?>
        ${data.name}
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"load"), 0);?>

    <?php }?>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-categories object-picker__result-categories--new">
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"new_item",'title_pre'=>$_smarty_tpl->__("add"),'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value,'help'=>true), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-categories object-picker__selection-categories--new">
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"new_item",'title_pre'=>((string)$_smarty_tpl->tpl_vars['selection_title_pre']->value),'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value,'help'=>false,'icon'=>false), 0);?>

    </div>
<?php echo '</script'; ?>
>
<?php }} ?>
