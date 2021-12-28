<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:43
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/update_product_feature.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187947862761c897ffe1b868-55701787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db25c0b0a79322e5077cb3f5bbeea93d09e6849' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/update_product_feature.override.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187947862761c897ffe1b868-55701787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature' => 0,
    'feature_id' => 0,
    'variant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897ffe36213_88944879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897ffe36213_88944879')) {function content_61c897ffe36213_88944879($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.feature_used_by_variation_group.tooltip'));
?>
<?php if ($_smarty_tpl->tpl_vars['feature']->value['product_variation_group']) {?>
    <div class="control-group">
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
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>
                    <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("product_variations.feature_used_by_variation_group.tooltip",array("[code]"=>$_smarty_tpl->tpl_vars['feature']->value['product_variation_group']['code']))), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
