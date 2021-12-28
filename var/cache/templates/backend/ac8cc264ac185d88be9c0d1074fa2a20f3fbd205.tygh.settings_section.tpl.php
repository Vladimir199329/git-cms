<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:21:33
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/settings_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68012912561c8968db9d2e9-77174632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac8cc264ac185d88be9c0d1074fa2a20f3fbd205' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/settings_section.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '68012912561c8968db9d2e9-77174632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'parent_item' => 0,
    'html_id_prefix' => 0,
    'section_name' => 0,
    'is_parent_global' => 0,
    'html_name' => 0,
    'input_html_name' => 0,
    'class' => 0,
    'parent_item_html_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8968dbd8906_29884865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8968dbd8906_29884865')) {function content_61c8968dbd8906_29884865($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_data"]['total'] = $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_data"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fe_data"]['iteration']++;
?>
    <?php $_smarty_tpl->tpl_vars['parent_item'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['parent_item_html_id'] = new Smarty_variable('', null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']&&$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['parent_id']]) {?>
        <?php $_smarty_tpl->tpl_vars['parent_item'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['parent_id']], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['is_parent_global'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['parent_item']->value['global_data'])&&$_smarty_tpl->tpl_vars['parent_item']->value['global_data']['value']!=='', null, 0);?>
        <?php ob_start();
if (($_smarty_tpl->tpl_vars['is_parent_global']->value)) {?><?php echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['global_data']['name'];?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['global_data']['object_id'];?><?php } else { ?><?php echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['name'];?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['object_id'];?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['parent_item_html_id'] = new Smarty_variable(strtolower(((string)$_smarty_tpl->tpl_vars['html_id_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['section_name']->value)."_".$_tmp1), null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['input_html_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['html_name']->value)."[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]", null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['global_setting'])) {?>
        <?php $_smarty_tpl->createLocalArrayVariable('item', null, 0);
$_smarty_tpl->tpl_vars['item']->value['global_html_name'] = ((string)$_smarty_tpl->tpl_vars['html_name']->value)."[".((string)$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id'])."]";?>
        <?php $_smarty_tpl->createLocalArrayVariable('item', null, 0);
$_smarty_tpl->tpl_vars['item']->value['individual_html_name'] = $_smarty_tpl->tpl_vars['input_html_name']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>
            <?php $_smarty_tpl->tpl_vars['input_html_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['global_html_name'], null, 0);?>
        <?php }?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'section_name'=>$_smarty_tpl->tpl_vars['section_name']->value,'html_id'=>strtolower(((string)$_smarty_tpl->tpl_vars['html_id_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['section_name']->value)."_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])),'html_name'=>$_smarty_tpl->tpl_vars['input_html_name']->value,'index'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['fe_data']['iteration'],'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['fe_data']['total'],'class'=>((string)$_smarty_tpl->tpl_vars['class']->value)." ".((string)$_smarty_tpl->tpl_vars['item']->value['class']),'parent_item'=>$_smarty_tpl->tpl_vars['parent_item']->value,'parent_item_html_id'=>$_smarty_tpl->tpl_vars['parent_item_html_id']->value), 0);?>

<?php } ?><?php }} ?>
