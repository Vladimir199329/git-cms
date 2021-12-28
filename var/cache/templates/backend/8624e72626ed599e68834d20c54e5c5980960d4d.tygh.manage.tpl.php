<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:52:25
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5754667261c89dc99e8da8-00747761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8624e72626ed599e68834d20c54e5c5980960d4d' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/categories/manage.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5754667261c89dc99e8da8-00747761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'app' => 0,
    'categories_tree' => 0,
    'category_id' => 0,
    'config' => 0,
    'direction' => 0,
    'href' => 0,
    'storefront_id' => 0,
    'tool_href' => 0,
    'categories_stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89dc9a53655_63168755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89dc9a53655_63168755')) {function content_61c89dc9a53655_63168755($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_component')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.component.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items','text_select_fields2edit_note','cancel','modify_selected','select_fields_to_edit','bulk_category_addition','add_category','total','categories','products','active_categories','hidden_categories','disabled_categories','categories'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/categories_bulk_edit.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("right", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("left", null, 0);?>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable((($tmp = @$_REQUEST['s_storefront'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(fn_check_form_permissions(''), null, 0);?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="category_tree_form" id="category_tree_form">
    <div class="items-container">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <div data-ca-longtap>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:context_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:context_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"context_menu.context_menu",'object'=>"categories",'form'=>"category_tree_form")); $_block_repeat=true; echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"categories",'form'=>"category_tree_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"categories",'form'=>"category_tree_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:context_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="table-wrapper">
                <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>"1",'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'st_result_ids'=>"categories_stats",'st_return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url'],'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

            </div>
        </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("select_fields_to_edit", null, null); ob_start(); ?>

    <p><?php echo $_smarty_tpl->__("text_select_fields2edit_note");?>
</p>
    <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_select_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="buttons-container">
        <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn bulkedit-unchanged"><?php echo $_smarty_tpl->__("cancel");?>
</a>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("modify_selected"),'but_name'=>"dispatch[categories.store_selection]",'but_role'=>"submit-button",'but_disabled'=>true,'but_meta'=>"bulkedit-disable-edit-button",'but_target_form'=>"category_tree_form"), 0);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"select_fields_to_edit",'text'=>$_smarty_tpl->__("select_fields_to_edit"),'content'=>Smarty::$_smarty_vars['capture']['select_fields_to_edit']), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("categories.m_add", null, 0);?>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['href']->value)."?s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value), null, 0);?>
        <?php }?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_category_addition"),'href'=>$_smarty_tpl->tpl_vars['href']->value));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[categories.m_update]",'but_role'=>"submit-button",'but_target_form'=>"category_tree_form",'but_meta'=>"bulkedit-disable-save-button"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['tool_href'] = new Smarty_variable("categories.add", null, 0);?>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->tpl_vars['tool_href'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tool_href']->value)."?s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>$_smarty_tpl->tpl_vars['tool_href']->value,'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_category"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-row" id="categories_stats">
        <h6><?php echo $_smarty_tpl->__("total");?>
</h6>
        <ul class="unstyled sidebar-stat">
            <li><?php echo $_smarty_tpl->__("categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_total'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("products");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['products_total'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("active_categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_active'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("hidden_categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_hidden'], ENT_QUOTES, 'UTF-8');?>
</span></li>
            <li><?php echo $_smarty_tpl->__("disabled_categories");?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_stats']->value['categories_disabled'], ENT_QUOTES, 'UTF-8');?>
</span></li>
        </ul>
    <!--categories_stats--></div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("categories"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'select_storefront'=>true,'selected_storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value), 0);?>

<?php }} ?>
