<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:49:27
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/sidebar/sidebar_review_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82328938361c8c7479401b8-39892721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11b9b80194ded5c0a112dcb13f3d7b019589989b' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/sidebar/sidebar_review_search.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82328938361c8c7479401b8-39892721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_reviews_search' => 0,
    'available_message_types' => 0,
    'message_type' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8c7479c59b4_11352319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8c7479c59b4_11352319')) {function content_61c8c7479c59b4_11352319($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','customer','product_reviews.','product_reviews.rating','product_reviews.five_star_icon','product_reviews.four_star_icon','product_reviews.three_star_icon','product_reviews.two_star_icon','product_reviews.one_star_icon','product_reviews.helpfulness','product_reviews.with_photo','product_reviews.with_photo','product_reviews.without_photo','vendor','any_vendor','period','ip_address','product_reviews.approved','product_reviews.approved','product_reviews.not_approved','sort_by','product_reviews.rating','product_reviews.helpfulness','date','desc','asc'));
?>


<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="sidebar_review_search_form" method="get">
        <input type="hidden" name="dispatch" value="product_reviews.manage"/>

        <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
            <div class="sidebar-field">
                <label for="customer"><?php echo $_smarty_tpl->__("customer");?>
</label>
                <input type="text" id="customer" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_reviews_search']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
            </div>

            <?php  $_smarty_tpl->tpl_vars['message_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_message_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message_type']->key => $_smarty_tpl->tpl_vars['message_type']->value) {
$_smarty_tpl->tpl_vars['message_type']->_loop = true;
?>
                <div class="sidebar-field">
                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_reviews.".((string)$_smarty_tpl->tpl_vars['message_type']->value));?>
</label>
                    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_type']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_type']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_reviews_search']->value[$_smarty_tpl->tpl_vars['message_type']->value], ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            <?php } ?>
            
            <div class="sidebar-field">
                <label for="rating_value"><?php echo $_smarty_tpl->__("product_reviews.rating");?>
</label>
                <select name="rating" id="rating_value">
                <option value="">--</option>
                    <option value="5" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['rating']==="5") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.five_star_icon");?>
</option>
                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['rating']==="4") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.four_star_icon");?>
</option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['rating']==="3") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.three_star_icon");?>
</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['rating']==="2") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.two_star_icon");?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['rating']==="1") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.one_star_icon");?>
</option>
                </select>
            </div>

            <div class="sidebar-field">
                <label for="helpfulness_from"><?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
</label>
                <input type="text" name="helpfulness_from" id="helpfulness_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_reviews_search']->value['helpfulness_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-small" />
                -
                <input type="text" name="helpfulness_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_reviews_search']->value['helpfulness_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-small" />
            </div>

            <div class="sidebar-field">
                <label for="product_reviews"><?php echo $_smarty_tpl->__("product_reviews.with_photo");?>
</label>
                <select name="has_images" id="with_photo">
                    <option value="">--</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['has_images']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.with_photo");?>
</option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['has_images']==="0") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.without_photo");?>
</option>
                </select>
            </div>

            <?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="sidebar-field">
                    <label for="product_reviews_type"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"company_id",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value['company_id'] ? array($_smarty_tpl->tpl_vars['product_reviews_search']->value['company_id']) : array(),'empty_variant_text'=>$_smarty_tpl->__("any_vendor")), 0);?>

                </div>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
            <div class="group form-horizontal">
                <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value['period'],'form_name'=>"sidebar_review_search_form",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>

                </div>
            </div>

            <div class="group form-horizontal">
                <div class="control-group">
                    <label class='control-label' for="ip_address"><?php echo $_smarty_tpl->__("ip_address");?>
</label>
                    <div class="controls">
                        <input type="text" id="ip_address" name="ip_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_reviews_search']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="status"><?php echo $_smarty_tpl->__("product_reviews.approved");?>
</label>
                    <div class="controls">
                        <select name="status" id="status">
                            <option value="">--</option>
                            <option value="A" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['status']==="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.approved");?>
</option>
                            <option value="D" <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['status']==="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("product_reviews.not_approved");?>
</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="group form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="sort_by"><?php echo $_smarty_tpl->__("sort_by");?>
</label>
                    <div class="controls">
                        <select name="sort_by" id="sort_by" class="input-small">
                            <option <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['sort_by']==="rating_value") {?>selected="selected"<?php }?> value="rating_value"><?php echo $_smarty_tpl->__("product_reviews.rating");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['sort_by']==="helpfulness") {?>selected="selected"<?php }?> value="helpfulness"><?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['sort_by']==="product_review_timestamp") {?>selected="selected"<?php }?> value="product_review_timestamp"><?php echo $_smarty_tpl->__("date");?>
</option>
                        </select>

                        <select name="sort_order" class="input-small">
                            <option <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['sort_order']==="desc") {?>selected="selected"<?php }?> value="desc"><?php echo $_smarty_tpl->__("desc");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['sort_order']==="asc") {?>selected="selected"<?php }?> value="asc"><?php echo $_smarty_tpl->__("asc");?>
</option>
                        </select>
                    </div>
                </div>
            </div>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>"product_reviews.manage",'view_type'=>"product_reviews",'not_saved'=>true), 0);?>


    </form>

</div><?php }} ?>
