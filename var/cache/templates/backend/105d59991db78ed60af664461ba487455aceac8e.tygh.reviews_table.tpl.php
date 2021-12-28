<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160591129661c89800aa0c93-70766493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105d59991db78ed60af664461ba487455aceac8e' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '160591129661c89800aa0c93-70766493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_product' => 0,
    'product_reviews_search' => 0,
    'config' => 0,
    'sorting_status_types' => 0,
    'sorting_status_type' => 0,
    'sort_order_rev' => 0,
    'sorting_status_icons_by_type' => 0,
    'rev' => 0,
    'product_reviews' => 0,
    'c_url' => 0,
    'sorting_status_icons' => 0,
    'product_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800aeb474_71591272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800aeb474_71591272')) {function content_61c89800aeb474_71591272($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','product_reviews.rating','message','product','customer','product_reviews.helpfulness','status','date','no_data'));
?>


<?php $_smarty_tpl->tpl_vars['show_product'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_product']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sort_order_rev'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_reviews_search']->value['sort_order_rev'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_product_reviews" : $tmp), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['sorting_status_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sorting_status_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sorting_status_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sorting_status_type']->key => $_smarty_tpl->tpl_vars['sorting_status_type']->value) {
$_smarty_tpl->tpl_vars['sorting_status_type']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['product_reviews_search']->value['sort_by']===$_smarty_tpl->tpl_vars['sorting_status_type']->value) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['sort_order_rev']->value),'assign'=>'sorting_status_icons_by_type'),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'sorting_status_icons_by_type'),$_smarty_tpl);?>

    <?php }?>
    <?php $_smarty_tpl->createLocalArrayVariable('sorting_status_icons', null, 0);
$_smarty_tpl->tpl_vars['sorting_status_icons']->value[$_smarty_tpl->tpl_vars['sorting_status_type']->value] = $_smarty_tpl->tpl_vars['sorting_status_icons_by_type']->value;?>
<?php } ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_reviews_form" id="product_reviews_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_smarty_tpl->tpl_vars['rev']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("product_reviews_table", null, null); ob_start(); ?>
            <table width="100%" class="table table-middle table--relative table-responsive longtap-selection">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th width="6%">
                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
                            <th width="10%"></th>
                        <?php }?>
                        <th>
                            <?php echo $_smarty_tpl->__("id");?>

                            / <a class="cm-ajax"
                                href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=rating_value&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order_rev']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>

                            >
                                <?php echo $_smarty_tpl->__("product_reviews.rating");?>

                                <?php echo $_smarty_tpl->tpl_vars['sorting_status_icons']->value['rating_value'];?>

                            </a>
                            / <?php echo $_smarty_tpl->__("message");?>

                            <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
                                / <?php echo $_smarty_tpl->__("product");?>

                            <?php }?>
                            / <?php echo $_smarty_tpl->__("customer");?>

                        </th>
                        <th width="13%">
                            <a class="cm-ajax"
                                href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=helpfulness&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order_rev']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>

                            >
                                <?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>

                                <?php echo $_smarty_tpl->tpl_vars['sorting_status_icons']->value['helpfulness'];?>

                            </a>
                        </th>
                        <th width="10%">
                            <?php echo $_smarty_tpl->__("status");?>

                        </th>
                        <th width="9%" class="mobile-hide">&nbsp;</th>
                        <th width="15%">
                            <a class="cm-ajax"
                                href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product_review_timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order_rev']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>

                            >
                                <?php echo $_smarty_tpl->__("date");?>

                                <?php echo $_smarty_tpl->tpl_vars['sorting_status_icons']->value['product_review_timestamp'];?>

                            </a>
                        </th>
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['product_review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->key => $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/manage/review_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value,'show_product'=>$_smarty_tpl->tpl_vars['show_product']->value,'rev'=>$_smarty_tpl->tpl_vars['rev']->value), 0);?>

                <?php } ?>
            </table>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>'product_reviews_form','object'=>"product_reviews",'items'=>Smarty::$_smarty_vars['capture']['product_reviews_table']), 0);?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_smarty_tpl->tpl_vars['rev']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>

</form>
<?php }} ?>
