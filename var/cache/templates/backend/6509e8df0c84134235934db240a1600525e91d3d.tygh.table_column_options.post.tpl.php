<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/hooks/product_picker/table_column_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83694972161c898009fe198-50610381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6509e8df0c84134235934db240a1600525e91d3d' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_bundles/hooks/product_picker/table_column_options.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '83694972161c898009fe198-50610381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'extra_mode' => 0,
    'product_info' => 0,
    'item' => 0,
    'delete_id' => 0,
    'input_name' => 0,
    'clone' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800a5d733_80076976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800a5d733_80076976')) {function content_61c89800a5d733_80076976($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('absolute','percentage','absolute','percentage'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']==="product_bundles"||$_smarty_tpl->tpl_vars['extra_mode']->value==="product_bundles")&&$_smarty_tpl->tpl_vars['product_info']->value) {?>
    <td>
        <input type="hidden" id="item_price_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_info']->value['price'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product_info']->value['price']), 0);?>

    </td>
    <td>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier_type]" class="input-medium" id="item_modifier_type_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="by_fixed" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['modifier_type']=="by_fixed") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
</option>
            <option value="by_percentage" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['modifier_type']=="by_percentage") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percentage");?>
</option>
        </select>
    </td>
    <td>
        <input type="hidden" class="cm-bundle-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier]" id="item_modifier_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="4" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_info']->value['modifier'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-mini">
    </td>
    <td>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['product_info']->value['discounted_price'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_info']->value['price'] : $tmp),'span_id'=>"item_discounted_price_pb_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['delete_id']->value)."_"), 0);?>

    </td>
    <td>
        <input type="hidden" id="item_show_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_pb_id" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
">
        <input type="checkbox" id="item_show_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_pb_id" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['show_on_product_page']!==smarty_modifier_enum("YesNo::NO")) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
">
    </td>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']==="product_bundles"||$_smarty_tpl->tpl_vars['extra_mode']->value==="product_bundles")&&$_smarty_tpl->tpl_vars['clone']->value) {?>
    <td>
        <input type="text" class="hidden" id="item_price_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
pb_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
price<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('span_id'=>"item_display_price_pb_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."pb_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."_"), 0);?>

    </td>
    <td>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier_type]" class="input-medium" id="item_modifier_type_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
pb_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="by_fixed"><?php echo $_smarty_tpl->__("absolute");?>
</option>
            <option value="by_percentage"><?php echo $_smarty_tpl->__("percentage");?>
</option>
        </select>
    </td>
    <td>
        <input type="text" class="cm-bundle-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
 hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
pb_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" class="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
pb_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier]" id="item_modifier_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
pb_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" size="4" value="0" class="input-mini">
    </td>
    <td>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('span_id'=>"item_discounted_price_pb_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."pb_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."_"), 0);?>

    </td>
    <td>
        <input type="checkbox" id="item_show_pb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
pb_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" checked="checked">
    </td>
<?php }?><?php }} ?>
