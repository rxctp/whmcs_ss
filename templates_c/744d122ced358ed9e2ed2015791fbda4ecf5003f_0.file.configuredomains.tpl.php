<?php
/* Smarty version 3.1.29, created on 2017-04-21 18:17:57
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/configuredomains.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9dc55340176_39683028',
  'file_dependency' => 
  array (
    '744d122ced358ed9e2ed2015791fbda4ecf5003f' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/configuredomains.tpl',
      1 => 1492434548,
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
function content_58f9dc55340176_39683028 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/home/wwwroot/whmcs/vendor/smarty/smarty/libs/plugins/function.math.php';
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
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainsconfig'];?>
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


            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=confdomains" id="frmConfigureDomains">
                <input type="hidden" name="update" value="true" />

                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['reviewDomainAndAddons'];?>
</p>

                <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                    <div class="alert alert-danger" role="alert">
                        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                        <ul>
                            <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                        </ul>
                    </div>
                <?php }?>

                <?php
$_from = $_smarty_tpl->tpl_vars['domains']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_domain_0_saved_item = isset($_smarty_tpl->tpl_vars['domain']) ? $_smarty_tpl->tpl_vars['domain'] : false;
$__foreach_domain_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['domain']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
$__foreach_domain_0_saved_local_item = $_smarty_tpl->tpl_vars['domain'];
?>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderregperiod'];?>
</label>
                                <br />
                                <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['hosting'];?>
</label>
                                <br />
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value['hosting']) {?><span style="color:#009900;">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainshashosting'];?>
]</span><?php } else { ?><a href="cart.php" style="color:#cc0000;">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainsnohosting'];?>
]</a><?php }?>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['eppenabled']) {?>
                            <div class="col-sm-12">
                                <div class="form-group prepend-icon">
                                    <input type="text" name="epp[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" id="inputEppcode<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value['eppvalue'];?>
" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaineppcode'];?>
" />
                                    <label for="inputEppcode<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <span class="field-help-text">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaineppcodedesc'];?>

                                    </span>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement'] || $_smarty_tpl->tpl_vars['domain']->value['emailforwarding'] || $_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>
                        <div class="row addon-products">

                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>
                                <div class="col-sm-<?php echo smarty_function_math(array('equation'=>"12 / numAddons",'numAddons'=>$_smarty_tpl->tpl_vars['domain']->value['addonsCount']),$_smarty_tpl);?>
">
                                    <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagementselected']) {?> panel-addon-selected<?php }?>">
                                        <div class="panel-body">
                                            <label>
                                                <input type="checkbox" name="dnsmanagement[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]"<?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagementselected']) {?> checked<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>

                                            </label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsdnsmanagementinfo'];?>

                                        </div>
                                        <div class="panel-price">
                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['dnsmanagementprice'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                                        </div>
                                        <div class="panel-add">
                                            <i class="fa fa-plus"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'];?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>
                                <div class="col-sm-<?php echo smarty_function_math(array('equation'=>"12 / numAddons",'numAddons'=>$_smarty_tpl->tpl_vars['domain']->value['addonsCount']),$_smarty_tpl);?>
">
                                    <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotectionselected']) {?> panel-addon-selected<?php }?>">
                                        <div class="panel-body">
                                            <label>
                                                <input type="checkbox" name="idprotection[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]"<?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotectionselected']) {?> checked<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>

                                                </label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsidprotectioninfo'];?>

                                        </div>
                                        <div class="panel-price">
                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['idprotectionprice'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                                        </div>
                                        <div class="panel-add">
                                            <i class="fa fa-plus"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'];?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>
                                <div class="col-sm-<?php echo smarty_function_math(array('equation'=>"12 / numAddons",'numAddons'=>$_smarty_tpl->tpl_vars['domain']->value['addonsCount']),$_smarty_tpl);?>
">
                                    <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwardingselected']) {?> panel-addon-selected<?php }?>">
                                        <div class="panel-body">
                                            <label>
                                                <input type="checkbox" name="emailforwarding[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]"<?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwardingselected']) {?> checked<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>

                                            </label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsemailforwardinginfo'];?>

                                        </div>
                                        <div class="panel-price">
                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['emailforwardingprice'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                                        </div>
                                        <div class="panel-add">
                                            <i class="fa fa-plus"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'];?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                        </div>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['domain']->value['fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_domainfield_1_saved_item = isset($_smarty_tpl->tpl_vars['domainfield']) ? $_smarty_tpl->tpl_vars['domainfield'] : false;
$__foreach_domainfield_1_saved_key = isset($_smarty_tpl->tpl_vars['domainfieldname']) ? $_smarty_tpl->tpl_vars['domainfieldname'] : false;
$_smarty_tpl->tpl_vars['domainfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['domainfieldname'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['domainfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['domainfieldname']->value => $_smarty_tpl->tpl_vars['domainfield']->value) {
$_smarty_tpl->tpl_vars['domainfield']->_loop = true;
$__foreach_domainfield_1_saved_local_item = $_smarty_tpl->tpl_vars['domainfield'];
?>
                        <div class="row">
                            <div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['domainfieldname']->value;?>
:</div>
                            <div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['domainfield']->value;?>
</div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['domainfield'] = $__foreach_domainfield_1_saved_local_item;
}
if ($__foreach_domainfield_1_saved_item) {
$_smarty_tpl->tpl_vars['domainfield'] = $__foreach_domainfield_1_saved_item;
}
if ($__foreach_domainfield_1_saved_key) {
$_smarty_tpl->tpl_vars['domainfieldname'] = $__foreach_domainfield_1_saved_key;
}
?>

                <?php
$_smarty_tpl->tpl_vars['domain'] = $__foreach_domain_0_saved_local_item;
}
if ($__foreach_domain_0_saved_item) {
$_smarty_tpl->tpl_vars['domain'] = $__foreach_domain_0_saved_item;
}
if ($__foreach_domain_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_domain_0_saved_key;
}
?>

                <?php if ($_smarty_tpl->tpl_vars['atleastonenohosting']->value) {?>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameservers'];?>
</span>
                    </div>

                    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartnameserversdesc'];?>
</p>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver1'];?>
</label>
                                <input type="text" class="form-control" id="inputNs1" name="domainns1" value="<?php echo $_smarty_tpl->tpl_vars['domainns1']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver2'];?>
</label>
                                <input type="text" class="form-control" id="inputNs2" name="domainns2" value="<?php echo $_smarty_tpl->tpl_vars['domainns2']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver3'];?>
</label>
                                <input type="text" class="form-control" id="inputNs3" name="domainns3" value="<?php echo $_smarty_tpl->tpl_vars['domainns3']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver4'];?>
</label>
                                <input type="text" class="form-control" id="inputNs4" name="domainns4" value="<?php echo $_smarty_tpl->tpl_vars['domainns4']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver5'];?>
</label>
                                <input type="text" class="form-control" id="inputNs5" name="domainns5" value="<?php echo $_smarty_tpl->tpl_vars['domainns5']->value;?>
" />
                            </div>
                        </div>
                    </div>

                <?php }?>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>

                        &nbsp;<i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php }
}
