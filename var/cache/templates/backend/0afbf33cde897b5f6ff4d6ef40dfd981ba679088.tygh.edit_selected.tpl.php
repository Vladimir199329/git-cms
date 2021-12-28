<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:52:25
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128351161561c89dc9a76cb8-16877331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0afbf33cde897b5f6ff4d6ef40dfd981ba679088' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128351161561c89dc9a76cb8-16877331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89dc9a7d895_80452972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89dc9a7d895_80452972')) {function content_61c89dc9a7d895_80452972($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)));?>

    </span>
</li>
<?php }} ?>
