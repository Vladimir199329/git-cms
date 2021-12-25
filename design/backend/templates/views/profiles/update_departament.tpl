{if $departament_data}
    {assign var="id" value=$departament_data.$departament_id}
{else}
    {assign var="id" value=0}
{/if}


{capture name="mainbox"}

<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="banners_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="$departament_id" value="{$id}" />


    <div id="content_general">
        <div class="control-group">
            <label for="elm_banner_name" class="control-label cm-required">{__("name")}</label>
            <div class="controls">
            <input type="text" name="departament_data[departament]" id="elm_banner_name" value="{$departament_data.departament}" size="25" class="input-large" /></div>
        </div>

        <div class="control-group" id="banner_graphic">
            <label class="control-label">{__("image")}</label>
            <div class="controls">
                {include file="common/attach_images.tpl"
                    image_name="departament_main"
                    image_object_type="departament"
                    image_pair=$departament_data.main_pair
                    image_object_id=$id
                    no_detailed=true
                    hide_titles=true
                }
            </div>
        </div>

        <div class="control-group {if $b_type == "G"}hidden{/if}" id="banner_text">
            <label class="control-label" for="elm_banner_description">{__("description")}:</label>
            <div class="controls">
                <textarea id="elm_banner_description" name="departament_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large">{$departament_data.description}</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_banner_timestamp_{$id}">{__("creation_date")}</label>
            <div class="controls">
            {include file="common/calendar.tpl" date_id="elm_banner_timestamp_`$id`" date_name="departament_data[timestamp]" date_val=$departament_data.timestamp|default:$smarty.const.TIME start_year=$settings.Company.company_start_year}
            </div>
        </div>

        {include file="common/select_status.tpl" input_name="departament_data[status]" id="elm_banner_status" obj_id=$id obj=$departament_data hidden=false}

    <!--content_general--></div>

    <div id="content_addons" class="hidden clearfix">
    <!--content_addons--></div>

    {hook name="banners:tabs_content"}
    {/hook}

{capture name="buttons"}
    {if !$id}
        {include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="banners_form" but_name="dispatch[banners.update]"}
    {else}
        {include file="buttons/save_cancel.tpl" but_name="dispatch[banners.update]" but_role="submit-link" but_target_form="banners_form" hide_first_button=$hide_first_button hide_second_button=$hide_second_button save=$id}
    {/if}
{/capture}

</form>

{/capture}

{notes}
    {hook name="banners:update_notes"}
    {__("banner_details_notes", ["[layouts_href]" => fn_url('block_manager.manage')])}
    {/hook}
{/notes}

{include file="common/mainbox.tpl"
    title=($id) ? $departament_data.departament : __("departament.new_departament")
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    select_languages=true}

{** banner section **}
