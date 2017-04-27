<?php
/* Smarty version 3.1.29, created on 2017-04-21 18:10:25
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/checkout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9da91983a98_18951461',
  'file_dependency' => 
  array (
    'e8f392faf5533e4940c41894d2ee9ab29682a6ce' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/checkout.tpl',
      1 => 1492434545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/common.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories-collapsed.tpl' => 1,
  ),
  'tpl_function' => 
  array (
    'getFontAwesomeCCIcon' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/home/wwwroot/whmcs/templates_c/e8f392faf5533e4940c41894d2ee9ab29682a6ce_0.file.checkout.tpl.php',
      'uid' => 'e8f392faf5533e4940c41894d2ee9ab29682a6ce',
      'call_name' => 'smarty_template_function_getFontAwesomeCCIcon_7079613058f9da918b0864_06361793',
    ),
  ),
),false)) {
function content_58f9da91983a98_18951461 ($_smarty_tpl) {
echo '<script'; ?>
>
    // Define state tab index value
    var statesTab = 10;
    // Do not enforce state input client side
    var stateNotRequired = true;
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/PasswordStrength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    window.langPasswordStrength = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
";
    window.langPasswordWeak = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
";
    window.langPasswordModerate = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
";
    window.langPasswordStrong = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
";
<?php echo '</script'; ?>
>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['checkout'];?>
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


            <div class="already-registered clearfix">
                <div class="pull-right">
                    <button type="button" class="btn btn-info<?php if ($_smarty_tpl->tpl_vars['loggedin']->value || !$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['custtype']->value == "existing") {?> hidden<?php }?>" id="btnAlreadyRegistered">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['alreadyRegistered'];?>

                    </button>
                    <button type="button" class="btn btn-warning<?php if ($_smarty_tpl->tpl_vars['loggedin']->value || $_smarty_tpl->tpl_vars['custtype']->value != "existing") {?> hidden<?php }?>" id="btnNewUserSignup">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['createAccount'];?>

                    </button>
                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['enterPersonalDetails'];?>
</p>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <div class="alert alert-danger checkout-error-feedback" role="alert">
                    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                    <ul>
                        <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                    </ul>
                </div>
                <div class="clearfix"></div>
            <?php }?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=checkout" name="orderfrm" id="frmCheckout">
                <input type="hidden" name="submit" value="true" />
                <input type="hidden" name="custtype" id="inputCustType" value="<?php echo $_smarty_tpl->tpl_vars['custtype']->value;?>
" />

                <div id="containerExistingUserSignin"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value || $_smarty_tpl->tpl_vars['custtype']->value != "existing") {?> class="hidden"<?php }?>>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['existingCustomerLogin'];?>
</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="text" name="loginemail" id="inputLoginEmail" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginPassword" class="field-icon">
                                    <i class="fa fa-lock"></i>
                                </label>
                                <input type="password" name="loginpassword" id="inputLoginPassword" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
">
                            </div>
                        </div>
                    </div>

                </div>

                <div id="containerNewUserSignup"<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['custtype']->value == "existing") {?> class="hidden"<?php }?>>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['personalInformation'];?>
</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputFirstName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="firstname" id="inputFirstName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?> autofocus>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="lastname" id="inputLastName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="email" name="email" id="inputEmail" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['email'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputPhone" class="field-icon">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['phonenumber'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                    </div>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['billingAddress'];?>
</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCompanyName" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress1" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="address1" id="inputAddress1" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress2" class="field-icon">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input type="text" name="address2" id="inputAddress2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group prepend-icon">
                                <label for="inputCity" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="city" id="inputCity" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group prepend-icon">
                                <label for="inputState" class="field-icon" id="inputStateIcon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <input type="text" name="state" id="inputState" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group prepend-icon">
                                <label for="inputPostcode" class="field-icon">
                                    <i class="fa fa-certificate"></i>
                                </label>
                                <input type="text" name="postcode" id="inputPostcode" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <select name="country" id="inputCountry" class="field"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?>>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['countries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_countrylabel_0_saved_item = isset($_smarty_tpl->tpl_vars['countrylabel']) ? $_smarty_tpl->tpl_vars['countrylabel'] : false;
$__foreach_countrylabel_0_saved_key = isset($_smarty_tpl->tpl_vars['countrycode']) ? $_smarty_tpl->tpl_vars['countrycode'] : false;
$_smarty_tpl->tpl_vars['countrylabel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrycode'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrylabel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
$_smarty_tpl->tpl_vars['countrylabel']->_loop = true;
$__foreach_countrylabel_0_saved_local_item = $_smarty_tpl->tpl_vars['countrylabel'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['country']->value && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['country']->value) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>

                                        </option>
                                    <?php
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_0_saved_local_item;
}
if ($__foreach_countrylabel_0_saved_item) {
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_0_saved_item;
}
if ($__foreach_countrylabel_0_saved_key) {
$_smarty_tpl->tpl_vars['countrycode'] = $__foreach_countrylabel_0_saved_key;
}
?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                        <div class="sub-heading">
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
</span>
                        </div>
                        <div class="field-container">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_1_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_1_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
                                    <div class="col-sm-6">
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
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_local_item;
}
if ($__foreach_customfield_1_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_item;
}
?>
                            </div>
                        </div>
                    <?php }?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['domainsinorder']->value) {?>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregistrantinfo'];?>
</span>
                    </div>

                    <p class="small text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['domainAlternativeContact'];?>
</p>

                    <div class="row margin-bottom">
                        <div class="col-sm-6 col-sm-offset-3">
                            <select name="contact" id="inputDomainContact" class="field">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['usedefaultcontact'];?>
</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['domaincontacts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_domcontact_2_saved_item = isset($_smarty_tpl->tpl_vars['domcontact']) ? $_smarty_tpl->tpl_vars['domcontact'] : false;
$_smarty_tpl->tpl_vars['domcontact'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['domcontact']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['domcontact']->value) {
$_smarty_tpl->tpl_vars['domcontact']->_loop = true;
$__foreach_domcontact_2_saved_local_item = $_smarty_tpl->tpl_vars['domcontact'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['domcontact']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['contact']->value == $_smarty_tpl->tpl_vars['domcontact']->value['id']) {?> selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['domcontact']->value['name'];?>

                                    </option>
                                <?php
$_smarty_tpl->tpl_vars['domcontact'] = $__foreach_domcontact_2_saved_local_item;
}
if ($__foreach_domcontact_2_saved_item) {
$_smarty_tpl->tpl_vars['domcontact'] = $__foreach_domcontact_2_saved_item;
}
?>
                                <option value="addingnew"<?php if ($_smarty_tpl->tpl_vars['contact']->value == "addingnew") {?> selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavaddcontact'];?>
...
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="row<?php if ($_smarty_tpl->tpl_vars['contact']->value != "addingnew") {?> hidden<?php }?>" id="domainRegistrantInputFields">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCFirstName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="domaincontactfirstname" id="inputDCFirstName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['firstname'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="domaincontactlastname" id="inputDCLastName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['lastname'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="email" name="domaincontactemail" id="inputDCEmail" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['email'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCPhone" class="field-icon">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input type="tel" name="domaincontactphonenumber" id="inputDCPhone" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['phonenumber'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCCompanyName" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="domaincontactcompanyname" id="inputDCCompanyName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['companyname'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCAddress1" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="domaincontactaddress1" id="inputDCAddress1" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address1'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCAddress2" class="field-icon">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input type="text" name="domaincontactaddress2" id="inputDCAddress2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address2'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group prepend-icon">
                                <label for="inputDCCity" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="domaincontactcity" id="inputDCCity" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['city'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group prepend-icon">
                                <label for="inputDCState" class="field-icon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <input type="text" name="domaincontactstate" id="inputDCState" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['state'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group prepend-icon">
                                <label for="inputDCPostcode" class="field-icon">
                                    <i class="fa fa-certificate"></i>
                                </label>
                                <input type="text" name="domaincontactpostcode" id="inputDCPostcode" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['postcode'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <select name="domaincontactcountry" id="inputDCCountry" class="field">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['countries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_countrylabel_3_saved_item = isset($_smarty_tpl->tpl_vars['countrylabel']) ? $_smarty_tpl->tpl_vars['countrylabel'] : false;
$__foreach_countrylabel_3_saved_key = isset($_smarty_tpl->tpl_vars['countrycode']) ? $_smarty_tpl->tpl_vars['countrycode'] : false;
$_smarty_tpl->tpl_vars['countrylabel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrycode'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrylabel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
$_smarty_tpl->tpl_vars['countrylabel']->_loop = true;
$__foreach_countrylabel_3_saved_local_item = $_smarty_tpl->tpl_vars['countrylabel'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['domaincontact']->value['country'] && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['domaincontact']->value['country']) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>

                                        </option>
                                    <?php
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_3_saved_local_item;
}
if ($__foreach_countrylabel_3_saved_item) {
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_3_saved_item;
}
if ($__foreach_countrylabel_3_saved_key) {
$_smarty_tpl->tpl_vars['countrycode'] = $__foreach_countrylabel_3_saved_key;
}
?>
                                </select>
                            </div>
                        </div>
                    </div>

                <?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>

                    <div id="containerNewUserSecurity"<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['custtype']->value == "existing") {?> class="hidden"<?php }?>>

                        <div class="sub-heading">
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['accountSecurity'];?>
</span>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword1" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password" id="inputNewPassword1" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword2" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-center small text-muted" id="passwordStrengthTextLabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
: <?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthenter'];?>
</p>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select name="securityqid" id="inputSecurityQId" class="field">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['securityquestions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_4_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_4_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['question']->value['id'] == $_smarty_tpl->tpl_vars['securityqid']->value) {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>

                                            </option>
                                        <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_4_saved_local_item;
}
if ($__foreach_question_4_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_4_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group prepend-icon">
                                        <label for="inputSecurityQAns" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                        <input type="password" name="securityqans" id="inputSecurityQAns" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
">
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                    </div>

                <?php }?>

                <div class="sub-heading">
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['paymentDetails'];?>
</span>
                </div>

                <div class="alert alert-success text-center large-text" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
: &nbsp; <strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong>
                </div>

                <div class="form-group">
                    <p class="small text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['preferredPaymentMethod'];?>
</p>

                    <div class="text-center">
                        <?php
$_from = $_smarty_tpl->tpl_vars['gateways']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gateway_5_saved_item = isset($_smarty_tpl->tpl_vars['gateway']) ? $_smarty_tpl->tpl_vars['gateway'] : false;
$__foreach_gateway_5_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['gateway'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['gateway']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->_loop = true;
$__foreach_gateway_5_saved_local_item = $_smarty_tpl->tpl_vars['gateway'];
?>
                            <label class="radio-inline">
                                <input type="radio" name="paymentmethod" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" class="payment-methods<?php if ($_smarty_tpl->tpl_vars['gateway']->value['type'] == "CC") {?> is-credit-card<?php }?>"<?php if ($_smarty_tpl->tpl_vars['selectedgateway']->value == $_smarty_tpl->tpl_vars['gateway']->value['sysname']) {?> checked<?php }?> />
                                <?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>

                            </label>
                        <?php
$_smarty_tpl->tpl_vars['gateway'] = $__foreach_gateway_5_saved_local_item;
}
if ($__foreach_gateway_5_saved_item) {
$_smarty_tpl->tpl_vars['gateway'] = $__foreach_gateway_5_saved_item;
}
if ($__foreach_gateway_5_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_gateway_5_saved_key;
}
?>
                    </div>
                </div>

                <div class="alert alert-danger text-center gateway-errors hidden"></div>

                <div class="clearfix"></div>

                <div id="creditCardInputFields"<?php if ($_smarty_tpl->tpl_vars['selectedgatewaytype']->value != "CC") {?> class="hidden"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?>
                        <div class="row margin-bottom">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" name="ccinfo" value="useexisting" id="useexisting" <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?> checked<?php } else { ?> disabled<?php }?> />
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcarduseexisting'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?>
                                            (<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'];?>
)
                                        <?php }?>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ccinfo" value="new" id="new" <?php if (!$_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'] || $_smarty_tpl->tpl_vars['ccinfo']->value == "new") {?> checked<?php }?> />
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardenternewcard'];?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <input type="hidden" name="ccinfo" value="new" />
                    <?php }?>
                    <div id="newCardInfo" class="row<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'] && $_smarty_tpl->tpl_vars['ccinfo']->value != "new") {?> hidden<?php }?>">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" id="cctype" name="cctype" value="<?php echo $_smarty_tpl->tpl_vars['acceptedcctypes']->value[0];?>
" />
                                <div class="dropdown" id="cardType">
                                    <button class="btn btn-default dropdown-toggle field" type="button" id="creditCardType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span id="selectedCardType">
                                            <i class="fa <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'getFontAwesomeCCIcon', array('ccType'=>$_smarty_tpl->tpl_vars['acceptedcctypes']->value[0]), true);?>
 fa-fw"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['acceptedcctypes']->value[0];?>

                                        </span>
                                        <span class="fa fa-caret-down fa-fw"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="creditCardTypeDropDown" aria-labelledby="creditCardType">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['acceptedcctypes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cardType_6_saved_item = isset($_smarty_tpl->tpl_vars['cardType']) ? $_smarty_tpl->tpl_vars['cardType'] : false;
$_smarty_tpl->tpl_vars['cardType'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cardType']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cardType']->value) {
$_smarty_tpl->tpl_vars['cardType']->_loop = true;
$__foreach_cardType_6_saved_local_item = $_smarty_tpl->tpl_vars['cardType'];
?>
                                            <li>
                                                <a href="#">
                                                    <i class="fa <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'getFontAwesomeCCIcon', array('ccType'=>$_smarty_tpl->tpl_vars['cardType']->value), true);?>
 fa-fw"></i>
                                                    <span class="type">
                                                        <?php echo $_smarty_tpl->tpl_vars['cardType']->value;?>

                                                    </span>
                                                </a>
                                            </li>
                                        <?php
$_smarty_tpl->tpl_vars['cardType'] = $__foreach_cardType_6_saved_local_item;
}
if ($__foreach_cardType_6_saved_item) {
$_smarty_tpl->tpl_vars['cardType'] = $__foreach_cardType_6_saved_item;
}
?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardNumber" class="field-icon">
                                    <i class="fa fa-credit-card"></i>
                                </label>
                                <input type="tel" name="ccnumber" id="inputCardNumber" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cardNumber'];?>
" autocomplete="cc-number">
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputCardStart" class="field-icon">
                                        <i class="fa fa-calendar-check-o"></i>
                                    </label>
                                    <input type="tel" name="ccstartdate" id="inputCardStart" class="field" placeholder="MM / YY (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardstart'];?>
)" autocomplete="cc-exp">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputCardIssue" class="field-icon">
                                        <i class="fa fa-asterisk"></i>
                                    </label>
                                    <input type="tel" name="ccissuenum" id="inputCardIssue" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardissuenum'];?>
">
                                </div>
                            </div>
                        <?php }?>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardExpiry" class="field-icon">
                                    <i class="fa fa-calendar"></i>
                                </label>
                                <input type="tel" name="ccexpirydate" id="inputCardExpiry" class="field" placeholder="MM / YY<?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardexpires'];?>
)<?php }?>" autocomplete="cc-exp">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCVV" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvv" id="inputCardCVV" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cvv'];?>
" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                    <div id="existingCardInfo" class="row<?php if (!$_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'] || $_smarty_tpl->tpl_vars['ccinfo']->value == "new") {?> hidden<?php }?>">
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCvvExisting" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvvexisting" id="inputCardCvvExisting" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cvv'];?>
" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['shownotesfield']->value) {?>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['additionalNotes'];?>
</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="notes" class="field" rows="4" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernotesdescription'];?>
"><?php echo $_smarty_tpl->tpl_vars['orderNotes']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>

                <?php }?>

                <div class="text-center">
                    <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                        <p>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="accepttos" id="accepttos" />
                                &nbsp;
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a>
                            </label>
                        </p>
                    <?php }?>

                    <button type="submit" id="btnCompleteOrder" class="btn btn-primary btn-lg"<?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled="disabled"<?php }?> onclick="this.value='<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pleasewait'];?>
'">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['completeorder'];?>

                        &nbsp;<i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </form>

            <?php if ($_smarty_tpl->tpl_vars['servedOverSsl']->value) {?>
                <div class="alert alert-warning checkout-security-msg">
                    <i class="fa fa-lock"></i>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure'];?>
 (<strong><?php echo $_smarty_tpl->tpl_vars['ipaddress']->value;?>
</strong>) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure2'];?>

                </div>
            <?php }?>

        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.payment.js"><?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_getFontAwesomeCCIcon_7079613058f9da918b0864_06361793 */
if (!function_exists('smarty_template_function_getFontAwesomeCCIcon_7079613058f9da918b0864_06361793')) {
function smarty_template_function_getFontAwesomeCCIcon_7079613058f9da918b0864_06361793($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
    <?php if ($_smarty_tpl->tpl_vars['ccType']->value == "Visa") {?>
        fa-cc-visa
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "MasterCard") {?>
        fa-cc-mastercard
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "Discover") {?>
        fa-cc-discover
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "American Express") {?>
        fa-cc-amex
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "JCB") {?>
        fa-cc-jcb
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "Diners Club" || $_smarty_tpl->tpl_vars['ccType']->value == "EnRoute") {?>
        fa-cc-diners-club
    <?php } else { ?>
        fa-credit-card
    <?php }
foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_getFontAwesomeCCIcon_7079613058f9da918b0864_06361793 */
}
