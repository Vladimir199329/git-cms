<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:35
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99823330261c897f713f783-55360884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5feff21d70b0a2a1167dbeb25287f020f8016b7' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99823330261c897f713f783-55360884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897f714a805_89764033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897f714a805_89764033')) {function content_61c897f714a805_89764033($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['import_product_href'] = new Smarty_variable("import_presets.manage&object_type=products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['import_product_href'] = clone $_smarty_tpl->tpl_vars['import_product_href'];?>
    <?php $_smarty_tpl->tpl_vars['has_permission_an_import'] = new Smarty_variable(fn_check_permissions("import_presets","update","admin","POST"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['has_permission_an_import'] = clone $_smarty_tpl->tpl_vars['has_permission_an_import'];?>
<?php }?>
<?php }} ?>
