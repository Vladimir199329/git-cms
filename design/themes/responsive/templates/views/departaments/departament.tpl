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
            {if $workers}
                    <div class="container-fluid">
                        <table class="table table-middle table--relative table-responsive">
                            <thead>
                            <tr>
                                <th><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("person_name")}{if $search.sort_by === "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                                <th><a class="cm-ajax" href="{"`$c_url`&sort_by=email&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("email")}{if $search.sort_by === "email"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
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

                                    <td class="{$no_hide_input}" data-th="{__("name")}">
                                        <a class="row-status" href="{"products.update_collection?collection_id=`$collection.collection_id`"|fn_url}">{$worker.lastname} {$worker.firstname}</a>
                                    </td>
                                    <td data-th="{__("email")}"><a class="row-status" href="mailto:{$user.email|escape:url}">{$worker.email}</a></td>
                                </tr>
                            {/foreach}
                        </table>
                    </div>
            {else}
                <p class="no-items">{__("no_data")}</p>
            {/if}

    {if $products}
        {assign var="layouts" value=""|fn_get_products_views:false:0}
        {if $layouts.$selected_layout.template}
            {include file="`$layouts.$selected_layout.template`" columns=$settings.Appearance.columns_in_products_list}
        {/if}
    {else}
        <p class="ty-no-items">{__("text_no_products")}</p>
    {/if}
    <!--product_features_{$block.block_id}--></div>
{capture name="mainbox_title"}{$departament_data.department nofilter}{/capture}