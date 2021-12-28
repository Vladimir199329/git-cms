<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64911497361c89800318ca0-02055476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b992e3dcc448810478689116afbb51447c841f' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '64911497361c89800318ca0-02055476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800320490_88832834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800320490_88832834')) {function content_61c89800320490_88832834($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="required_products") {?>hidden<?php }?>" id="content_required_products">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar"), 0);?>

</div><?php }} ?>
