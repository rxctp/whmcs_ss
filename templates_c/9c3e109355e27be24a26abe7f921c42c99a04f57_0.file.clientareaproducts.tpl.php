<?php
/* Smarty version 3.1.29, created on 2017-04-21 17:56:33
  from "/home/wwwroot/whmcs/templates/six/clientareaproducts.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9d75179cb92_17991305',
  'file_dependency' => 
  array (
    '9c3e109355e27be24a26abe7f921c42c99a04f57' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/clientareaproducts.tpl',
      1 => 1492433930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f9d75179cb92_17991305 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"ServicesList",'filterColumn'=>"3"), 0, true);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableServicesList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'product') {?>
            table.order([0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'], [3, 'asc']);
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'amount' || $_smarty_tpl->tpl_vars['orderby']->value == 'billingcycle') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'nextduedate') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'domainstatus') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableServicesList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderproduct'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddonpricing'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</th>
                <th class="responsive-edit-button" style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['services']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_service_0_saved_item = isset($_smarty_tpl->tpl_vars['service']) ? $_smarty_tpl->tpl_vars['service'] : false;
$__foreach_service_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['service'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['service']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->_loop = true;
$__foreach_service_0_saved_local_item = $_smarty_tpl->tpl_vars['service'];
?>
                <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
', false)">
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['service']->value['product'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?><br /><a href="http://<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</a><?php }?></td>
                    <td class="text-center" data-order="<?php echo $_smarty_tpl->tpl_vars['service']->value['amountnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['amount'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['service']->value['billingcycle'];?>
</td>
                    <td class="text-center"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['service']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['service']->value['nextduedate'];?>
</td>
                    <td class="text-center"><span class="label status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
</span></td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" class="btn btn-block btn-info">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageproduct'];?>

                        </a>
                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['service'] = $__foreach_service_0_saved_local_item;
}
if ($__foreach_service_0_saved_item) {
$_smarty_tpl->tpl_vars['service'] = $__foreach_service_0_saved_item;
}
if ($__foreach_service_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_service_0_saved_key;
}
?>
        </tbody>
    </table>
    <div class="text-center" id="tableLoading">
        <p><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
    </div>
</div>
<?php }
}
