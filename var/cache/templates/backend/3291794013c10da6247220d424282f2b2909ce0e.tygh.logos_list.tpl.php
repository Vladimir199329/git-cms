<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:41:20
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/themes/components/logos_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16756801161c89b30058242-16230489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3291794013c10da6247220d424282f2b2909ce0e' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/themes/components/logos_list.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16756801161c89b30058242-16230489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default_layout_name' => 0,
    'logos' => 0,
    'show_all_logos' => 0,
    'type' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89b30077f77_33129604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89b30077f77_33129604')) {function content_61c89b30077f77_33129604($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('logos','show_extra_logos','theme_editor.favicon_size','hide_extra_logos'));
?>
<div class="logos-section">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_logos_form" id="update_logos_form" enctype="multipart/form-data">
        <div class="row-fluid">
            <div class="span12" id="title_theme_logo">
                <h4><?php if ($_smarty_tpl->tpl_vars['default_layout_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['default_layout_name']->value, ENT_QUOTES, 'UTF-8');?>
: <?php }
echo $_smarty_tpl->__("logos");?>
</h4>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("views/themes/components/logo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"theme",'logo'=>$_smarty_tpl->tpl_vars['logos']->value['theme']), 0);?>

        <div class="row-fluid">
            <div class="span12">
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['show_all_logos']->value) {?><?php echo " hidden";?><?php }
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("show_extra_logos"),'but_role'=>"action",'but_id'=>"on_attach_additional_logos",'but_meta'=>"cm-combination ".$_tmp1), 0);?>

            </div>
        </div>
        <div id="attach_additional_logos" name="attach_additional_logos"<?php if (!$_smarty_tpl->tpl_vars['show_all_logos']->value) {?> class="hidden"<?php }?>>
            <?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['logo']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value=="theme") {?>
                    <?php continue 1;?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/themes/components/logo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_smarty_tpl->tpl_vars['type']->value,'logo'=>$_smarty_tpl->tpl_vars['logo']->value,'show_alt'=>($_smarty_tpl->tpl_vars['type']->value!="favicon"),'show_hidpi_checkbox'=>($_smarty_tpl->tpl_vars['type']->value!="favicon"),'description'=>$_smarty_tpl->tpl_vars['type']->value=="favicon" ? $_smarty_tpl->__("theme_editor.favicon_size") : ''), 0);?>

            <?php } ?>
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("hide_extra_logos"),'but_role'=>"action",'but_id'=>"off_attach_additional_logos",'but_meta'=>"cm-combination"), 0);?>

                </div>
            </div>
        </div>
    </form>
</div>
<?php }} ?>
