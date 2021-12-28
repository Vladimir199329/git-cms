<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 23:34:58
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/components/profile_orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146745525761c8d1f20d6c57-63957603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fb0649678e9022194510d96d1a2fe3fa1614703' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/profiles/components/profile_orders.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '146745525761c8d1f20d6c57-63957603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'can_view_orders' => 0,
    'user_data' => 0,
    'user_type' => 0,
    'settings' => 0,
    'orders_stats' => 0,
    'settled_statuses' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8d1f21334f3_08511049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8d1f21334f3_08511049')) {function content_61c8d1f21334f3_08511049($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_format_price')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.format_price.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('orders','registration_date','first_order','total_orders','total_paid_orders','total_spent_money','last_order','last_login'));
?>
<?php if ($_smarty_tpl->tpl_vars['can_view_orders']->value&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']&&$_smarty_tpl->tpl_vars['user_type']->value==smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("orders");?>
</h6>
        <ul class="unstyled">
            <li><?php echo $_smarty_tpl->__("registration_date");?>
 <span class="pull-right"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php if ($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['first_order_id']) {?>
                <li><?php echo $_smarty_tpl->__("first_order");?>
 <span><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("orders.details&order_id=".((string)$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['first_order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['first_order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <?php }?>
            <li><?php echo $_smarty_tpl->__("total_orders");?>
 <span><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_orders'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <li><?php echo $_smarty_tpl->__("total_paid_orders");?>
 <span><a class="pull-right" href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])."&".$_tmp5), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_settled_orders'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <li><?php echo $_smarty_tpl->__("total_spent_money");?>
 <a class="pull-right" href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])."&".$_tmp6), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @smarty_modifier_format_price($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_spend'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]))===null||$tmp==='' ? 0 : $tmp);?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['last_order_id']) {?>
                <li><?php echo $_smarty_tpl->__("last_order");?>
 <span><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("orders.details&order_id=".((string)$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['last_order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['last_order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['last_login']) {?>
                <li><?php echo $_smarty_tpl->__("last_login");?>
 <span class="pull-right"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value['last_login'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php }?>
        </ul>
    </div>
<?php }?><?php }} ?>
