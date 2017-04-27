<?php
/* Smarty version 3.1.29, created on 2017-04-21 18:10:10
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/ordersummary.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9da827a6743_45523958',
  'file_dependency' => 
  array (
    '1647334d4892628bfb8ec6342eda560d240ab856' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/ordersummary.tpl',
      1 => 1492434555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f9da827a6743_45523958 ($_smarty_tpl) {
?>
<span class="product-name"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['name'];?>
</span>
<span class="product-group"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['groupname'];?>
</span>

<div class="clearfix">
    <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['name'];?>
</span>
    <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['baseprice'];?>
</span>
</div>

<?php
$_from = $_smarty_tpl->tpl_vars['producttotals']->value['configoptions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_configoption_0_saved_item = isset($_smarty_tpl->tpl_vars['configoption']) ? $_smarty_tpl->tpl_vars['configoption'] : false;
$_smarty_tpl->tpl_vars['configoption'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['configoption']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->_loop = true;
$__foreach_configoption_0_saved_local_item = $_smarty_tpl->tpl_vars['configoption'];
?>
    <?php if ($_smarty_tpl->tpl_vars['configoption']->value) {?>
        <div class="clearfix">
            <span class="pull-left">&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</span>
            <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['recurring'];
if ($_smarty_tpl->tpl_vars['configoption']->value['setup']) {?> + <?php echo $_smarty_tpl->tpl_vars['configoption']->value['setup'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?></span>
        </div>
    <?php }
$_smarty_tpl->tpl_vars['configoption'] = $__foreach_configoption_0_saved_local_item;
}
if ($__foreach_configoption_0_saved_item) {
$_smarty_tpl->tpl_vars['configoption'] = $__foreach_configoption_0_saved_item;
}
?>

<?php
$_from = $_smarty_tpl->tpl_vars['producttotals']->value['addons'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addon_1_saved_item = isset($_smarty_tpl->tpl_vars['addon']) ? $_smarty_tpl->tpl_vars['addon'] : false;
$_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addon']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
$__foreach_addon_1_saved_local_item = $_smarty_tpl->tpl_vars['addon'];
?>
    <div class="clearfix">
        <span class="pull-left">+ <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
        <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurring'];?>
</span>
    </div>
<?php
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_1_saved_local_item;
}
if ($__foreach_addon_1_saved_item) {
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_1_saved_item;
}
?>

<?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'] || $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurring'] || $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['addons']) {?>
    <div class="summary-totals">
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup']) {?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartsetupfees'];?>
:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'];?>
</span>
            </div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurringexcltax'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_recurring_2_saved_item = isset($_smarty_tpl->tpl_vars['recurring']) ? $_smarty_tpl->tpl_vars['recurring'] : false;
$__foreach_recurring_2_saved_key = isset($_smarty_tpl->tpl_vars['cycle']) ? $_smarty_tpl->tpl_vars['cycle'] : false;
$_smarty_tpl->tpl_vars['recurring'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cycle'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['recurring']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cycle']->value => $_smarty_tpl->tpl_vars['recurring']->value) {
$_smarty_tpl->tpl_vars['recurring']->_loop = true;
$__foreach_recurring_2_saved_local_item = $_smarty_tpl->tpl_vars['recurring'];
?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['cycle']->value;?>
:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['recurring']->value;?>
</span>
            </div>
        <?php
$_smarty_tpl->tpl_vars['recurring'] = $__foreach_recurring_2_saved_local_item;
}
if ($__foreach_recurring_2_saved_item) {
$_smarty_tpl->tpl_vars['recurring'] = $__foreach_recurring_2_saved_item;
}
if ($__foreach_recurring_2_saved_key) {
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_recurring_2_saved_key;
}
?>
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1']) {?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate'];?>
%:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1'];?>
</span>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2']) {?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname2'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate2'];?>
%:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2'];?>
</span>
            </div>
        <?php }?>
    </div>
<?php }?>

<div class="total-due-today">
    <span class="amt"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['totaltoday'];?>
</span>
    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
</span>
</div>
<?php }
}
