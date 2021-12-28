<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84286025561c8c74746e1f2-26916500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c42e26f634c79996b0916647d287c3395841e0a' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '84286025561c8c74746e1f2-26916500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review' => 0,
    'show_product' => 0,
    'product_review_id' => 0,
    'rating_value' => 0,
    'product_review_images' => 0,
    'available_message_types' => 0,
    'message_type' => 0,
    'product_review_reply' => 0,
    'product' => 0,
    'NAME_CHARACTERS_THRESHOLD' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c7474ae944_18709602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c7474ae944_18709602')) {function content_61c8c7474ae944_18709602($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.review'));
?>


<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_product'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_product']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD'] = new Smarty_variable(30, null, 0);?>

    <section>

        <section>

            <header class="flex flex-wrap spaced-child">

                
                <a href="<?php echo htmlspecialchars(fn_url("product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->__("product_reviews.review");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>

                </a>
                
                
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['rating_value']->value,'link'=>fn_url("product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value))), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/review_with_photo_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_images'=>$_smarty_tpl->tpl_vars['product_review_images']->value,'link'=>true), 0);?>


            </header>

            
            <?php  $_smarty_tpl->tpl_vars['message_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_message_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message_type']->key => $_smarty_tpl->tpl_vars['message_type']->value) {
$_smarty_tpl->tpl_vars['message_type']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['message'][$_smarty_tpl->tpl_vars['message_type']->value], ENT_QUOTES, 'UTF-8', true)),'meta'=>"cs-content-more__text--".((string)$_smarty_tpl->tpl_vars['message_type']->value)), 0);?>

            <?php } ?>

            
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_images'=>$_smarty_tpl->tpl_vars['product_review_images']->value), 0);?>


        </section>

        
        <?php if ($_smarty_tpl->tpl_vars['product_review_reply']->value) {?>
            <div class="shift-left">
                <?php $_smarty_tpl->_capture_stack[0][] = array("prefix", null, null); ob_start(); ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_reply'=>$_smarty_tpl->tpl_vars['product_review_reply']->value), 0);?>
:
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['product_review_reply']->value['reply'], ENT_QUOTES, 'UTF-8', true)),'prefix'=>Smarty::$_smarty_vars['capture']['prefix'],'meta'=>"cs-content-more__text--review-reply "), 0);?>

            </div>
        <?php }?>

        <footer>
            <small class="dashed-child">

                
                <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
                    <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), ENT_QUOTES, 'UTF-8');?>

                    </a>
                <?php }?>

                
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value), 0);?>


            </small>
        </footer>

    </section>
<?php }?>
<?php }} ?>
