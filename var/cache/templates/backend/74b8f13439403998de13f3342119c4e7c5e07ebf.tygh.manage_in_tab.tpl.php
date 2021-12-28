<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:46
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/tabs/manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149109482561c898026c6498-38906034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b8f13439403998de13f3342119c4e7c5e07ebf' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/tabs/manage_in_tab.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '149109482561c898026c6498-38906034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c898026ccbd6_91649294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c898026ccbd6_91649294')) {function content_61c898026ccbd6_91649294($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_product_tabs--></div>
<?php }} ?>
