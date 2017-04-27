<?php
/* Smarty version 3.1.29, created on 2017-04-26 16:13:33
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/complete.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_590056adba8133_26646739',
  'file_dependency' => 
  array (
    '8df62854b85316c8faef17e5e92245a706e075fd' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/complete.tpl',
      1 => 1492434546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/common.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories-collapsed.tpl' => 1,
  ),
),false)) {
function content_590056adba8133_26646739 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfirmation'];?>
</h1>
            </div>

        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>

        <div class="col-md-9 pull-md-right">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderreceived'];?>
</p>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="alert alert-info order-confirmation">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernumberis'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['ordernumber']->value;?>
</span>
                    </div>
                </div>
            </div>

            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfinalinstructions'];?>
</p>

            <?php if ($_smarty_tpl->tpl_vars['invoiceid']->value && !$_smarty_tpl->tpl_vars['ispaid']->value) {?>
                <div class="alert alert-warning text-center">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordercompletebutnotpaid'];?>

                    <br /><br />
                    <a href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" target="_blank" class="alert-link">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicenumber'];
echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>

                    </a>
                </div>
            <?php }?>

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
                <div class="order-confirmation-addon-output">
                    <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

                </div>
            <?php
$_smarty_tpl->tpl_vars['addon_html'] = $__foreach_addon_html_0_saved_local_item;
}
if ($__foreach_addon_html_0_saved_item) {
$_smarty_tpl->tpl_vars['addon_html'] = $__foreach_addon_html_0_saved_item;
}
?>

            <?php if ($_smarty_tpl->tpl_vars['ispaid']->value) {?>
                <!-- Enter any HTML code which should be displayed when a user has completed checkout here -->
                <!-- Common uses of this include conversion and affiliate tracking scripts -->
            <?php }?>

            <div class="text-center">
                <a href="clientarea.php" class="btn btn-default">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['continueToClientArea'];?>

                    &nbsp;<i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>

        </div>
    </div>
</div>
<?php }
}
