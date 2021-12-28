<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:43
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/product_assign_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202081594561c897ffd75b20-15803572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '326f6312942943d6497a4246f364193d657e3d52' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/product_assign_features.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '202081594561c897ffd75b20-15803572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_features' => 0,
    'feature' => 0,
    'feature_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897ffd8a9d8_85232425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897ffd8a9d8_85232425')) {function content_61c897ffd8a9d8_85232425($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
?><?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'feature_id'=>$_smarty_tpl->tpl_vars['feature_id']->value), 0);?>

<?php } ?>

<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")&&$_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'additional_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'target'=>"#acc_feature_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])), 0);?>

        <div id="acc_feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
" class="collapse in">
            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0);?>

        </div>
    <?php }?>
<?php } ?><?php }} ?>
