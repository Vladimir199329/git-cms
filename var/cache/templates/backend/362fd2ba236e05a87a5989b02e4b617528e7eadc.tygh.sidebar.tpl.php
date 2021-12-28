<?php /* Smarty version Smarty-3.1.21, created on 2021-12-27 11:41:25
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/views/product_bundles/components/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125993682061c97c35c38fe9-78063109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '362fd2ba236e05a87a5989b02e4b617528e7eadc' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/views/product_bundles/components/sidebar.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125993682061c97c35c38fe9-78063109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'search' => 0,
    'runtime' => 0,
    'id' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c97c35c542c9_18590554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c97c35c542c9_18590554')) {function content_61c97c35c542c9_18590554($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','product_bundles.product_bundle_name','owner','any_vendor','product_bundles.search_in_products','search'));
?>
<?php $_smarty_tpl->tpl_vars['dispatch'] = new Smarty_variable("product_bundles.manage", null, 0);?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="bundle_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="sidebar-field">
            <label for="elm_bundle"><?php echo $_smarty_tpl->__("product_bundles.product_bundle_name");?>
</label>
            <input type="text" name="q" id="elm_bundle" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
">
        </div>

        <?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <div class="sidebar-field">
                <label for="elm_owner"><?php echo $_smarty_tpl->__("owner");?>
</label>
                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"company_id",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_id'] ? array($_smarty_tpl->tpl_vars['search']->value['company_id']) : array(),'empty_variant_text'=>$_smarty_tpl->__("any_vendor")), 0);?>

            </div>
        <?php }?>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("product_bundles.search_in_products");?>
</label>

            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('advanced_picker_id'=>"product_bundle_".((string)$_smarty_tpl->tpl_vars['id']->value)."_",'view_mode'=>"simple",'show_simple_product'=>true,'input_name'=>"product_id",'item_ids'=>array($_smarty_tpl->tpl_vars['search']->value['product_id']),'show_empty_variant'=>true,'for_current_storefront'=>true,'result_class'=>"object-picker__result--product-bundles"), 0);?>

        </div>

        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("search");?>
">
        </div>
    </form>
</div><?php }} ?>
