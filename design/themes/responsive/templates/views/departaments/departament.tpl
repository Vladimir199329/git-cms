<div id="product_features_{$block.block_id}">
    <div class="ty-feature">
        {if $departament_data.main_pair}
            <div class="ty-feature__image">
                {include
                file="common/image.tpl"
                no_ids=true
                images=$departament_data.main_pair
                image_width=$settings.Thumbnails.product_lists_thumbnail_width
                image_height=$settings.Thumbnails.product_lists_thumbnail_height
                lazy_load=true}
            </div>
        {/if}
            <div class="ty-feature__description ty-wysiwyg-content">
                {$departament_data.description nofilter}
            </div>
    </div>
</div>
{* {$departament_data|@var_dump}                        *}
            {if $workers}
                    <div class="ty-sort-container">
                        <table class="table table-middle table--relative table-responsive">
                            <thead>
                            <tr>
                                <th class="ty-center"><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" 
                                    data-ca-target-id={$rev}>{__("person_name")}{if $search.sort_by === "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                                </th>
                                <th><a class="cm-ajax" href="{"`$c_url`&sort_by=email&sort_order=`$search.sort_order_rev`"|fn_url}" 
                                    data-ca-target-id={$rev}>{__("email")}{if $search.sort_by === "email"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                                </th>
                            </tr>
                            </thead>
                            {foreach from=$workers item=worker}
                                <tr>
                                    {$allow_save=true}
                                    {if $allow_save}
                                        {assign var = "no_hide_input" value ="cm-no-hide-input"}
                                    {else}
                                        {assign var = "no_hide_input" value =""}
                                    {/if}

                                    <td width="50%" class="{$no_hide_input} ty-left" data-th="{__("name")}">
                                        <a class="row-status" href="{"products.update_collection?collection_id=`$collection.collection_id`"|fn_url}">{$worker.lastname} {$worker.firstname}</a>
                                    </td>
                                    <td width="6%" data-th="{__("email")}"><a class="row-status" href="mailto:{$user.email|escape:url}">{$worker.email}</a></td>
                                </tr>
                            {/foreach}
                        </table>
                    </div>
            {else}
                <p class="no-items">{__("no_data")}</p>
            {/if}

    <!--product_features_{$block.block_id}--></div>
{capture name="mainbox_title"}{$departament_data.departament nofilter}{/capture}