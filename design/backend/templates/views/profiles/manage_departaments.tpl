{** departament section **}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" id="departament_form" name="departament_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_departament"}

{$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

{$rev=$smarty.request.content_id|default:"pagination_contents_departament"}
{include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
{include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
{$departaments_statuses=""|fn_get_default_statuses:true}
{$has_permission = fn_check_permissions("departament", "update_status", "admin", "POST")}

{if $departaments}
    {capture name="departament_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="left mobile-hide">
                    {include file="common/check_items.tpl" is_check_disabled=!$has_permission check_statuses=($has_permission) ? $departaments.status : '' }

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th  width="6%"></th>
                <th  width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by === "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="15%">{__("description")}</th>

                <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=timestamp&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("creation_date")}{if $search.sort_by === "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>

               

                <th width="6%" class="mobile-hide">&nbsp;</th>
                <th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
            </tr>
            </thead>
            {foreach from=$departaments item=departament}
            <tr class="cm-row-status-{$departament.status|lower} cm-longtap-target"
                {if $has_permission}
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="{$departaments.departament_id}"
                {/if}
            >
                {$allow_save=$departaments|fn_allow_save_object:"departament"}

                {if $allow_save}
                    {$no_hide_input="cm-no-hide-input"}
                {else}
                    {$no_hide_input=""}
                {/if}

                
                

                <td width="6%" class="left mobile-hide">
                <td class="products-list__image">
                        {include
                                file="common/image.tpl"
                                image=$product.main_pair.icon|default:$product.main_pair.detailed
                                image_id=$product.main_pair.image_id
                                image_width=$image_width
                                image_height=$image_height
                                href="profiles.update_departament?departament_id=`$departament.departament_id`"|fn_url
                                image_css_class="products-list__image--img"
                                link_css_class="products-list__image--link"
                        }
                </td>
                    <input type="checkbox" name="departament_ids[]" value="{$departament.departament_id}" class="cm-item {$no_hide_input} cm-item-status-{$departament.status|lower} hide" />
                </td>
                
                <td class="{$no_hide_input}" data-th="{__("departament")}">
                    <a class="row-status" href="{"profiles.update_departament?departament_id=`$departament.departament_id`"|fn_url}">{$departament.departament}</a>
                    {include file="views/companies/components/company_name.tpl" object=$departament}
                </td>
                <td width="15%">
                  {$departament.description}
                </td>
                <td width="15%" data-th="{__("creation_date")}">
                    {$departament.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
                </td>

                

                <td width="6%" class="mobile-hide">
                    {capture name="tools_list"}
                        <li>{btn type="list" text=__("edit") href="profiles.update_departament?departament_id=`$departament.departament_id`"}</li>
                    {if $allow_save}
                        <li>{btn type="list" class="cm-confirm" text=__("delete") href="profiles.delete?departament_id=`$departament.departament_id`" method="POST"}</li>
                    {/if}
                    {/capture}
                    <div class="hidden-tools">
                        {dropdown content=$smarty.capture.tools_list}
                    </div>
                </td>
                <td width="10%" class="right" data-th="{__("status")}">
                    {include file="common/select_popup.tpl" id=$departament.departament_id status=$departament.status hidden=true object_id_name="departament_id" table="departaments" popup_additional_class="`$no_hide_input` dropleft"}
                </td>
            </tr>
            {/foreach}
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="departaments_form"
        object="departament"
        items=$smarty.capture.departament_table
        has_permissions=$has_permission
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl" div_id="pagination_contents_departaments"}

{capture name="adv_buttons"}
   
    {include file="common/tools.tpl" tool_href="profiles.add_departament" prefix="top" hide_tools="true" title=__("add_banner") icon="icon-plus"}
  
{/capture}



{/capture}
</form>


{hook name="banners:manage_mainbox_params"}
    {$page_title = __("banners")}
    {$select_languages = true}
{/hook}

{include file="common/mainbox.tpl" 
title=$page_title content=$smarty.capture.mainbox 
adv_buttons=$smarty.capture.adv_buttons select_languages=$select_languages 
sidebar=$smarty.capture.sidebar}

{** ad section **}