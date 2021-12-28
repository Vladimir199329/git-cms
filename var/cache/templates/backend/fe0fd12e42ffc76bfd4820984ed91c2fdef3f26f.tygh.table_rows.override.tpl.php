<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/addons/product_variations/hooks/product_picker/table_rows.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107953294261c898009a53c4-83894368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0fd12e42ffc76bfd4820984ed91c2fdef3f26f' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/addons/product_variations/hooks/product_picker/table_rows.override.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107953294261c898009a53c4-83894368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_ids' => 0,
    'display' => 0,
    'product' => 0,
    'prod_opts' => 0,
    'get_option_info' => 0,
    'product_options' => 0,
    'product_id' => 0,
    'product_name' => 0,
    'data_id' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898009e0e33_85622492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898009e0e33_85622492')) {function content_61c898009e0e33_85622492($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('options','any_option_combinations','product_bundles.any_variation','deleted_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_id"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['display']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start(); ?>
                <?php $_smarty_tpl->tpl_vars["prod_opts"] = new Smarty_variable(fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['prod_opts']->value&&!$_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <span><?php echo $_smarty_tpl->__("options");?>
: </span>&nbsp;<?php echo $_smarty_tpl->__("any_option_combinations");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options_value']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0);?>

                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['product_options'] = new Smarty_variable($_smarty_tpl->tpl_vars['get_option_info']->value ? (fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['product']->value['product_options'])) : $_smarty_tpl->tpl_vars['product']->value['product_options'], null, 0);?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product_options']->value), 0);?>

                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['any_variation']) {?>
                    <?php echo $_smarty_tpl->__("product_bundles.any_variation");?>

                    <input type="hidden" name="item_data[products][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][any_variation]" value="true">
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['any_variation']) {?>
            <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_name'], null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
            <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable((($tmp = @fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']))===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp), null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product_name']->value,'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'delete_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['product_id']->value)."]",'amount'=>$_smarty_tpl->tpl_vars['product']->value['amount'],'amount_input'=>"text",'type'=>"options",'options'=>Smarty::$_smarty_vars['capture']['product_options'],'options_array'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_info'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
<?php }?><?php }} ?>
