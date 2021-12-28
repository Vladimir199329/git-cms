<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:46
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83181683561c898023ecd49-60641578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a7fc742eb79a70ff88c122fce1ec92f365b6ef' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/views/block_manager/render/container.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '83181683561c898023ecd49-60641578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'content' => 0,
    'dynamic_object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8980241d9c2_02640127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8980241d9c2_02640127')) {function content_61c8980241d9c2_02640127($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('set_custom_configuration','use_default_block_configuration','insert_grid','insert_grid','container_options','enable_or_disable_container'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_manager:container")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_manager:container"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="device-specific-block container container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['container']->value['uses_default_content']) {?>container-lock<?php }?> <?php if ($_smarty_tpl->tpl_vars['container']->value['status']!="A") {?>container-off<?php }?>"
        data-ca-status="<?php if ($_smarty_tpl->tpl_vars['container']->value['status']!="A") {?>disabled<?php } else { ?>active<?php }?>"
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['container']->value), 0);?>

        id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php if ($_smarty_tpl->tpl_vars['container']->value['linked_message']) {?>
            <p>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['linked_message'], ENT_QUOTES, 'UTF-8');?>

                <a class="cm-post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['set_custom_config_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("set_custom_configuration");?>
</a>
            </p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content']) {?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php }?>
        
        <div class="clearfix"></div>
        <div class="grid-control-menu bm-control-menu">
            <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['container']->value,'wrapper_class'=>"pull-right"), 0);?>


            <h4 class="grid-control-title">
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['container']->value['position']);?>

                <?php if ($_smarty_tpl->tpl_vars['container']->value['can_be_reset_to_default']) {?>
                    <a class="cm-post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['set_default_config_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("use_default_block_configuration");?>
</a>
                <?php }?>
            </h4>

            <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content']&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
                <div class="grid-control-menu-actions">
                    <div class="btn-group action">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-plus cm-tooltip" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("insert_grid");?>
"></span></a>
                        <ul class="dropdown-menu droptop">
                            <li><a href="#" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                        </ul>
                    </div>
                    <div class="cm-tooltip cm-action icon-cog bm-action-properties action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("container_options");?>
"></div>
                    <div class="cm-action bm-action-switch cm-tooltip icon-off action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("enable_or_disable_container");?>
"></div>
                </div>
            <?php }?>
        </div>
    <!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_manager:container"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<hr />
<?php }} ?>
