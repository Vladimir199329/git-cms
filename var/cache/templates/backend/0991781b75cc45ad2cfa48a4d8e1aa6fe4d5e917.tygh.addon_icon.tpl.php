<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 23:41:40
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/addons/components/addons/addon_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58086163461c8d384d11a16-27040830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0991781b75cc45ad2cfa48a4d8e1aa6fe4d5e917' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/addons/components/addons/addon_icon.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '58086163461c8d384d11a16-27040830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon_large' => 0,
    'ICON_SIZE_MEDIUM' => 0,
    'ICON_SIZE_LARGE' => 0,
    'addon' => 0,
    'size' => 0,
    'show_description' => 0,
    'addon_full_description' => 0,
    'href' => 0,
    'selected_storefront_id' => 0,
    'images_dir' => 0,
    'image_dir_path' => 0,
    'icon_width' => 0,
    'icon_class' => 0,
    'LABEL_LENGTH' => 0,
    'wrapper_class' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8d384d744a3_92633145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8d384d744a3_92633145')) {function content_61c8d384d744a3_92633145($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.truncate.php';
?>


<?php $_smarty_tpl->tpl_vars['LABEL_LENGTH'] = new Smarty_variable(2, null, 0);?>
<?php $_smarty_tpl->tpl_vars['ICON_SIZE_MEDIUM'] = new Smarty_variable(60, null, 0);?>
<?php $_smarty_tpl->tpl_vars['ICON_SIZE_LARGE'] = new Smarty_variable(192, null, 0);?>


<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable($_smarty_tpl->tpl_vars['icon_large']->value ? "large" : "medium", null, 0);?>
<?php $_smarty_tpl->tpl_vars['icon_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['icon_large']->value ? $_smarty_tpl->tpl_vars['ICON_SIZE_LARGE']->value : $_smarty_tpl->tpl_vars['ICON_SIZE_MEDIUM']->value, null, 0);?>


<?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("addons-addon-icon__wrapper addons-addon-icon__wrapper--".((string)mb_strtolower($_smarty_tpl->tpl_vars['addon']->value['status'], 'UTF-8'))." addons-addon-icon__wrapper--".((string)$_smarty_tpl->tpl_vars['size']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_description']->value ? $_smarty_tpl->tpl_vars['addon_full_description']->value : '', null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['href']->value===true&&fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_link_attach(fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])),"storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value)), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['href']->value===true) {?>
    <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])), null, 0);?>
<?php }?>


<?php $_smarty_tpl->tpl_vars['image_dir_path'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/addons/".((string)$_smarty_tpl->tpl_vars['addon']->value['addon']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['icon_class'] = new Smarty_variable("addons-addon-icon__image addons-addon-icon__image--".((string)mb_strtolower($_smarty_tpl->tpl_vars['addon']->value['status'], 'UTF-8'))." addons-addon-icon__image--".((string)$_smarty_tpl->tpl_vars['size']->value), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("icon", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
        <picture>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_svg_icon']) {?>
                <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.svg" type="image/svg+xml">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_avif_icon']) {?>
                <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.avif" type="image/avif">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_webp_icon']) {?>
                <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.webp" type="image/webp">
            <?php }?>
            <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.png" type="image/png"> 
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.png"
                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_width']->value, ENT_QUOTES, 'UTF-8');?>
"
                height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_width']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
        </picture>
    <?php } else { ?>
        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
 addons-addon-icon__image--label">
            <?php echo htmlspecialchars(smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['addon']->value['name'], 'UTF-8'),$_smarty_tpl->tpl_vars['LABEL_LENGTH']->value,''), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['href']->value) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 addons-addon-icon__wrapper--link"
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
    >
        <?php echo Smarty::$_smarty_vars['capture']['icon'];?>

    </a>
<?php } else { ?>
    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
    >
        <?php echo Smarty::$_smarty_vars['capture']['icon'];?>

    </div>
<?php }?>
<?php }} ?>
