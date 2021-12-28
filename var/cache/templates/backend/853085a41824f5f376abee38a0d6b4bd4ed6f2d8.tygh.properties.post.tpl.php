<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:52:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/yml_export/hooks/product_features/properties.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205881714761c89dd1537f52-45204593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853085a41824f5f376abee38a0d6b4bd4ed6f2d8' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/yml_export/hooks/product_features/properties.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '205881714761c89dd1537f52-45204593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature' => 0,
    'yml2_price_lists' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89dd1547589_54658269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89dd1547589_54658269')) {function content_61c89dd1547589_54658269($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.yml2_variants_unit','yml_export.yml2_exclude_from_price'));
?>
<div class="control-group">
    <label for="yml2_variants_unit" class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_variants_unit");?>
</label>
    <div class="controls">
        <div class="checkbox-list">
            <input id="yml2_variants_unit" type="text" name="feature_data[yml2_variants_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['yml2_variants_unit'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
</div>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_exclude_from_price");?>
</label>
    <div class="controls">
        <div class="checkbox-list shift-input">
            <input type="hidden" name="feature_data[yml2_exclude_prices]" value="" />
            <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yml2_price_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                <label>
                    <input type="checkbox"
                           name="feature_data[yml2_exclude_prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="Y"
                           <?php if ($_smarty_tpl->tpl_vars['feature']->value['yml2_exclude_prices']&&in_array($_smarty_tpl->tpl_vars['price']->value['param_id'],$_smarty_tpl->tpl_vars['feature']->value['yml2_exclude_prices'])) {?>
                           checked="checked"
                           <?php }?>/>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['param_data']['name_price_list'], ENT_QUOTES, 'UTF-8');?>

                </label>
            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>
