<?php /* Smarty version Smarty-3.1.21, created on 2021-12-25 19:18:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/last_viewed_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183445157761c74459dffd94-98549339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f83354668369acc5a0263e5aea5ec461f486e8' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/last_viewed_items.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '183445157761c74459dffd94-98549339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_last_viewed_items' => 0,
    'breadcrumbs' => 0,
    'bc' => 0,
    'last_edited_items' => 0,
    'lnk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c74459e2d996_10308333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c74459e2d996_10308333')) {function content_61c74459e2d996_10308333($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_sizeof')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.sizeof.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
?>
<?php $_smarty_tpl->tpl_vars['show_last_viewed_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_last_viewed_items']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<div class="btn-group" id="last_edited_items">
    <a class="btn cm-back-link"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-arrow-left"),$_smarty_tpl);?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['show_last_viewed_items']->value) {?>
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>=1) {?>
            <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?>
                    <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php } else { ?>
                    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php } ?>
            <li class="divider"></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['last_edited_items']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['lnk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_edited_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lnk']->key => $_smarty_tpl->tpl_vars['lnk']->value) {
$_smarty_tpl->tpl_vars['lnk']->_loop = true;
?>
                <li><a <?php if ($_smarty_tpl->tpl_vars['lnk']->value['icon']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lnk']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['lnk']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']), ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']),40);?>
</a></li>
            <?php } ?>
        <?php } else { ?>
            <li><a><?php echo $_smarty_tpl->__("no_items");?>
</a></li>
        <?php }?>
        </ul>
    <?php }?>
<!--last_edited_items--></div>
<?php }} ?>
