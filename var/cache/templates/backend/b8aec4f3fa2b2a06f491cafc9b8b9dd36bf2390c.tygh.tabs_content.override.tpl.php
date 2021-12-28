<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/tabs_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79060597461c898000d1fa4-21828797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8aec4f3fa2b2a06f491cafc9b8b9dd36bf2390c' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_variations/hooks/products/tabs_content.override.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79060597461c898000d1fa4-21828797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898000db5f4_93276453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898000db5f4_93276453')) {function content_61c898000db5f4_93276453($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tabs_content")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_variations:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_variations:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_variations:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
