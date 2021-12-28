<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:34
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110052999461c7445a03e7e9-38916554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daaa390f01210c61cb43276a0588869ee79cb11d' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/menu.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '110052999461c7445a03e7e9-38916554',
  'function' => 
  array (
    'menu_attrs' => 
    array (
      'parameter' => 
      array (
        'attrs' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'navigation_accordion' => 0,
    'enable_onclick_menu' => 0,
    'enable_sticky_scroll' => 0,
    'enable_search_collapse' => 0,
    'show_company' => 0,
    'show_menu_descriptions' => 0,
    'show_menu_caret' => 0,
    'show_addon_icon' => 0,
    'show_languages_in_header_menu' => 0,
    'show_currencies_in_header_menu' => 0,
    'attrs' => 0,
    'attr' => 0,
    'value' => 0,
    'menu_languages' => 0,
    'config' => 0,
    'currencies' => 0,
    'secondary_currency' => 0,
    'sticky_top' => 0,
    'sticky_padding' => 0,
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
    'storefront_url' => 0,
    'title' => 0,
    'app' => 0,
    'storefront_id' => 0,
    'storefront_status_icon' => 0,
    'company_name' => 0,
    'navigation' => 0,
    'first_level_title' => 0,
    'm' => 0,
    'second_level' => 0,
    'second_level_title' => 0,
    'sm' => 0,
    'subitem_title' => 0,
    'user_info' => 0,
    'companies_picker_name' => 0,
    'id_prefix' => 0,
    'onclick' => 0,
    'is_active_menu_class' => 0,
    'is_active_submenu_class' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c7445a3e4106_82651596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c7445a3e4106_82651596')) {function content_61c7445a3e4106_82651596($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_sizeof')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.sizeof.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_vendors','no_active_storefronts','view_storefront','storefront','view_storefront','vendor','signed_in_as','edit_profile','log_in_as_vendor','sign_out','feedback_values','send_feedback','search','home','close','signed_in_as','edit_profile','sign_out','manage_stores','feedback_values','send_feedback','view_storefront','view_storefront','view_storefront','view_storefront','home','language','currency','go_back'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:general")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:general"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php if (defined("THEMES_PANEL")) {?>
        <?php $_smarty_tpl->tpl_vars['sticky_top'] = new Smarty_variable(-5, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['sticky_padding'] = new Smarty_variable(35, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['sticky_top'] = new Smarty_variable(-40, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['sticky_padding'] = new Smarty_variable(0, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['navigation_accordion'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['navigation_accordion']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_onclick_menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_onclick_menu']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_sticky_scroll'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_sticky_scroll']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_search_collapse'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_search_collapse']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_company'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_company']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_menu_descriptions'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_menu_descriptions']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_menu_caret'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_menu_caret']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_addon_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_addon_icon']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_languages_in_header_menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_currencies_in_header_menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <?php if (!function_exists('smarty_template_function_menu_attrs')) {
    function smarty_template_function_menu_attrs($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu_attrs']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attrs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['attr']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attr']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php } ?>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("languages_menu", null, null); ob_start(); ?>
        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value)>1) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['menu_languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages",'is_submenu'=>!$_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value), 0);?>

            <?php }?>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("currencies_menu", null, null); ob_start(); ?>
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code",'class'=>"curriencies",'is_submenu'=>!$_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="navbar-admin-top <?php if ($_smarty_tpl->tpl_vars['enable_sticky_scroll']->value) {?>cm-sticky-scroll<?php }?>" data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd" data-ca-top="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_top']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-padding="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_padding']->value, ENT_QUOTES, 'UTF-8');?>
">
        <!--Navbar-->
        <div class="navbar navbar-inverse mobile-hidden" id="header_navbar">
            <div class="navbar-inner<?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed']||$_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?> navbar-inner--disabled<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']) {?>
                <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], null, 0);?>
            <?php }?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed']||$_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                    <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-lock", null, 0);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {?>
                    <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-unlock-alt", null, 0);?>
                <?php }?>

                <div class="nav-ult">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:storefront_icon")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:storefront_icon"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']) {?>
                            <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->__("all_vendors"), null, 0);?>
                        <?php }?>
                    <li class="nav-company">
                        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                            <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("no_active_storefronts"), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("view_storefront"), null, 0);?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"), null, 0);?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="brand" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-shopping-cart"),$_smarty_tpl);?>

                        </a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:storefront_icon"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['forced_company_id']) {?>
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("storefront");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        </ul>
                    <?php }?>
                </div>
            <?php }?>

            <?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                    <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-lock", null, 0);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {?>
                    <?php $_smarty_tpl->tpl_vars['storefront_status_icon'] = new Smarty_variable("icon-unlock-alt", null, 0);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
                    <?php if ($_REQUEST['storefront_id']) {?>
                        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_REQUEST['storefront_id'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, null, 0);?>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_company']->value) {?>
                    <ul class="nav">
                        <li class="nav-company">
                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {?><?php echo "&storefront_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;?><?php }
$_tmp17=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C".$_tmp17), null, 0);?>
                            <?php } else { ?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {?><?php echo "&storefront_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;?><?php }
$_tmp18=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'] ? "companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id']).$_tmp18 : '', null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['storefront_url']->value,"C"), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key']) {?>
                                    <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['storefront_url']->value,"store_access_key=".((string)$_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key'])), null, 0);?>
                                <?php }?>
                            <?php }?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="brand" title="<?php echo $_smarty_tpl->__("view_storefront");?>
">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-shopping-cart"),$_smarty_tpl);?>

                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['storefront_status_icon']->value&&fn_check_view_permissions("storefronts.manage","GET")) {?>
                            <a href="<?php echo htmlspecialchars(fn_url("storefronts.manage"), ENT_QUOTES, 'UTF-8');?>
" class="brand">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['storefront_status_icon']->value)." dropdown-menu__icon"),$_smarty_tpl);?>

                            </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
                                <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable(smarty_modifier_truncate($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'],43,"...",true), null, 0);?>
                            <?php }?>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['company_id']) {?>
                            <li class="dropdown nav__company-name">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_check_view_permissions("companies.update","GET")) {?>
                            <li class="dropdown">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <li class="dropdown">
                                <a class="unedited-element"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        <?php }?>
                    </ul>
                <?php }?>
            <?php }?>

                <ul id="mainrightnavbar" class="nav hover-show navbar-right">
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['navigation']->value['static']) {?>

                    <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['static']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level_title']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
                        <li class="dropdown dropdown-top-menu-item<?php if ($_smarty_tpl->tpl_vars['first_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?> navigate-items">
                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>" class="dropdown-toggle <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value);?>

                                <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                                    <b class="caret"></b>
                                <?php }?>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                            <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars["second_level"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["second_level"]->_loop = false;
 $_smarty_tpl->tpl_vars['second_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["second_level"]->key => $_smarty_tpl->tpl_vars["second_level"]->value) {
$_smarty_tpl->tpl_vars["second_level"]->_loop = true;
 $_smarty_tpl->tpl_vars['second_level_title']->value = $_smarty_tpl->tpl_vars["second_level"]->key;
?>
                                    <li class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu<?php }
if ($_smarty_tpl->tpl_vars['second_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']));?>
>
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="title") {?>
                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu__link<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');
}?>" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
>
                                                <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']==="is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                            </a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['second_level']->value['type']!="divider") {?>
                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu__link<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
>
                                                <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']==="is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                            <ul class="dropdown-menu">
                                                <?php  $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm']->_loop = false;
 $_smarty_tpl->tpl_vars['subitem_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['second_level']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->key => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->_loop = true;
 $_smarty_tpl->tpl_vars['subitem_title']->value = $_smarty_tpl->tpl_vars['sm']->key;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']!="divider") {?>
                                                    <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']));?>
>
                                                        <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']=="title") {?>
                                                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sm']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                        <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type']!="divider") {?>
                                                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subitem_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['sm']->value['attrs']['class']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']));?>
>
                                                                <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sm']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                                <?php if ($_smarty_tpl->tpl_vars['sm']->value['attrs']['class']==="is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                                            </a>
                                                        <?php }?>
                                                    </li>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type']=="divider") {?>
                                                        <li class="divider"></li>
                                                    <?php }?>
                                                <?php } ?>
                                            </ul>
                                        <?php }?>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="divider") {?>
                                        <li class="divider"></li>
                                    <?php }?>
                                <?php } ?>
                            </ul>
                            <?php }?>
                        </li>
                    <?php } ?>
                <?php }?>
                    <!-- end navbar-->

                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>

                    <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value)>1||smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                        <li class="divider-vertical"></li>
                    <?php }?>

                    <!--language-->
                    <?php if ($_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value) {?>
                        <?php echo Smarty::$_smarty_vars['capture']['languages_menu'];?>

                    <?php }?>
                    <!--end language-->

                    <!-- Notification Center -->
                        <?php echo $_smarty_tpl->getSubTemplate ("components/notifications_center/opener.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <!-- /Notification Center -->

                    <!--Curriencies-->
                        <?php if ($_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value) {?>
                            <?php echo Smarty::$_smarty_vars['capture']['currencies_menu'];?>

                        <?php }?>
                    <!--end curriencies-->

                    <li class="divider-vertical"></li>

                    <!-- user menu -->
                    <li class="dropdown dropdown-top-menu-item dropdown--open-enable nav__user-menu<?php if ($_smarty_tpl->tpl_vars['enable_onclick_menu']->value) {?> hover-show--disabled<?php }?>">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:top_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:top_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a class="dropdown-toggle dropdown-top-menu-item-link nav__user-menu-link"
                                <?php if ($_smarty_tpl->tpl_vars['enable_onclick_menu']->value) {?> data-toggle="dropdown"<?php }?>
                            >
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-user nav__profile-icon"),$_smarty_tpl);?>

                                <span class="nav__profile-text">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                                <?php if ($_smarty_tpl->tpl_vars['show_menu_caret']->value) {?>
                                    <b class="caret"></b>
                                <?php }?>
                            </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:top_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <ul class="dropdown-menu pull-right nav__user-menu-dropdown">
                            <li class="disabled">
                                <a><strong><?php echo $_smarty_tpl->__("signed_in_as");?>
</strong><br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                            <li class="divider"></li>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:profile")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if (!$_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value) {?>
                                <?php echo Smarty::$_smarty_vars['capture']['languages_menu'];?>

                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value) {?>
                                <?php echo Smarty::$_smarty_vars['capture']['currencies_menu'];?>

                            <?php }?>
                            <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_profile");?>
</a></li>
                            <?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")&&fn_check_view_permissions("companies.get_companies_list","GET")&&fn_check_view_permissions("profiles.login_as_vendor","POST")) {?>
                                <li id="company_picker_dropdown_menu"
                                    class="js-company-switcher"
                                    data-ca-switcher-param-name="company_id"
                                    data-ca-switcher-data-name="company_id">
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>$_smarty_tpl->tpl_vars['companies_picker_name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'type'=>"list",'show_advanced'=>false,'selection_title_pre'=>$_smarty_tpl->__("log_in_as_vendor"),'dropdown_parent_selector'=>"#company_picker_dropdown_menu"), 0);?>

                                </li>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:profile_menu_extra_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:profile_menu_extra_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:profile_menu_extra_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <li><a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_out");?>
</a></li>
                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                <li class="divider"></li>
                                <li>
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."feedback",'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->__("feedback_values"),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->__("send_feedback",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'content'=>Smarty::$_smarty_vars['capture']['update_block'],'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), 0);?>

                                </li>
                            <?php }?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:profile"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </li>
                    <!--end user menu -->
                <?php }?>
                </ul>

            </div>
        <!--header_navbar--></div>

        <!--Subnav-->
        <div class="subnav header-subnav" id="header_subnav">
            <!--quick search-->
            <div class="search nav__search pull-right">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:global_search")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:global_search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <form id="global_search" method="get" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="search__form">
                        <input type="hidden" name="dispatch" value="search.results" />
                        <input type="hidden" name="compact" value="Y" />
                        <label for="gs_text" class="search__group">
                            <input type="text" class="cm-autocomplete-off search__input <?php if ($_smarty_tpl->tpl_vars['enable_search_collapse']->value) {?>search__input--collapse<?php }?>" id="gs_text" name="q" placeholder="<?php echo $_smarty_tpl->__("search");?>
" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" />
                            <button class="btn search__button" type="submit" id="search_button"></button>
                        </label>
                    </form>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:global_search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </div>
            <!--end quick search-->

            <!-- quick menu -->
            <?php echo $_smarty_tpl->getSubTemplate ("common/quick_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- end quick menu -->

            <ul class="nav nav__menu hover-show nav-pills">
                <li class="mobile-hidden nav__header-main-menu-item">
                    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="home nav__menu-item">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-home nav__home-icon"),$_smarty_tpl);?>

                        <span class="nav__home-text"><?php echo $_smarty_tpl->__("home");?>
</span>
                    </a>
                </li>

                <div class="menu-heading mobile-visible">

                    <button class="btn btn-primary mobile-visible-inline mobile-menu-closer"><?php echo $_smarty_tpl->__("close");?>
</button>


                    <!-- title of heading -->
                    <div class="menu-heading__title-block">
                        <span class="menu-heading__title-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="caret menu-heading__title-caret"></span>
                    </div>

                    <div class="menu-heading__dropdowned closed">
                    <ul class="dropdown-menu menu-heading__dropdowned-menu">
                        
                        <li class="disabled">
                            <a><strong><?php echo $_smarty_tpl->__("signed_in_as");?>
</strong><br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                        <li class="divider"></li>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"menu:profile")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_profile");?>
</a></li>
                            <li><a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_out");?>
</a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:profile"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        

                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <?php if (fn_check_view_permissions("companies.manage","GET")) {?>
                                <li class="divider"></li>
                                <li><a href="<?php echo htmlspecialchars(fn_url("companies.manage?switch_company_id=0"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_stores");?>
...</a></li>
                            <?php }?>
                        <?php }?>

                        
                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <li class="divider"></li>
                            <li>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."feedback",'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->__("feedback_values"),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->__("send_feedback",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'content'=>Smarty::$_smarty_vars['capture']['update_block'],'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), 0);?>

                            </li>
                        <?php }?>
                        
                    </ul>
                    </div>
                </div>

                <ul class="nav hover-show nav-pills nav-child mobile-visible nav-first">
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['storefront']) {?>
                    <li class="dropdown">
                        <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"), null, 0);?>
                        <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                            target="_blank"
                            title="<?php echo $_smarty_tpl->__("view_storefront");?>
"
                            class="dropdown-toggle"
                        ><?php echo $_smarty_tpl->__("view_storefront");?>
</a>
                    </li>
                <?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
                    <li class="dropdown">
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
                            <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_url('',"C"), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key']) {?>
                                <?php $_smarty_tpl->tpl_vars['storefront_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['storefront_url']->value,"store_access_key=".((string)$_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key'])), null, 0);?>
                            <?php }?>
                        <?php }?>
                        <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                            target="_blank"
                            title="<?php echo $_smarty_tpl->__("view_storefront");?>
"
                            class="dropdown-toggle"
                        ><?php echo $_smarty_tpl->__("view_storefront");?>
</a>
                    </li>
                <?php }?>
                    <li class="dropdown"><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle"><?php echo $_smarty_tpl->__("home");?>
</a></li>
                </ul>

                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['navigation']->value['static']['central']) {?>
                <hr class="mobile-visible navbar-hr" />
                <ul class="nav hover-show nav-pills nav-child nav__header-main-menu" id="header_main_menu">

                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['static']['central']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level_title']->value = $_smarty_tpl->tpl_vars['m']->key;
?>

                    <?php $_smarty_tpl->tpl_vars['is_active_menu_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['first_level_title']->value===$_smarty_tpl->tpl_vars['navigation']->value['selected_tab'] ? "active" : '', null, 0);?>

                    <li
                        <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                            class="accordion-group nav__header-main-menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            class="dropdown nav__header-main-menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                    >
                        <a href="<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');
}?>"
                            <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value&&$_smarty_tpl->tpl_vars['m']->value['items']) {?>
                                data-toggle="collapse" data-parent="#header_main_menu" class="nav__menu-item nav__menu-item--accordion <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                                class="dropdown-toggle nav__menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php } else { ?>
                                class="nav__menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                        >
                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['m']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['m']->value['items']&&$_smarty_tpl->tpl_vars['show_menu_caret']->value) {?>
                                <b class="caret"></b>
                            <?php }?>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                        <ul
                            <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                                class="collapse nav__header-main-menu-submenu <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['first_level_title']->value===$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?>
                                        in
                                    <?php }?>
                                "
                            <?php } else { ?>
                                class="dropdown-menu nav__header-main-menu-submenu <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            id="<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');
}?>"
                        >
                            <?php  $_smarty_tpl->tpl_vars['second_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['second_level']->_loop = false;
 $_smarty_tpl->tpl_vars['second_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['second_level']->key => $_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['second_level']->_loop = true;
 $_smarty_tpl->tpl_vars['second_level_title']->value = $_smarty_tpl->tpl_vars['second_level']->key;
?>

                                <?php $_smarty_tpl->tpl_vars['is_active_submenu_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['second_level_title']->value===$_smarty_tpl->tpl_vars['navigation']->value['subsection']&&$_smarty_tpl->tpl_vars['first_level_title']->value===$_smarty_tpl->tpl_vars['navigation']->value['selected_tab'] ? "active" : '', null, 0);?>

                                <li <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']));?>

                                    <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                                        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
 accordion-group nav__header-main-menu-subitem <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php } else { ?>
                                        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
 nav__header-main-menu-subitem
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?> dropdown-submenu<?php }?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>

                                        "
                                    <?php }?>
                                >
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']&&!$_smarty_tpl->tpl_vars['navigation_accordion']->value) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                    <a <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>

                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>
                                            class="cm-promo-popup nav__menu-subitem"
                                        <?php } elseif ($_smarty_tpl->tpl_vars['navigation_accordion']->value&&$_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                            href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_second_level"
                                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
 nav__menu-subitem nav__menu-subitem--accordion <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            data-toggle="collapse"
                                            data-parent="#<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');
}?>"
                                        <?php } else { ?>
                                            href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
 nav__menu-subitem
                                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                                    dropdown-submenu__link
                                                <?php }?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>

                                            "
                                        <?php }?>
                                    >
                                        <span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']==="is-addon"&&$_smarty_tpl->tpl_vars['show_addon_icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?></span>
                                        <?php if ($_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level']->value['description'])!="_".((string)$_smarty_tpl->tpl_vars['second_level_title']->value)."_menu_description") {
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_menu_descriptions']==="Y"&&$_smarty_tpl->tpl_vars['show_menu_descriptions']->value) {?><span class="hint"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level']->value['description']);?>
</span><?php }
}?>
                                    </a>

                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                        <ul
                                            <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                                                class="collapse
                                                    <?php if ($_smarty_tpl->tpl_vars['second_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['subsection']&&$_smarty_tpl->tpl_vars['first_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?>
                                                        in
                                                    <?php }?>
                                                "
                                            <?php } else { ?>
                                                class="dropdown-menu"
                                            <?php }?>
                                            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_second_level"
                                        >
                                            <?php  $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm']->_loop = false;
 $_smarty_tpl->tpl_vars['subitem_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['second_level']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->key => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->_loop = true;
 $_smarty_tpl->tpl_vars['subitem_title']->value = $_smarty_tpl->tpl_vars['sm']->key;
?>
                                                <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']));?>
><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']));?>
><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sm']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></li>
                                            <?php } ?>
                                        </ul>
                                    <?php }?>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php }?>
                    </li>
                <?php } ?>
                </ul>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['navigation']->value['static']['top']) {?>
                <hr class="mobile-visible navbar-hr" />
                <ul class="nav hover-show nav-pills nav-child mobile-visible">
                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['static']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level_title']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
                    <li class="dropdown dropdown-top-menu-item<?php if ($_smarty_tpl->tpl_vars['first_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?> navigate-items">
                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="#" class="dropdown-toggle <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value);?>

                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars["second_level"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["second_level"]->_loop = false;
 $_smarty_tpl->tpl_vars['second_level_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["second_level"]->key => $_smarty_tpl->tpl_vars["second_level"]->value) {
$_smarty_tpl->tpl_vars["second_level"]->_loop = true;
 $_smarty_tpl->tpl_vars['second_level_title']->value = $_smarty_tpl->tpl_vars["second_level"]->key;
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu<?php }
if ($_smarty_tpl->tpl_vars['second_level_title']->value==$_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']));?>
>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="title") {?>
                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['second_level']->value['type']!="divider") {?>
                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']));?>
>
                                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class']==="is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                        <ul class="dropdown-menu">
                                            <?php  $_smarty_tpl->tpl_vars['sm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sm']->_loop = false;
 $_smarty_tpl->tpl_vars['subitem_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['second_level']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sm']->key => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->_loop = true;
 $_smarty_tpl->tpl_vars['subitem_title']->value = $_smarty_tpl->tpl_vars['sm']->key;
?>
                                                <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']));?>
>
                                                    <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']=="title") {?>
                                                        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sm']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type']!="divider") {?>
                                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subitem_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php smarty_template_function_menu_attrs($_smarty_tpl,array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']));?>
><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sm']->value['title'])===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                                                    <?php }?>
                                                </li>
                                                <?php if ($_smarty_tpl->tpl_vars['sm']->value['type']=="divider") {?>
                                                    <li class="divider"></li>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    <?php }?>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type']=="divider") {?>
                                    <li class="divider"></li>
                                <?php }?>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                </ul>
                <?php }?>

                <hr class="mobile-visible navbar-hr" />
                <ul class="nav hover-show nav-pills nav-child mobile-visible">
                    <!--language-->
                    <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value)>1) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['menu_languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages",'plain_name'=>$_smarty_tpl->__("language")), 0);?>

                    <?php }?>
                    <!--end language-->

                    <!--curriencies-->
                    <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code",'plain_name'=>$_smarty_tpl->__("currency")), 0);?>

                    <?php }?>
                    <!--end curriencies-->
                </ul>
                <hr class="mobile-visible navbar-hr" />

            </ul>
        <!--header_subnav--></div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
        
        <div class="overlayed-mobile-menu mobile-visible">
            <div class="overlayed-mobile-menu__content">
                <div class="overlayed-mobile-menu__title-container">
                    <h3 class="overlayed-mobile-menu-title"></h3>
                </div>

                <div class="overlayed-mobile-menu-closer">
                    <button class="mobile-visible-inline overlay-navbar-close btn btn-primary"><?php echo $_smarty_tpl->__("go_back");?>
</button>
                </div>
            </div>

            <div class="overlayed-mobile-menu__content">
            </div>
            <div class="overlayed-mobile-menu-container"></div>
        </div>
        
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"menu:general"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
