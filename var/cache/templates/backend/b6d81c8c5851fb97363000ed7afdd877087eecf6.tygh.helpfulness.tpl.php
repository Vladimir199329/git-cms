<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75597316561c8c7476070a4-76340350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d81c8c5851fb97363000ed7afdd877087eecf6' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75597316561c8c7476070a4-76340350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helpfulness' => 0,
    'size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c74762c452_05287229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c74762c452_05287229')) {function content_61c8c74762c452_05287229($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.helpfulness','product_reviews.vote_up','product_reviews.vote_down'));
?>


<?php if ($_smarty_tpl->tpl_vars['helpfulness']->value) {?>

    <span title="<?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['helpfulness'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_up");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_down");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>
"
        class="
            <?php if ($_smarty_tpl->tpl_vars['size']->value==="small") {?>
                slashed-child
            <?php } else { ?>
                spaced-child
            <?php }?>
        "
    >

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value!=="small") {?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-thumbs-up muted"),$_smarty_tpl);?>

            <?php }?>
            <span class="text-success">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up']>0) {?>+<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value!=="small") {?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-thumbs-down muted"),$_smarty_tpl);?>

            <?php }?>
            <span class="text-error">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down']>0) {?>−<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

    </span>
<?php }?>
<?php }} ?>
