<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:48:26
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116111619061c8c70ad340c4-00323208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40d010f4479cbc24b21c3a63f2481c73fc9eaaa' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '116111619061c8c70ad340c4-00323208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c70ad3adc9_02144584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c70ad3adc9_02144584')) {function content_61c8c70ad3adc9_02144584($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
