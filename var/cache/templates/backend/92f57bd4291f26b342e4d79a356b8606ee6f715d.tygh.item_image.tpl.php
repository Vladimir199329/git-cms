<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:43
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105030957461c897fff04bf4-25127546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f57bd4291f26b342e4d79a356b8606ee6f715d' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '105030957461c897fff04bf4-25127546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable_image' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897fff0bda5_47548177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897fff0bda5_47548177')) {function content_61c897fff0bda5_47548177($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['enable_image']->value) {?>
    
        ${data.image_url
        ? `<img src="${data.image_url}" width="30" height="30" alt="${data.name}" class="object-picker__product-feature-image"/>`
            : `<div class="no-image object-picker__product-feature-no-image" style="width: 30px; height: 30px;"><span class="cs-icon glyph-image"></span></div>`
        }
    
<?php }?>
<div class="object-picker__product-feature-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }} ?>
