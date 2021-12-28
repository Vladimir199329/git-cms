<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 19:27:44
         compiled from "/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/fileuploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102916495061c8980055d595-66256761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e2d97e30b8874e3b1c7c8e21f60ecdda3859dde' => 
    array (
      0 => '/home/vladimir/public_html/site.devel/git-cms/design/backend/templates/common/fileuploader.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102916495061c8980055d595-66256761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'server_env' => 0,
    'max_upload_filesize' => 0,
    'post_max_size' => 0,
    'upload_max_filesize' => 0,
    'prefix' => 0,
    'var_name' => 0,
    'disabled_param' => 0,
    'label_id' => 0,
    'images' => 0,
    'id_var_name' => 0,
    'image' => 0,
    'runtime' => 0,
    'id' => 0,
    'po' => 0,
    'image_id' => 0,
    'delete_link' => 0,
    'multiupload' => 0,
    'download_link' => 0,
    'image_name' => 0,
    'is_image' => 0,
    'target_form' => 0,
    'upload_another_file_text' => 0,
    'upload_file_text' => 0,
    'hide_server' => 0,
    'hidden_name' => 0,
    'hidden_value' => 0,
    'allowed_ext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c89800614b70_34656896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c89800614b70_34656896')) {function content_61c89800614b70_34656896($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_include_ext')) include '/home/vladimir/public_html/site.devel/git-cms/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','text_select_file','upload_another_file','local','server','url','text_allowed_to_upload_file_extension'));
?>
<?php $_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',

        post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
',
        allowed_file_path: '<?php echo htmlspecialchars(fn_get_http_files_dir_path(), ENT_QUOTES, 'UTF-8');?>
'
    });

    _.tr({
        file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp17=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_var_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp17, null, 0);?>

<div class="fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>hidden disabled<?php }?>>
<input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['images']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');
}?>" />

<?php  $_smarty_tpl->tpl_vars["image"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image"]->_loop = false;
 $_smarty_tpl->tpl_vars["image_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image"]->key => $_smarty_tpl->tpl_vars["image"]->value) {
$_smarty_tpl->tpl_vars["image"]->_loop = true;
 $_smarty_tpl->tpl_vars["image_id"]->value = $_smarty_tpl->tpl_vars["image"]->key;
?>
    <div class="upload-file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['image']->value['location']=="cart") {?>
                    <?php $_smarty_tpl->tpl_vars["delete_link"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".delete_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value)."&redirect_mode=cart", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["download_link"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".get_custom_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value), null, 0);?>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if ($_smarty_tpl->tpl_vars['image']->value['is_image']) {?>
                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['detailed']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['thumbnail']), ENT_QUOTES, 'UTF-8');?>
" border="0" /></a><br />
            <?php }?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:uploaded_files")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['delete_link']->value) {?><a class="cm-ajax cm-post" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['delete_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
if (!($_smarty_tpl->tpl_vars['po']->value['required']===smarty_modifier_enum("YesNo::YES")&&smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value)==1)) {
ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value!=='Y') {?><?php echo "Tygh.fileuploader.toggle_links('";?><?php echo (string)$_smarty_tpl->tpl_vars['id_var_name']->value;?><?php echo "', 'show');";?><?php }
$_tmp18=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove-sign cm-tooltip hand",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."_".((string)$_smarty_tpl->tpl_vars['image']->value['file']),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_tmp18." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');"),'icon_text'=>''),$_smarty_tpl);?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['delete_link']->value) {?></a><?php }?><span class="upload-filename"><?php if ($_smarty_tpl->tpl_vars['download_link']->value) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['download_link']->value) {?></a><?php }?></span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </p>
    </div>
<?php } ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:uploader")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:uploader"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="upload-file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden"><?php ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value!=='Y') {?><?php echo "Tygh.fileuploader.toggle_links(this.id, 'show');";?><?php }
$_tmp19=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove-sign cm-tooltip hand",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_tmp19." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');"),'icon_text'=>''),$_smarty_tpl);?>
&nbsp;<span class="upload-filename"></span></p>
        <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!=="Y") {?><p class="cm-fu-no-file <?php if ($_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("text_select_file");?>
</p><?php }?>
    </div>

    <input type="hidden"name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
"value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>"id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"class="cm-fileuploader-field <?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?>cm-image-field<?php }?>"<?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }
if ($_smarty_tpl->tpl_vars['target_form']->value) {?>form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><input type="hidden"name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
"value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>"id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"class="cm-fileuploader-field <?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?>cm-image-field<?php }?>"<?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }
if ($_smarty_tpl->tpl_vars['target_form']->value) {?>form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><div class="btn-group <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"&&$_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="upload-file-local"><a class="btn"><span data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_another_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><span data-ca-multi="N" <?php if ($_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("local") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><div class="image-selector"><label for=""><input type="file" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="file<?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?> cm-image-field<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"></label></div></div><?php if (!$_smarty_tpl->tpl_vars['hide_server']->value) {?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="server_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("server");?>
</a><?php }?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("url");?>
</a><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden"name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
"id="hidden_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['target_form']->value) {?>form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><?php }?></div><?php if ($_smarty_tpl->tpl_vars['allowed_ext']->value) {?><p class="mute micro-note"><?php echo $_smarty_tpl->__("text_allowed_to_upload_file_extension",array("[ext]"=>$_smarty_tpl->tpl_vars['allowed_ext']->value));?>
</p><?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:uploader"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div><!--fileuploader-->
<?php }} ?>
