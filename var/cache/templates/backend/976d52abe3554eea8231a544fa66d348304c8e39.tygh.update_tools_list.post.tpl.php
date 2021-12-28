<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/vendor_communication/hooks/products/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120801345061c89800439073-73144836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '976d52abe3554eea8231a544fa66d348304c8e39' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/vendor_communication/hooks/products/update_tools_list.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '120801345061c89800439073-73144836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8980043dd62_49629778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8980043dd62_49629778')) {function content_61c8980043dd62_49629778($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'menu_button'=>true,'divider'=>true), 0);?>
<?php }} ?>
