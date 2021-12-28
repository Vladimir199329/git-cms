<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/mainbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173002677261c74459c7afb9-14067143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e94b5f470fad775448549a03c067d8bb2bba29e' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/mainbox.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173002677261c74459c7afb9-14067143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar_position' => 0,
    'sidebar_icon' => 0,
    'select_storefront' => 0,
    'runtime' => 0,
    'selected_storefront_id' => 0,
    'app' => 0,
    'anchor' => 0,
    'enable_sticky_scroll' => 0,
    'navigation_accordion' => 0,
    'convertible_data' => 0,
    'navigation' => 0,
    'm' => 0,
    'method' => 0,
    's_id' => 0,
    'sidebar' => 0,
    'notes' => 0,
    'title' => 0,
    'note' => 0,
    'sticky_top_on_actions_panel' => 0,
    'sticky_padding_on_actions_panel' => 0,
    'title_start' => 0,
    'title_end' => 0,
    'title_alt' => 0,
    'languages' => 0,
    'config' => 0,
    'storefronts_picker_name' => 0,
    'show_empty_variant' => 0,
    'show_all_storefront' => 0,
    'main_buttons_meta' => 0,
    'content_id' => 0,
    'buttons' => 0,
    'adv_buttons' => 0,
    'mainbox_content_wrapper_class' => 0,
    'no_sidebar' => 0,
    'sidebar_content' => 0,
    'sidebar_meta' => 0,
    'box_id' => 0,
    'select_languages' => 0,
    'tools' => 0,
    'title_extra' => 0,
    'extra_tools' => 0,
    'content' => 0,
    'is_open_state_sidebar_save' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c74459dd0308_08828514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c74459dd0308_08828514')) {function content_61c74459dd0308_08828514($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_notes')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.notes.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_sanitize_html')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.sanitize_html.php';
if (!is_callable('smarty_modifier_sizeof')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.sizeof.php';
if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notes','search','all_vendors','choose_action','sidebar','language','sidebar'));
?>
<?php if (!$_smarty_tpl->tpl_vars['sidebar_position']->value) {?>
    <?php $_smarty_tpl->tpl_vars['sidebar_position'] = new Smarty_variable("right", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['sidebar_icon']->value) {?>
    <?php $_smarty_tpl->tpl_vars['sidebar_icon'] = new Smarty_variable("icon-chevron-left", null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['select_storefront']->value)) {?>
    <?php if ((fn_allowed_for('MULTIVENDOR:ULTIMATE'))) {?>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
            <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 0);?>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['selected_storefront_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['selected_storefront_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront"]->storefront_id : $tmp), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts'], null, 0);?>
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
<a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>

<?php if (defined("THEMES_PANEL")) {?>
    <?php $_smarty_tpl->tpl_vars['sticky_padding_on_actions_panel'] = new Smarty_variable(80, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sticky_top_on_actions_panel'] = new Smarty_variable(80, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['sticky_padding_on_actions_panel'] = new Smarty_variable(45, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sticky_top_on_actions_panel'] = new Smarty_variable(45, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['enable_sticky_scroll'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_sticky_scroll']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['navigation_accordion'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['navigation_accordion']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
// Init ajax callback (rebuild)
var menu_content = <?php echo (($tmp = @htmlspecialchars_decode($_smarty_tpl->tpl_vars['convertible_data']->value, ENT_QUOTES))===null||$tmp==='' ? "''" : $tmp);?>
;
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar_content", "sidebar_content", null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['navigation']->value&&$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections']) {?>
        <div class="sidebar-row">
            <ul class="nav nav-list">
                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars["s_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['m']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['m']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars["s_id"]->value = $_smarty_tpl->tpl_vars['m']->key;
 $_smarty_tpl->tpl_vars['m']->iteration++;
 $_smarty_tpl->tpl_vars['m']->last = $_smarty_tpl->tpl_vars['m']->iteration === $_smarty_tpl->tpl_vars['m']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["first_level"]['last'] = $_smarty_tpl->tpl_vars['m']->last;
?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:dynamic_menu_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:dynamic_menu_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['m']->value['type']=="divider") {?>
                            <li class="divider"></li>
                            <?php } else { ?>
                                <?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['method']->value)===null||$tmp==='' ? "GET" : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp13=ob_get_clean();?><?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['m']->value['href'],$_tmp13)) {?>
                                    <li class="<?php if ($_smarty_tpl->tpl_vars['m']->value['js']==true) {?>cm-js<?php }
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['first_level']['last']) {?> last-item<?php }
if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']==$_smarty_tpl->tpl_vars['s_id']->value) {?> active<?php }?>"><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                                <?php }?>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:dynamic_menu_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>
            </ul>
        </div>
    <hr>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array('assign'=>"notes")); $_block_repeat=true; echo smarty_block_notes(array('assign'=>"notes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array('assign'=>"notes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
        <?php  $_smarty_tpl->tpl_vars["note"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["note"]->_loop = false;
 $_smarty_tpl->tpl_vars["sidebox_title"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["note"]->key => $_smarty_tpl->tpl_vars["note"]->value) {
$_smarty_tpl->tpl_vars["note"]->_loop = true;
 $_smarty_tpl->tpl_vars["sidebox_title"]->value = $_smarty_tpl->tpl_vars["note"]->key;
?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("note_title", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['title']->value=="_note_") {
echo $_smarty_tpl->__("notes");
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
}?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['note']->value,'title'=>Smarty::$_smarty_vars['capture']['note_title']), 0);?>

        <?php } ?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<!-- Actions -->
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:actions_wrapper")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:actions_wrapper"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="actions nav__actions <?php if ($_smarty_tpl->tpl_vars['enable_sticky_scroll']->value) {?>cm-sticky-scroll<?php }?>"
        data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd"
        data-ca-top="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_top_on_actions_panel']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-padding="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_padding_on_actions_panel']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="actions_panel">
        <div class="actions__wrapper <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed']||$_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>navbar-inner--disabled<?php }?>">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-bar-left pull-left mobile-hidden">
            <div class="pull-left"><?php echo $_smarty_tpl->getSubTemplate ("common/last_viewed_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
        </div>
        <div class="btn-bar-left pull-left overlay-navbar-open-container mobile-visible">
            <div class="pull-left"><a role="button" class="btn mobile-visible mobile-menu-toggler"
                data-ca-mobile-menu-is-convert-dropdown="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigation_accordion']->value ? "false" : "true", ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-align-justify mobile-visible-inline overlay-navbar-open"),$_smarty_tpl);?>

            </a></div>
        </div>
        <div class="title nav__actions-title pull-left <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title--storefronts<?php }?>">
            <?php if (isset($_smarty_tpl->tpl_vars['title_start']->value)&&isset($_smarty_tpl->tpl_vars['title_end']->value)) {?>
                <h2 class="title__heading <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title__heading--storefronts<?php }?>"
                    title="<?php echo htmlspecialchars(html_entity_decode(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (($tmp = @$_smarty_tpl->tpl_vars['title_alt']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['title_start']->value)." ".((string)$_smarty_tpl->tpl_vars['title_end']->value) : $tmp)))), ENT_QUOTES, 'UTF-8');?>
"
                >
                    <span class="title__part-start mobile-hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_start']->value, ENT_QUOTES, 'UTF-8');?>
: </span>
                    <span class="title__part-end"><?php echo htmlspecialchars(html_entity_decode(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title_end']->value)), ENT_QUOTES, 'UTF-8');?>
</span>
                </h2>
            <?php } else { ?>
                <h2 class="title__heading <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title__heading--storefronts<?php }?>" title="<?php echo htmlspecialchars(html_entity_decode(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (($tmp = @$_smarty_tpl->tpl_vars['title_alt']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['title']->value : $tmp)))), ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_sanitize_html((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "&nbsp;" : $tmp));?>
</h2>
            <?php }?>

            <!--mobile quick search-->
            <div class="mobile-visible pull-right search-mobile-group cm-search-mobile-group"
                data-ca-search-mobile-back="#search_mobile_back"
                data-ca-search-mobile-btn="#search_mobile_btn"
                data-ca-search-mobile-block="#search_mobile_block"
                data-ca-search-mobile-input="#gs_text_mobile"
            >
                <button class="btn search-mobile-btn" id="search_mobile_btn"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-search search-mobile-icon"),$_smarty_tpl);?>
</button>
                <div class="search search-mobile-block cm-search-mobile-search hidden" id="search_mobile_block">
                    <button class="search-mobile-back" type="button" id="search_mobile_back"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove"),$_smarty_tpl);?>
</button>
                    <button class="search_button search-mobile-button" type="submit" id="search_button_mobile" form="global_search"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-search"),$_smarty_tpl);?>
</button>
                    <label for="gs_text_mobile" class="search-mobile-label"><input type="text" class="cm-autocomplete-off search-mobile-input" id="gs_text_mobile" name="q" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" form="global_search" placeholder="<?php echo $_smarty_tpl->__("search");?>
" disabled /></label>
                </div>
            </div>
            <!--mobile end quick search-->

            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
            <!--language-->
            <span class="title__lang-selector mobile-visible">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'link_suffix'=>"descr_sl=",'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages btn",'disable_dropdown_processing'=>true), 0);?>

            </span>
            <!--end language-->
            <?php }?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/picker/presets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>$_smarty_tpl->tpl_vars['storefronts_picker_name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'show_empty_variant'=>$_smarty_tpl->tpl_vars['show_empty_variant']->value,'empty_variant_text'=>$_smarty_tpl->__("all_vendors"),'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value), 0);?>

            <?php }?>

            <div class="<?php if (isset($_smarty_tpl->tpl_vars['main_buttons_meta']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['main_buttons_meta']->value, ENT_QUOTES, 'UTF-8');
} else { ?>btn-bar btn-toolbar<?php }?> nav__actions-bar dropleft pull-right" <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?>id="tools_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_buttons"<?php }?>>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:toolbar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:toolbar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:toolbar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['actions']) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['title']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
                            <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['meta'], ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['target'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['title']->value);?>
</a></li>
                        <?php } ?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_actions'=>true,'tools_list'=>Smarty::$_smarty_vars['capture']['tools_list'],'link_text'=>$_smarty_tpl->__("choose_action")), 0);?>

                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['adv_buttons']->value) {?>
                <div class="adv-buttons" <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?>id="tools_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_adv_buttons"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['adv_buttons']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--tools_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_adv_buttons--><?php }?></div>
                <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--tools_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_buttons--><?php }?></div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <!--actions_panel--></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:actions_wrapper"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="admin-content-wrapper <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['mainbox_content_wrapper_class']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">

<!-- Sidebar left -->
<?php if (!$_smarty_tpl->tpl_vars['no_sidebar']->value&&trim($_smarty_tpl->tpl_vars['sidebar_content']->value)!=''&&$_smarty_tpl->tpl_vars['sidebar_position']->value=="left") {?>
<div class="sidebar sidebar-left cm-sidebar <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sidebar_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->__("sidebar");?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['sidebar_icon']->value)." sidebar-icon"),$_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->tpl_vars['sidebar_content']->value;?>

    </div>
<!--elm_sidebar--></div>
<?php }?>


<!--Content-->
<div class="content page-content <?php if ($_smarty_tpl->tpl_vars['no_sidebar']->value) {?> content-no-sidebar<?php }
if (trim($_smarty_tpl->tpl_vars['sidebar_content']->value)=='') {?> no-sidebar<?php }?> <?php if (fn_allowed_for("ULTIMATE")) {?>ufa<?php }?>" <?php if ($_smarty_tpl->tpl_vars['box_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <div class="content-wrap">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:content_top")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:content_top"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['select_languages']->value&&smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
            <div class="content-variant-wrap content-variant-wrap--language language-wrap">
                <h6 class="muted"><?php echo $_smarty_tpl->__("language");?>
:</h6>
                <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"descr_sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('DESCR_SL') ? constant('DESCR_SL') : null),'key_name'=>"name",'suffix'=>"content",'display_icons'=>true), 0);?>

                <?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['tools']->value) {
echo $_smarty_tpl->tpl_vars['tools']->value;
}?>

        <?php if ($_smarty_tpl->tpl_vars['title_extra']->value) {?><div class="title">-&nbsp;</div>
            <?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>

        <?php }?>

        <?php if (trim($_smarty_tpl->tpl_vars['extra_tools']->value)) {?>
            <div class="extra-tools">
                <?php echo $_smarty_tpl->tpl_vars['extra_tools']->value;?>

            </div>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:content_top"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['box_id']->value) {?><!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div>

<!--/Content-->


<!-- Sidebar -->
<?php if (!$_smarty_tpl->tpl_vars['no_sidebar']->value&&trim($_smarty_tpl->tpl_vars['sidebar_content']->value)!=''&&$_smarty_tpl->tpl_vars['sidebar_position']->value=="right") {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:right_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:right_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars['is_open_state_sidebar_save'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['is_open_state_sidebar_save']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<div class="sidebar cm-sidebar<?php if ($_smarty_tpl->tpl_vars['is_open_state_sidebar_save']->value) {?> cm-sidebar-open-state-save<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sidebar_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->__("sidebar");?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['sidebar_icon']->value)." sidebar-icon"),$_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->tpl_vars['sidebar_content']->value;?>

    </div>
<!--elm_sidebar--></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:right_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    var ajax_callback_data = menu_content;
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/sidebar.js"),$_smarty_tpl);?>

<?php }} ?>
