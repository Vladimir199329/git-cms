<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/review_row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181648064161c8c747419877-06029514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6a257aae0823fd80a8bf315896eaecb1cca42f4' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/review_row.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '181648064161c8c747419877-06029514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review' => 0,
    'config' => 0,
    'product_review_id' => 0,
    'show_product' => 0,
    'settings' => 0,
    'product_review_status_descr' => 0,
    'rev' => 0,
    'is_allowed_to_delete_product_reviews' => 0,
    'current_redirect_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c747469616_14049959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c747469616_14049959')) {function content_61c8c747469616_14049959($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','product_reviews.rating','message','product','customer','product_reviews.helpfulness','status','date'));
?>


<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <?php $_smarty_tpl->tpl_vars['current_redirect_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['product_review_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_review']->value['product_review_id'], null, 0);?>
    
    <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cs-product-reviews-manage-review-row cm-longtap-target"
        data-ca-longtap-action="setCheckBox"
        data-ca-longtap-target="input.cm-item"
        data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <td width="6%" class="left">
            <input name="reviews_ids[]"
                    type="checkbox"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-item hide cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product_review']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
            />
            <input name="reviews[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_review_id]"
                type="hidden"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
            <input name="reviews[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]"
                type="hidden"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['product']['product_id'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </td>

        
        <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
            <td width="10%">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['product_review']->value['product']['main_pair']['detailed'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value))), 0);?>

            </td>
        <?php }?>

        
        <td data-th="<?php echo $_smarty_tpl->__("id");?>

            / <?php echo $_smarty_tpl->__("product_reviews.rating");?>

            / <?php echo $_smarty_tpl->__("message");?>

            / <?php echo $_smarty_tpl->__("product");?>

            / <?php echo $_smarty_tpl->__("customer");?>
"
    >
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/manage/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'product_review_images'=>$_smarty_tpl->tpl_vars['product_review']->value['images'],'rating_value'=>$_smarty_tpl->tpl_vars['product_review']->value['rating_value'],'product'=>$_smarty_tpl->tpl_vars['product_review']->value['product'],'product_review_reply'=>$_smarty_tpl->tpl_vars['product_review']->value['reply'],'user_data'=>$_smarty_tpl->tpl_vars['product_review']->value['user_data'],'show_product'=>$_smarty_tpl->tpl_vars['show_product']->value), 0);?>

        </td>

        
        <td width="13%" data-th="<?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('helpfulness'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness'],'size'=>"small"), 0);?>

        </td>

        
        <td width="10%" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_status'=>$_smarty_tpl->tpl_vars['product_review']->value['status'],'product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'product_review_status_descr'=>$_smarty_tpl->tpl_vars['product_review_status_descr']->value,'rev'=>$_smarty_tpl->tpl_vars['rev']->value), 0);?>

            </div>
        </td>

        
        <td width="9%" class="nowrap mobile-hide">
            <div class="hidden-tools">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/review_tools_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'is_allowed_to_delete_product_reviews'=>$_smarty_tpl->tpl_vars['is_allowed_to_delete_product_reviews']->value,'current_redirect_url'=>$_smarty_tpl->tpl_vars['current_redirect_url']->value), 0);?>

            </div>
        </td>

        
        <td width="15%" data-th="<?php echo $_smarty_tpl->__("date");?>
">
            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        </td>
    </tr>
<?php }?>
<?php }} ?>
