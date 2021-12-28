<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:21
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157449668761c897e993e201-30474717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b6c73d2b53285583fc1a5f08e930df7c4a9ac4' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157449668761c897e993e201-30474717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c897e9949af1_70326577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c897e9949af1_70326577')) {function content_61c897e9949af1_70326577($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code','purchased','used'));
?>
<label class="control-label" for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
<div class="controls search-field">
    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="input-text" />
    <select name="gift_cert_in">
        <option value="B|U">--</option>
        <option value="B" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("purchased");?>
</option>
        <option value="U" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="U") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("used");?>
</option>
    </select>
</div><?php }} ?>
