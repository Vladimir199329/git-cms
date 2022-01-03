{if $departaments}

    {script src="js/tygh/exceptions.js"}
    

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

    {if !$show_empty}
        {split data=$departaments size=$columns|default:"2" assign="splitted_departaments"}
    {else}
        {split data=$departaments size=$columns|default:"2" assign="splitted_departaments" skip_complete=true}
    {/if}

    {math equation="100 / x" x=$columns|default:"2" assign="cell_width"}

    {* FIXME: Don't move this file *}
    {script src="js/tygh/product_image_gallery.js"}

    <div class="grid-list">
        {strip}
            {foreach from=$splitted_departaments item="sdepartaments" name="sdepartaments"}
                {foreach from=$sdepartaments item="departament" name="departaments"}
                    <div class="ty-column{$columns}">
                        {if $departament}
                            {assign var="obj_id" value=$departament.departament_id}
                            {assign var="obj_id_prefix" value="`$obj_prefix``$departament.departament_id`"}
                            
                            <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                                <div class="ty-grid-list__image">
                                    <a href="{"departaments.departament?departament_id={$departament.departament_id}"|fn_url}">
                                        {include 
                                            file="common/image.tpl" 
                                            no_ids=true 
                                            images=$departament.main_pair 
                                            image_width=$settings.Thumbnails.product_lists_thumbnail_width 
                                            image_height=$settings.Thumbnails.product_lists_thumbnail_height lazy_load=true}
                                    </a>
                                </div>
                                <div class="ty-grid-list__item-name">
                                    <bdi>
                                        <a href="{"departaments.departament?departament_id={$departament.departament_id}"|fn_url}" 
                                        class="product-title" title="{$departament.departament}">{$departament.departament}</a>
                                    </bdi>
                                </div>
                            </div>
                        {/if}
                    </div>
                {/foreach}
            {/foreach}
        {/strip}
    </div>

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

{/if}

{capture name="mainbox_title"}{$title}{/capture}