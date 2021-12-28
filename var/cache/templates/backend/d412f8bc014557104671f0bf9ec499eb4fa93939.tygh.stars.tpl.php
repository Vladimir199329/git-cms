<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89864352661c8c7474b4589-84555260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd412f8bc014557104671f0bf9ec499eb4fa93939' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '89864352661c8c7474b4589-84555260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rating' => 0,
    'integer_rating' => 0,
    'is_half_rating' => 0,
    'integer_rating_math' => 0,
    'scroll_to_elm' => 0,
    'external_click_id' => 0,
    'accurate_rating' => 0,
    'total_product_reviews' => 0,
    'link' => 0,
    'product_data' => 0,
    'size' => 0,
    'type' => 0,
    'without_empty_stars' => 0,
    'flip' => 0,
    'full_stars_count' => 0,
    'button' => 0,
    'title' => 0,
    'meta' => 0,
    'show_reviews_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c74751b329_33536611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c74751b329_33536611')) {function content_61c8c74751b329_33536611($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_n_reviews','product_reviews.show_review','product_reviews.scroll_to_reviews'));
?>


<?php if ($_smarty_tpl->tpl_vars['rating']->value>0) {?>
    <?php $_smarty_tpl->tpl_vars['integer_rating'] = new Smarty_variable(floor($_smarty_tpl->tpl_vars['rating']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['accurate_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,1), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['is_half_rating'] = new Smarty_variable((($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value)>=0.25&&($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value)<0.75), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['integer_rating_math'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,0), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['full_stars_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['is_half_rating']->value ? $_smarty_tpl->tpl_vars['integer_rating']->value : $_smarty_tpl->tpl_vars['integer_rating_math']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("product_reviews.product_is_rated_n_out_of_five_stars",array($_smarty_tpl->tpl_vars['accurate_rating']->value)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
        <?php $_smarty_tpl->tpl_vars['show_reviews_text'] = new Smarty_variable($_smarty_tpl->__("product_reviews.show_n_reviews",array($_smarty_tpl->tpl_vars['total_product_reviews']->value)), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['show_reviews_text'] = new Smarty_variable($_smarty_tpl->__("product_reviews.show_review"), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])."&selected_section=product_reviews", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("stars", null, null); ob_start(); ?>
        <span class="cs-product-reviews-rating-stars
            <?php if ($_smarty_tpl->tpl_vars['size']->value==="small") {?>
                cs-product-reviews-rating-stars--small
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value==="large") {?>
                cs-product-reviews-rating-stars--large
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value==="xlarge") {?>
                cs-product-reviews-rating-stars--xlarge
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value==="secondary") {?>
                cs-product-reviews-rating-stars--secondary
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['without_empty_stars']->value) {?>
                cs-product-reviews-rating-stars--without-empty-stars
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['flip']->value) {?>
                cs-product-reviews-rating-stars--flip
            <?php }?>
            "
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accurate_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['full_stars_count']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_half_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!$_smarty_tpl->tpl_vars['link']->value&&!$_smarty_tpl->tpl_vars['button']->value) {?>
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        ></span>        
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a class="cs-product-reviews-rating-stars__link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
. <?php echo $_smarty_tpl->tpl_vars['show_reviews_text']->value;?>
"
        >
            <?php echo Smarty::$_smarty_vars['capture']['stars'];?>

        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="cs-product-reviews-rating-stars__button cs-btn-reset cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
. <?php echo $_smarty_tpl->__("product_reviews.scroll_to_reviews");?>
"
        >
            <?php echo Smarty::$_smarty_vars['capture']['stars'];?>

        </button>
    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['stars'];?>

    <?php }?>

<?php }?>
<?php }} ?>
