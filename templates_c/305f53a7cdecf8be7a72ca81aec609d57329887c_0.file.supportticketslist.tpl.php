<?php
/* Smarty version 3.1.29, created on 2017-04-21 17:57:22
  from "/home/wwwroot/whmcs/templates/six/supportticketslist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9d7822a3054_94110066',
  'file_dependency' => 
  array (
    '305f53a7cdecf8be7a72ca81aec609d57329887c' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/supportticketslist.tpl',
      1 => 1492433946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f9d7822a3054_94110066 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"TicketsList",'filterColumn'=>"2"), 0, true);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableTicketsList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'did' || $_smarty_tpl->tpl_vars['orderby']->value == 'dept') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'subject' || $_smarty_tpl->tpl_vars['orderby']->value == 'title') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'status') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'lastreply') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableTicketsList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsdepartment'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketssubject'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsstatus'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketlastupdated'];?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['tickets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ticket_0_saved_item = isset($_smarty_tpl->tpl_vars['ticket']) ? $_smarty_tpl->tpl_vars['ticket'] : false;
$_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ticket']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->_loop = true;
$__foreach_ticket_0_saved_local_item = $_smarty_tpl->tpl_vars['ticket'];
?>
                <tr onclick="window.location='viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
'">
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['department'];?>
</td>
                    <td><a href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
"><?php if ($_smarty_tpl->tpl_vars['ticket']->value['unread']) {?><strong><?php }?>#<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ticket']->value['subject'];
if ($_smarty_tpl->tpl_vars['ticket']->value['unread']) {?></strong><?php }?></a></td>
                    <td><span class="label status <?php if (is_null($_smarty_tpl->tpl_vars['ticket']->value['statusColor'])) {?>status-<?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusClass'];?>
"<?php } else { ?>status-custom" style="border-color: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusColor'];?>
; color: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusColor'];?>
"<?php }?>><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ticket']->value['status']);?>
</span></td>
                    <td class="text-center"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['normalisedLastReply'];?>
</span><?php echo $_smarty_tpl->tpl_vars['ticket']->value['lastreply'];?>
</td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['ticket'] = $__foreach_ticket_0_saved_local_item;
}
if ($__foreach_ticket_0_saved_item) {
$_smarty_tpl->tpl_vars['ticket'] = $__foreach_ticket_0_saved_item;
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
