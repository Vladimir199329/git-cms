<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4547910561c89800a844c7-36938546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adb436946d8d98af146337cc44fd03b4d9f85666' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/hooks/products/tabs_extra.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4547910561c89800a844c7-36938546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_allowed_to_view_product_reviews' => 0,
    'selected_section' => 0,
    'product_reviews_rating_stats' => 0,
    'product_data' => 0,
    'product_reviews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800a90ce8_24393286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800a90ce8_24393286')) {function content_61c89800a90ce8_24393286($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['is_allowed_to_view_product_reviews']->value) {?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_reviews") {?>hidden<?php }?>" id="content_product_reviews">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product_reviews_rating_stats']->value['ratings'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews_rating_stats']->value['total'],'average_rating'=>$_smarty_tpl->tpl_vars['product_data']->value['average_rating']), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value,'object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'show_product'=>false), 0);?>

    </div>
<?php }?>

<?php }} ?>
