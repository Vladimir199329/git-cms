<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:43
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/product_assign_feature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12090901561c897ffd8c416-13212043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2033fa1f24a4e519a74dfbe5f37805edaa030e5c' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/product_assign_feature.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12090901561c897ffd8c416-13212043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_add_feature' => 0,
    'feature' => 0,
    'product_id' => 0,
    'feature_id' => 0,
    'selected' => 0,
    'item_ids' => 0,
    'template_type' => 0,
    'allow_enter_variant' => 0,
    'enable_images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897ffe0cb24_10062034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897ffe0cb24_10062034')) {function content_61c897ffe0cb24_10062034($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('none','none','delete'));
?>
<?php $_smarty_tpl->tpl_vars['allow_enter_variant'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_add_feature']->value&&fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product_id']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style']==smarty_modifier_enum("ProductFeatureStyles::COLOR")||$_smarty_tpl->tpl_vars['feature']->value['filter_style']==smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
    <?php $_smarty_tpl->tpl_vars['template_type'] = new Smarty_variable("color", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_images'] = new Smarty_variable(false, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style']==smarty_modifier_enum("ProductFeatureStyles::BRAND")) {?>
    <?php $_smarty_tpl->tpl_vars['template_type'] = new Smarty_variable("image", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_images'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['template_type'] = new Smarty_variable("text", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_images'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']!=smarty_modifier_enum("ProductFeatures::GROUP")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_product_feature")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_product_feature"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="control-group control-group--hidden-input">
            <label class="control-label" for="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <a href="<?php echo htmlspecialchars(fn_url("product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>

                </a>
                <div>
                    <small>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>

                    </small>
                </div>
            </label>
            <div class="controls">
                <div class="product-assign-features__row">
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                        <?php $_smarty_tpl->tpl_vars['value_selected'] = new Smarty_variable(false, null, 0);?>
                        <input type="hidden"
                               name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                               id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['selected']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['feature']->value['variant_id'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />
                        <input type="hidden"
                               name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][variant]"
                               id="product_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                               value=""
                        />
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]) {?>
                            <?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['feature']->value['variant_id']=>$_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['variants'], null, 0);?>
                        <?php }?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'input_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."]",'item_ids'=>(($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp),'multiple'=>false,'template_type'=>$_smarty_tpl->tpl_vars['template_type']->value,'allow_clear'=>true,'allow_add'=>$_smarty_tpl->tpl_vars['allow_enter_variant']->value,'new_value_holder_selector'=>"#product_feature_".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."_add_new_variant",'enable_image'=>$_smarty_tpl->tpl_vars['enable_images']->value), 0);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {?>
                        <input type="hidden"
                               name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                               value=""
                        />
                        <input type="hidden"
                               name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][variant][]"
                               class="product_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                               value=""
                        />
                        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'feature_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'input_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."][]",'item_ids'=>(($tmp = @$_smarty_tpl->tpl_vars['feature']->value['variants'])===null||$tmp==='' ? array() : $tmp),'template_type'=>$_smarty_tpl->tpl_vars['template_type']->value,'allow_clear'=>false,'allow_add'=>$_smarty_tpl->tpl_vars['allow_enter_variant']->value,'new_value_holder_selector'=>".product_feature_".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."_add_new_variant",'enable_image'=>$_smarty_tpl->tpl_vars['enable_images']->value), 0);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?>
                        <label class="checkbox">
                            <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                            <input type="checkbox" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['value']=="Y") {?>checked="checked"<?php }?> /></label>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>
                        <?php ob_start();
echo $_smarty_tpl->__("none");
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_".((string)$_smarty_tpl->tpl_vars['feature_id']->value),'date_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value_int'])===null||$tmp==='' ? '' : $tmp),'extra'=>"placeholder=\"-".$_tmp4."-\""), 0);?>

                    <?php } else { ?>
                        <input type="text"
                            name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
if ($_smarty_tpl->tpl_vars['feature']->value['value_int']!='') {
echo htmlspecialchars(floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']), ENT_QUOTES, 'UTF-8');
}
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');
}?>"
                            id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {?> cm-value-decimal<?php }?> input-large"
                            placeholder="-<?php echo $_smarty_tpl->__("none");?>
-"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    <?php if (empty($_smarty_tpl->tpl_vars['product_id']->value)) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"button-icon",'but_meta'=>"btn cm-assign-features_delete-item",'but_icon'=>"icon-trash product-update-features_delete-icon",'title'=>$_smarty_tpl->__("delete")), 0);?>

                    <?php }?>
                </div>
            </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_product_feature"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
