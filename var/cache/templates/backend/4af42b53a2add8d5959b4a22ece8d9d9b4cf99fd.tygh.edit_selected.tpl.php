<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:35
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145708527461c897f70e3892-49028545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af42b53a2add8d5959b4a22ece8d9d9b4cf99fd' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/products/components/context_menu/edit_selected.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145708527461c897f70e3892-49028545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897f70e9453_93639787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897f70e9453_93639787')) {function content_61c897f70e9453_93639787($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']));?>

    </span>
</li>
<?php }} ?>
