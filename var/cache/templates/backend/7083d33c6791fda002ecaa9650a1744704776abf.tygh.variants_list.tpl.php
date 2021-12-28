<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:52:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/variants_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203188109561c89dd1636086-88958658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7083d33c6791fda002ecaa9650a1744704776abf' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/variants_list.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '203188109561c89dd1636086-88958658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature_variants' => 0,
    'id' => 0,
    'hide_inputs_class' => 0,
    'variants_ids' => 0,
    'feature_type' => 0,
    'var' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89dd1719896_44861558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89dd1719896_44861558')) {function content_61c89dd1719896_44861558($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_math')) include '/home/vladimir/public_html/site.devel/git-cms/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','variant','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','variant','information','image','description','page_title','url','meta_description','meta_keywords','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','variant','information','image','description','page_title','url','meta_description','meta_keywords'));
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['feature_variants']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"content_tab_feature_variants_".((string)$_smarty_tpl->tpl_vars['id']->value),'pagination_class'=>$_smarty_tpl->tpl_vars['hide_inputs_class']->value), 0);?>

        <?php $_smarty_tpl->tpl_vars["variants_ids"] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['feature_variants']->value), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['variants_ids']->value) {
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['variants_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" name="feature_data[original_var_ids]">
    <?php }?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive" width="100%">
        <thead>
        <tr class="cm-first-sibling">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:variants_list_head")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:variants_list_head"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <th class="cm-extended-feature <?php if ($_smarty_tpl->tpl_vars['feature_type']->value!=smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>hidden<?php }?>">
                    <div name="plus_minus" id="on_st_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combinations-features-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 icon-caret-right"></div><div name="minus_plus" id="off_st_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-features-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 icon-caret-down"></div>
                </th>
                <th width="5%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                <th width="50%"><?php echo $_smarty_tpl->__("variant");?>
</th>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:variants_list_head"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody class="hover" id="box_feature_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_f"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_f"]['iteration']++;
?>
        <?php $_smarty_tpl->tpl_vars["num"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['fe_f']['iteration'], null, 0);?>
        <tr>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:variants_list_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:variants_list_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <td width="2%" class="cm-extended-feature <?php if ($_smarty_tpl->tpl_vars['feature_type']->value!=smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>hidden<?php }?>" data-th="&nbsp;">
                    <span id="on_extra_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-features-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-right"></span></span>
                    <span id="off_extra_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-features-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-down"></span></span>
                </td>
                <td width="5%" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="hidden" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="4" class="input-micro input-hidden"/></td>
                <td data-th="<?php echo $_smarty_tpl->__("variant");?>
">
                    <div class="input-prepend input-prepend--full">
                        <div class="colorpicker--wrapper">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."][color]",'cp_id'=>"feature_value_color_picker_".((string)$_smarty_tpl->tpl_vars['num']->value),'cp_value'=>$_smarty_tpl->tpl_vars['var']->value['color'],'show_picker'=>true,'cp_meta'=>"js-feature-variant-conditional-column colorpicker--hidden",'cp_attrs'=>array("data-ca-column-for-feature-style"=>smarty_modifier_enum("ProductFeatureStyles::COLOR"),"data-ca-column-for-filter-style"=>smarty_modifier_enum("ProductFilterStyles::COLOR"))), 0);?>

                        </div>
                        <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden cm-feature-value product-feature__input-variant <?php if ($_smarty_tpl->tpl_vars['feature_type']->value==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>cm-value-decimal<?php }?>">
                    </div>
                </td>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:variants_list_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <td data-th="&nbsp;">&nbsp;</td>
            <td class="right nowrap" data-th="&nbsp;">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"feature_variants_".((string)$_smarty_tpl->tpl_vars['var']->value['variant_id']),'tag_level'=>"3",'only_delete'=>"Y"), 0);?>

            </td>
        </tr>
        <tr <?php if ($_smarty_tpl->tpl_vars['feature_type']->value!=smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>class="hidden"<?php }?> id="extra_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
">
            <td colspan="6" data-th="<?php echo $_smarty_tpl->__("information");?>
">
                <div class="control-group">
                    <label class="control-label" for="elm_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("image");?>
</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"variant_image",'image_key'=>$_smarty_tpl->tpl_vars['num']->value,'hide_titles'=>true,'no_detailed'=>true,'image_object_type'=>"feature_variant",'image_type'=>"V",'image_pair'=>$_smarty_tpl->tpl_vars['var']->value['image_pair'],'prefix'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
                    <div class="controls">
                    <!--processForm-->
                    <textarea id="elm_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_page_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("page_title");?>
</label>
                    <div class="controls">
                        <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][page_title]" id="elm_page_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['page_title'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("url");?>
</label>
                    <div class="controls">
                    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][url]" id="elm_url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_meta_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("meta_description");?>
</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][meta_description]" id="elm_meta_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="2" class="input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_meta_keywords_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("meta_keywords");?>
</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][meta_keywords]" id="elm_meta_keywords_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="2" class="input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:extended_feature")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:extended_feature"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:extended_feature"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
        </tr>
        <?php } ?>
        </tbody>

        <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['num']->value)===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

        <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(array(), null, 0);?>
        <tbody class="hover" id="box_add_variants_for_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <tr>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:variants_list_clone")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:variants_list_clone"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <td class="cm-extended-feature <?php if ($_smarty_tpl->tpl_vars['feature_type']->value!=smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>hidden<?php }?>" data-th="&nbsp;">
                    <span id="on_extra_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-features-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-right"></span></span>
                    <span id="off_extra_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-features-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="icon-caret-down"></span></span>
                </td>
                <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="" size="4" class="input-micro" /></td>
                <td data-th="<?php echo $_smarty_tpl->__("variant");?>
">
                    <div class="input-prepend input-prepend--full">
                        <div class="colorpicker--wrapper">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."][color]",'cp_id'=>"feature_value_color_picker_".((string)$_smarty_tpl->tpl_vars['num']->value),'cp_value'=>"#ffffff",'show_picker'=>true,'cp_meta'=>"js-feature-variant-conditional-column",'cp_attrs'=>array("data-ca-column-for-feature-style"=>smarty_modifier_enum("ProductFeatureStyles::COLOR"),"data-ca-column-for-filter-style"=>smarty_modifier_enum("ProductFilterStyles::COLOR"))), 0);?>

                        </div>
                        <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant]" value="" class="input-full cm-feature-value <?php if ($_smarty_tpl->tpl_vars['feature_type']->value==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>cm-value-decimal<?php }?>">
                    </div>
                </td>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:variants_list_clone"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <td data-th="&nbsp;">&nbsp;</td>
            <td class="right" data-th="&nbsp;">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_variants_for_existing_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>2), 0);?>

            </td>
        </tr>
        <tr <?php if ($_smarty_tpl->tpl_vars['feature_type']->value!=smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>class="hidden"<?php }?> id="extra_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
">
            <td colspan="6" data-th="<?php echo $_smarty_tpl->__("information");?>
">

                <div class="control-group">
                    <label class="control-label" for="elm_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("image");?>
</label>
                    <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"variant_image",'image_key'=>$_smarty_tpl->tpl_vars['num']->value,'hide_titles'=>true,'no_detailed'=>true,'image_object_type'=>"feature_variant",'image_type'=>"V",'image_pair'=>'','prefix'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
                    <div class="controls">
                    <textarea id="elm_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_page_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("page_title");?>
</label>
                    <div class="controls">
                    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][page_title]" id="elm_page_title_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="" class="input-large" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("url");?>
</label>
                    <div class="controls">
                    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][url]" id="elm_url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="" class="input-large" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_meta_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("meta_description");?>
</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][meta_description]" id="elm_meta_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="2" class="input-textarea-long"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_meta_keywords_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("meta_keywords");?>
</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][meta_keywords]" id="elm_meta_keywords_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="2" class="input-textarea-long"></textarea>
                    </div>
                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:extended_feature")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:extended_feature"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:extended_feature"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
        </tr>
        </tbody>
        </table>
    </div>
<?php if (is_array($_smarty_tpl->tpl_vars['feature_variants']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"content_tab_feature_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>

<?php }?>
<?php }} ?>
