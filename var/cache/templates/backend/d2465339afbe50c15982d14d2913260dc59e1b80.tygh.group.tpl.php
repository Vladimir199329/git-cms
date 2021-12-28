<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:52:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/context_menu/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162833528161c89dd13471f3-11397368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2465339afbe50c15982d14d2913260dc59e1b80' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/product_features/components/context_menu/group.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162833528161c89dd13471f3-11397368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'group_features' => 0,
    'group_feature' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89dd135c0e0_78637593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89dd135c0e0_78637593')) {function content_61c89dd135c0e0_78637593($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('group','group','none','reset','apply'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--group dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--group" data-toggle=".bulk-edit__content--group">
                <?php echo $_smarty_tpl->__("group");?>

                <span class="caret mobile-hide"></span>
            </span>

    <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--group">
        <div class="bulk-edit-inner bulk-edit-inner--group">
            <div class="bulk-edit-inner__header">
                <span><?php echo $_smarty_tpl->__("group");?>
</span>
            </div>
            <div class="bulk-edit-inner__body">
                <select name="feature_data[parent_id]"
                        id="elm_feature_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-bulkedit-group-changer
                        class="cm-feature-group"
                >
                    <option value="0">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                    <?php  $_smarty_tpl->tpl_vars['group_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_feature']->key => $_smarty_tpl->tpl_vars['group_feature']->value) {
$_smarty_tpl->tpl_vars['group_feature']->_loop = true;
?>
                        <option data-ca-display-on-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_product'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-catalog="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_catalog'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-header="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_header'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id']==$_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
            <div class="bulk-edit-inner__footer">
                <button class="btn bulk-edit-inner__btn bulkedit-group-cancel"
                        role="button"
                        data-ca-bulkedit-group-cancel
                        data-ca-bulkedit-group-reset-changer="[data-ca-bulkedit-group-changer]"
                ><?php echo $_smarty_tpl->__("reset");?>
</button>
                <button class="btn btn-primary bulk-edit-inner__btn bulkedit-group-update"
                        role="button"
                        data-ca-bulkedit-group-update
                        data-ca-bulkedit-group-values="[data-ca-bulkedit-group-changer]"
                        data-ca-bulkedit-group-target-form="[name=manage_product_features_form]"
                        data-ca-bulkedit-group-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                        data-ca-bulkedit-group-dispatch="product_features.m_set_group"
                ><?php echo $_smarty_tpl->__("apply");?>
</button>
            </div>
        </div>
    </div>

    <div class="bulk-edit--overlay"></div>
</li><?php }} ?>
