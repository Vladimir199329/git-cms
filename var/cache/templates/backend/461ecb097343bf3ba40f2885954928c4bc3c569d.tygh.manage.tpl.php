<?php /* Smarty version Smarty-3.1.21, created on 2021-12-27 11:41:49
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/discussion/views/discussion_manager/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165669564761c97c4d2d34e0-65652795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '461ecb097343bf3ba40f2885954928c4bc3c569d' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/discussion/views/discussion_manager/manage.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165669564761c97c4d2d34e0-65652795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discussion_object_type' => 0,
    'discussion_object_types' => 0,
    'addons' => 0,
    'is_allowed_to_update_reviews' => 0,
    'posts' => 0,
    'post' => 0,
    'is_allowed_to_add_reviews' => 0,
    'but_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c97c4d332fc6_79761263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c97c4d332fc6_79761263')) {function content_61c97c4d332fc6_79761263($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_enabled_testimonials_notice','no_data','add_post','discussion'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value], ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_smarty_tpl->tpl_vars['discussion_object_type']->value=='E'&&$_smarty_tpl->tpl_vars['addons']->value['discussion']['home_page_testimonials']=='D') {?>
    <?php echo $_smarty_tpl->__("text_enabled_testimonials_notice");?>

<?php }?>
<?php $_smarty_tpl->tpl_vars['is_allowed_to_update_reviews'] = new Smarty_variable(fn_check_permissions("discussion","update","admin"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_allowed_to_add_reviews'] = new Smarty_variable(fn_check_permissions("discussion","add","admin"), null, 0);?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" <?php if (!$_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value) {?>class="cm-hide-inputs"<?php }?> name="update_posts_form_<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['discussion_object_type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("discussion_manager.manage?selected_section=".((string)$_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value])), ENT_QUOTES, 'UTF-8');?>
">
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_".((string)$_smarty_tpl->tpl_vars['discussion_object_type']->value)), 0);?>


<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/addons/discussion/discussion.js"),$_smarty_tpl);?>

<div class="posts-container">
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <div class="post-item">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion_manager:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion_manager:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('post'=>$_smarty_tpl->tpl_vars['post']->value,'type'=>$_smarty_tpl->tpl_vars['post']->value['type'],'show_object_link'=>true,'allow_save'=>$_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion_manager:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php } ?>
</div>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_".((string)$_smarty_tpl->tpl_vars['discussion_object_type']->value)), 0);?>


<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['discussion_object_type']->value=='E') {?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['home_page_testimonials']!='D'&&$_smarty_tpl->tpl_vars['is_allowed_to_add_reviews']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("add_post"),'but_icon'=>"icon-plus",'but_role'=>"action",'but_href'=>"discussion.update?discussion_type=E#add_new_post"), 0);?>

        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['discussion_object_type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[discussion.m_delete]",'form'=>"update_posts_form_".$_tmp1));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


        <?php if ($_smarty_tpl->tpl_vars['discussion_object_type']->value!="E") {?>
            <?php $_smarty_tpl->tpl_vars['but_class'] = new Smarty_variable("btn-primary", null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[discussion.update]",'but_role'=>"action",'but_target_form'=>"update_posts_form_".((string)mb_strtolower($_smarty_tpl->tpl_vars['discussion_object_type']->value, 'UTF-8')),'but_meta'=>"cm-submit ".((string)$_smarty_tpl->tpl_vars['but_class']->value)), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"discussion_manager.manage",'view_type'=>"discussion"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("discussion"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
