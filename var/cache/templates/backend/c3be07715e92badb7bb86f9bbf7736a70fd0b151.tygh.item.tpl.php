<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:35
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50452034161c897f7046981-21967589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3be07715e92badb7bb86f9bbf7736a70fd0b151' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/components/picker/item.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50452034161c897f7046981-21967589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'title_pre' => 0,
    'has_selection_controls' => 0,
    'categories_picker_item_class' => 0,
    'runtime' => 0,
    'title_post' => 0,
    'icon' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897f706d799_31099519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897f706d799_31099519')) {function content_61c897f706d799_31099519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('enter_category_name_and_path'));
?>
<div class="object-picker__categories-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value==="result"||$_smarty_tpl->tpl_vars['type']->value==="selection"||$_smarty_tpl->tpl_vars['type']->value==="selection_external") {?>
        <div class="object-picker__categories-main-content">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                <?php if ($_smarty_tpl->tpl_vars['has_selection_controls']->value) {?>
                    <input class="select2__category-status-checkbox cm-tristate tristate-checkbox-cursor <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_picker_item_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                        type="checkbox"
                        data-ca-category-id="${data.id}"
                        data-ca-tristate-process="false"
                        data-ca-tristate-just-click=""
                        data-checked=""
                    />
                <?php }?>
                <span class="select2-selection__choice__handler"></span>
                <div class="select2__category-name">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value==="selection_external") {?>
                        <a href="${data.url}">${data.name}</a>
                    <?php } else { ?>
                        ${data.name}
                    <?php }?>
                </div>
                <div class="select2__category-parents">
                    ${data.parents_path ? data.parents_path : ``}
                </div>

                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                    
                        ${data.company
                        ? `<div class="select2__category-company">${data.company}</div>`
                            : ``
                        }
                    
                <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="new_item") {?>
        <div class="object-picker__results-label object-picker__results-label--categories">
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__results-label-icon-wrapper--categories">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)(($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? 'icon-plus-sign' : $tmp))." object-picker__results-label-icon object-picker__results-label-icon--categories"),$_smarty_tpl);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__results-label-prefix--categories">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__results-label-body--categories">
                <span class="select2-selection__choice__handler"></span>
                ${data.text}
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
            <div class="object-picker__results-help object-picker__results-help--categories">
                <?php echo $_smarty_tpl->__("enter_category_name_and_path");?>

            </div>
        <?php }?>
    <?php }?>
</div>
<?php }} ?>
