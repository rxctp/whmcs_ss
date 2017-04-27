<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:12:41
  from "/project/vpn/whmcs/admin/templates/blend/homepage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f389e99825b9_71345574',
  'file_dependency' => 
  array (
    '0fed6a6044741865b000f0b33df8188e6fc00dfb' => 
    array (
      0 => '/project/vpn/whmcs/admin/templates/blend/homepage.tpl',
      1 => 1481670844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f389e99825b9_71345574 ($_smarty_tpl) {
?>
<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['maintenancemode']->value) {?>
    <div class="errorbox" style="font-size:14px;">
        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['maintenancemode'];?>

    </div>
    <br />
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['infobox']->value;?>


<?php
$_from = $_smarty_tpl->tpl_vars['addons_html']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addon_html_0_saved_item = isset($_smarty_tpl->tpl_vars['addon_html']) ? $_smarty_tpl->tpl_vars['addon_html'] : false;
$_smarty_tpl->tpl_vars['addon_html'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addon_html']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->_loop = true;
$__foreach_addon_html_0_saved_local_item = $_smarty_tpl->tpl_vars['addon_html'];
?>
    <div class="addon-html-output-container">
        <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

    </div>
<?php
$_smarty_tpl->tpl_vars['addon_html'] = $__foreach_addon_html_0_saved_local_item;
}
if ($__foreach_addon_html_0_saved_item) {
$_smarty_tpl->tpl_vars['addon_html'] = $__foreach_addon_html_0_saved_item;
}
?>

<style>
.contentarea {
    background-color: #f8f8f8;
    overflow: hidden;
}
</style>

<div class="home-widgets-container" data-masonry='{ "itemSelector": ".dashboard-panel-item", "columnWidth": ".dashboard-panel-sizer", "percentPosition": "true" }'>
    <div class="dashboard-panel-sizer"></div>

    <?php
$_from = $_smarty_tpl->tpl_vars['widgets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_widget_1_saved_item = isset($_smarty_tpl->tpl_vars['widget']) ? $_smarty_tpl->tpl_vars['widget'] : false;
$_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['widget']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
$__foreach_widget_1_saved_local_item = $_smarty_tpl->tpl_vars['widget'];
?>
        <div id="panel<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
" class="dashboard-panel-item dashboard-panel-item-columns-<?php echo $_smarty_tpl->tpl_vars['widget']->value->getColumnSize();?>
">
            <?php if ($_smarty_tpl->tpl_vars['widget']->value->showWrapper()) {?>
                <div class="panel panel-default widget-<?php echo strtolower($_smarty_tpl->tpl_vars['widget']->value->getId());?>
" data-widget="<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
">
                    <div class="panel-heading">
                        <div class="widget-tools">
                            <a href="#" class="widget-refresh"><i class="fa fa-refresh"></i></a>
                            <a href="#" class="widget-minimise"><i class="fa fa-chevron-up"></i></a>
                        </div>
                        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['widget']->value->getTitle();?>
</h3>
                    </div>
                    <div class="panel-body">
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['widget']->value->render();?>


            <?php if ($_smarty_tpl->tpl_vars['widget']->value->showWrapper()) {?>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php
$_smarty_tpl->tpl_vars['widget'] = $__foreach_widget_1_saved_local_item;
}
if ($__foreach_widget_1_saved_item) {
$_smarty_tpl->tpl_vars['widget'] = $__foreach_widget_1_saved_item;
}
?>
</div>

<?php echo $_smarty_tpl->tpl_vars['generateInvoices']->value;?>

<?php echo $_smarty_tpl->tpl_vars['creditCardCapture']->value;?>

<?php }
}
