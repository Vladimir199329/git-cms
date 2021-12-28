<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49659072761c89800a92c12-10868202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e3baad09b7b1980a935cd5c04b9038b5a20cf9' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '49659072761c89800a92c12-10868202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_product_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800a9db82_59285517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800a9db82_59285517')) {function content_61c89800a9db82_59285517($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="cs-product-reviews-rating-product-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'meta'=>"muted"), 0);?>


    </section>
<?php }?>
<?php }} ?>
