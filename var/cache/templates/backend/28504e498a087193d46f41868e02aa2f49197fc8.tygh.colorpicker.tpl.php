<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:52:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142019421261c89dd1736775-14933238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28504e498a087193d46f41868e02aa2f49197fc8' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/colorpicker.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '142019421261c89dd1736775-14933238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_meta' => 0,
    'cp_attrs' => 0,
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
    'show_picker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89dd1742fe4_78946157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89dd1742fe4_78946157')) {function content_61c89dd1742fe4_78946157($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
?><div class="colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo smarty_modifier_render_tag_attrs((($tmp = @$_smarty_tpl->tpl_vars['cp_attrs']->value)===null||$tmp==='' ? array() : $tmp));?>
>
    <input
        type="hidden"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['show_picker']->value) {?>data-ca-spectrum-show-initial="true"<?php } else { ?>data-ca-view="palette"<?php }?>
        class="cm-colorpicker"
    >
</div><?php }} ?>
