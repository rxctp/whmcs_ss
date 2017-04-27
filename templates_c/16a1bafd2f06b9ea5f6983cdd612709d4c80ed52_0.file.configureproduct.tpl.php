<?php
/* Smarty version 3.1.29, created on 2017-04-21 18:10:09
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/configureproduct.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9da81b20043_74752556',
  'file_dependency' => 
  array (
    '16a1bafd2f06b9ea5f6983cdd612709d4c80ed52' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/configureproduct.tpl',
      1 => 1492434549,
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
function content_58f9da81b20043_74752556 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
var _localLang = {
    'addToCart': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'], ENT_QUOTES, 'UTF-8', true);?>
',
    'addedToCartRemove': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addedToCartRemove'], ENT_QUOTES, 'UTF-8', true);?>
'
}
<?php echo '</script'; ?>
>

<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigure'];?>
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


            <form id="frmConfigureProduct">
                <input type="hidden" name="configure" value="true" />
                <input type="hidden" name="i" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />

                <div class="row">
                    <div class="col-md-8">

                        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['configureDesiredOptions'];?>
</p>

                        <div class="product-info">
                            <p class="product-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value['name'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['productinfo']->value['description'];?>
</p>
                        </div>

                        <div class="alert alert-danger hidden" role="alert" id="containerProductValidationErrors">
                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                            <ul id="containerProductValidationErrorsList"></ul>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['type'] == "recurring") {?>
                            <div class="field-container">
                                <div class="form-group">
                                    <label for="inputBillingcycle"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartchoosecycle'];?>
</label>
                                    <select name="billingcycle" id="inputBillingcycle" class="form-control select-inline" onchange="<?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value);<?php } else { ?>recalctotals();<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['monthly']) {?>
                                            <option value="monthly"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "monthly") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['monthly'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['quarterly']) {?>
                                            <option value="quarterly"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "quarterly") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['quarterly'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['semiannually']) {?>
                                            <option value="semiannually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "semiannually") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['semiannually'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['annually']) {?>
                                            <option value="annually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "annually") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['annually'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['biennially']) {?>
                                            <option value="biennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "biennially") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['biennially'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['triennially']) {?>
                                            <option value="triennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "triennially") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['triennially'];?>

                                            </option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['productinfo']->value['type'] == "server") {?>
                            <div class="sub-heading">
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartconfigserver'];?>
</span>
                            </div>

                            <div class="field-container">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputHostname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
</label>
                                            <input type="text" name="hostname" class="form-control" id="inputHostname" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['hostname'];?>
" placeholder="servername.yourdomain.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputRootpw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
</label>
                                            <input type="password" name="rootpw" class="form-control" id="inputRootpw" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['rootpw'];?>
">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputNs1prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns1prefix'];?>
</label>
                                            <input type="text" name="ns1prefix" class="form-control" id="inputNs1prefix" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns1prefix'];?>
" placeholder="ns1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputNs2prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns2prefix'];?>
</label>
                                            <input type="text" name="ns2prefix" class="form-control" id="inputNs2prefix" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns2prefix'];?>
" placeholder="ns2">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                            <div class="sub-heading">
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigpackage'];?>
</span>
                            </div>
                            <div class="product-configurable-options" id="productConfigurableOptions">
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['configurableoptions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_configoption_0_saved_item = isset($_smarty_tpl->tpl_vars['configoption']) ? $_smarty_tpl->tpl_vars['configoption'] : false;
$__foreach_configoption_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['configoption'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['configoption']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->_loop = true;
$__foreach_configoption_0_saved_local_item = $_smarty_tpl->tpl_vars['configoption'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 1) {?>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                    <select name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control">
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['configoption']->value['options'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_options_1_saved_item = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options'] : false;
$__foreach_options_1_saved_key = isset($_smarty_tpl->tpl_vars['num2']) ? $_smarty_tpl->tpl_vars['num2'] : false;
$_smarty_tpl->tpl_vars['options'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['options']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->_loop = true;
$__foreach_options_1_saved_local_item = $_smarty_tpl->tpl_vars['options'];
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> selected="selected"<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>

                                                            </option>
                                                        <?php
$_smarty_tpl->tpl_vars['options'] = $__foreach_options_1_saved_local_item;
}
if ($__foreach_options_1_saved_item) {
$_smarty_tpl->tpl_vars['options'] = $__foreach_options_1_saved_item;
}
if ($__foreach_options_1_saved_key) {
$_smarty_tpl->tpl_vars['num2'] = $__foreach_options_1_saved_key;
}
?>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 2) {?>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['configoption']->value['options'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_options_2_saved_item = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options'] : false;
$__foreach_options_2_saved_key = isset($_smarty_tpl->tpl_vars['num2']) ? $_smarty_tpl->tpl_vars['num2'] : false;
$_smarty_tpl->tpl_vars['options'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['options']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->_loop = true;
$__foreach_options_2_saved_local_item = $_smarty_tpl->tpl_vars['options'];
?>
                                                        <br />
                                                        <label>
                                                            <input type="radio" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> checked="checked"<?php }?> />
                                                            <?php if ($_smarty_tpl->tpl_vars['options']->value['name']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['enable'];?>

                                                            <?php }?>
                                                        </label>
                                                    <?php
$_smarty_tpl->tpl_vars['options'] = $__foreach_options_2_saved_local_item;
}
if ($__foreach_options_2_saved_item) {
$_smarty_tpl->tpl_vars['options'] = $__foreach_options_2_saved_item;
}
if ($__foreach_options_2_saved_key) {
$_smarty_tpl->tpl_vars['num2'] = $__foreach_options_2_saved_key;
}
?>
                                                </div>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {?>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                    <br />
                                                    <label>
                                                        <input type="checkbox" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {?> checked<?php }?> />
                                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name']) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['enable'];?>

                                                        <?php }?>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {?>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                    <?php if ($_smarty_tpl->tpl_vars['configoption']->value['qtymaximum']) {?>
                                                        <?php if (!$_smarty_tpl->tpl_vars['rangesliderincluded']->value) {?>
                                                            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/ion.rangeSlider.min.js"><?php echo '</script'; ?>
>
                                                            <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.css" rel="stylesheet">
                                                            <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.skinModern.css" rel="stylesheet">
                                                            <?php if (isset($_smarty_tpl->tpl_vars['rangesliderincluded'])) {$_smarty_tpl->tpl_vars['rangesliderincluded'] = clone $_smarty_tpl->tpl_vars['rangesliderincluded'];
$_smarty_tpl->tpl_vars['rangesliderincluded']->value = true; $_smarty_tpl->tpl_vars['rangesliderincluded']->nocache = null;
} else $_smarty_tpl->tpl_vars['rangesliderincluded'] = new Smarty_Variable(true, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'rangesliderincluded', 0);?>
                                                        <?php }?>
                                                        <input type="text" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control" />
                                                        <?php echo '<script'; ?>
>
                                                            var sliderTimeoutId = null;
                                                            var sliderRangeDifference = <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
 - <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
;
                                                            // The largest size that looks nice on most screens.
                                                            var sliderStepThreshold = 25;
                                                            // Check if there are too many to display individually.
                                                            var setLargerMarkers = sliderRangeDifference > sliderStepThreshold;

                                                            jQuery("#inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
").ionRangeSlider({
                                                                min: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
,
                                                                max: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
,
                                                                grid: true,
                                                                grid_snap: setLargerMarkers ? false : true,
                                                                onChange: function() {
                                                                    if (sliderTimeoutId) {
                                                                        clearTimeout(sliderTimeoutId);
                                                                    }

                                                                    sliderTimeoutId = setTimeout(function() {
                                                                        sliderTimeoutId = null;
                                                                        recalctotals();
                                                                    }, 250);
                                                                }
                                                            });
                                                        <?php echo '</script'; ?>
>
                                                    <?php } else { ?>
                                                        <div>
                                                            <input type="number" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" min="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
" onchange="recalctotals()" onkeyup="recalctotals()" class="form-control form-control-qty" />
                                                            <span class="form-control-static form-control-static-inline">
                                                                x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                            </span>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['num']->value%2 != 0) {?>
                                            </div>
                                            <div class="row">
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['configoption'] = $__foreach_configoption_0_saved_local_item;
}
if ($__foreach_configoption_0_saved_item) {
$_smarty_tpl->tpl_vars['configoption'] = $__foreach_configoption_0_saved_item;
}
if ($__foreach_configoption_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_configoption_0_saved_key;
}
?>
                                </div>
                            </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>

                            <div class="sub-heading">
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
</span>
                            </div>

                            <div class="field-container">
                                <?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_3_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_3_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
                                    <div class="form-group">
                                        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                            <span class="field-help-text">
                                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                            </span>
                                        <?php }?>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_3_saved_local_item;
}
if ($__foreach_customfield_3_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_3_saved_item;
}
?>
                            </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['addons']->value) {?>

                            <div class="sub-heading">
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartavailableaddons'];?>
</span>
                            </div>

                            <div class="row addon-products">
                                <?php
$_from = $_smarty_tpl->tpl_vars['addons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addon_4_saved_item = isset($_smarty_tpl->tpl_vars['addon']) ? $_smarty_tpl->tpl_vars['addon'] : false;
$_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addon']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
$__foreach_addon_4_saved_local_item = $_smarty_tpl->tpl_vars['addon'];
?>
                                    <div class="col-sm-<?php if (count($_smarty_tpl->tpl_vars['addons']->value) > 1) {?>6<?php } else { ?>12<?php }?>">
                                        <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> panel-addon-selected<?php }?>">
                                            <div class="panel-body">
                                                <label>
                                                    <input type="checkbox" name="addons[<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
]"<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> checked<?php }?> />
                                                    <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>

                                                </label><br />
                                                <?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>

                                            </div>
                                            <div class="panel-price">
                                                <?php echo $_smarty_tpl->tpl_vars['addon']->value['pricing'];?>

                                            </div>
                                            <div class="panel-add">
                                                <i class="fa fa-plus"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                            </div>
                                        </div>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_4_saved_local_item;
}
if ($__foreach_addon_4_saved_item) {
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_4_saved_item;
}
?>
                            </div>

                        <?php }?>

                        <div class="alert alert-warning info-text-sm">
                            <i class="fa fa-question-circle"></i>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['haveQuestionsContact'];?>
 <a href="contact.php" target="_blank" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['haveQuestionsClickHere'];?>
</a>
                        </div>

                    </div>
                    <div class="col-md-4" id="scrollingPanelContainer">

                        <div id="orderSummary">
                            <div class="order-summary">
                                <div class="loader" id="orderSummaryLoader">
                                    <i class="fa fa-fw fa-refresh fa-spin"></i>
                                </div>
                                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersummary'];?>
</h2>
                                <div class="summary-container" id="producttotal"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="btnCompleteProductConfig" class="btn btn-primary btn-lg">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>

                                    <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>recalctotals();<?php echo '</script'; ?>
>
<?php }
}
