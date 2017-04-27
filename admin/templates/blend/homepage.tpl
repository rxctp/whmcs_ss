<div class="clearfix"></div>

{if $maintenancemode}
    <div class="errorbox" style="font-size:14px;">
        {$_ADMINLANG.home.maintenancemode}
    </div>
    <br />
{/if}

{$infobox}

{foreach from=$addons_html item=addon_html}
    <div class="addon-html-output-container">
        {$addon_html}
    </div>
{/foreach}

<style>
.contentarea {
    background-color: #f8f8f8;
    overflow: hidden;
}
</style>

<div class="home-widgets-container" data-masonry='{ "itemSelector": ".dashboard-panel-item", "columnWidth": ".dashboard-panel-sizer", "percentPosition": "true" }'>
    <div class="dashboard-panel-sizer"></div>

    {foreach $widgets as $widget}
        <div id="panel{$widget->getId()}" class="dashboard-panel-item dashboard-panel-item-columns-{$widget->getColumnSize()}">
            {if $widget->showWrapper()}
                <div class="panel panel-default widget-{$widget->getId()|strtolower}" data-widget="{$widget->getId()}">
                    <div class="panel-heading">
                        <div class="widget-tools">
                            <a href="#" class="widget-refresh"><i class="fa fa-refresh"></i></a>
                            <a href="#" class="widget-minimise"><i class="fa fa-chevron-up"></i></a>
                        </div>
                        <h3 class="panel-title">{$widget->getTitle()}</h3>
                    </div>
                    <div class="panel-body">
            {/if}

            {$widget->render()}

            {if $widget->showWrapper()}
                    </div>
                </div>
            {/if}
        </div>
    {/foreach}
</div>

{$generateInvoices}
{$creditCardCapture}
