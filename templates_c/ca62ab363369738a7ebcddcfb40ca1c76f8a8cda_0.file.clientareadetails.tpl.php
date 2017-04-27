<?php
/* Smarty version 3.1.29, created on 2017-04-27 13:13:29
  from "/home/wwwroot/whmcs/templates/six/clientareadetails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59017df9e7e1a7_75781101',
  'file_dependency' => 
  array (
    'ca62ab363369738a7ebcddcfb40ca1c76f8a8cda' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/clientareadetails.tpl',
      1 => 1492433924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59017df9e7e1a7_75781101 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['successful']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['changessavedsuccessfully'],'textcenter'=>true), 0, true);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>

<?php }?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>

<form method="post" action="?action=details" role="form">

    <div class="row">
        <div class="col-sm-6">

            <div class="form-group">
                <label for="inputFirstName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
                <input type="text" name="firstname" id="inputFirstName" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
"<?php if (in_array('firstname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label for="inputLastName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
                <input type="text" name="lastname" id="inputLastName" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
"<?php if (in_array('lastname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label for="inputCompanyName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
                <input type="text" name="companyname" id="inputCompanyName" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
"<?php if (in_array('companyname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label for="inputEmail" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
"<?php if (in_array('email',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

        </div>
        <div class="col-sm-6 col-xs-12 pull-right">

            <div class="form-group">
                <label for="inputAddress1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
                <input type="text" name="address1" id="inputAddress1" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
"<?php if (in_array('address1',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label for="inputAddress2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
                <input type="text" name="address2" id="inputAddress2" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
"<?php if (in_array('address2',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label for="inputCity" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
                <input type="text" name="city" id="inputCity" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
"<?php if (in_array('city',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label for="inputState" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
                <input type="text" name="state" id="inputState" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
"<?php if (in_array('state',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label for="inputPostcode" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
                <input type="text" name="postcode" id="inputPostcode" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
"<?php if (in_array('postcode',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
            </div>

            <div class="form-group">
                <label class="control-label" for="country"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                <?php echo $_smarty_tpl->tpl_vars['clientcountriesdropdown']->value;?>

            </div>

            <div class="form-group">
                <label for="inputPhone" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
                <input type="tel" name="phonenumber" id="inputPhone" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
"<?php if (in_array('phonenumber',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled=""<?php }?> class="form-control" />
            </div>

        </div>
        <div class="col-sm-6 col-xs-12 pull-left">

            <div class="form-group">
                <label for="inputPaymentMethod" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentmethod'];?>
</label>
                <select name="paymentmethod" id="inputPaymentMethod" class="form-control">
                    <option value="none"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentmethoddefault'];?>
</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['paymentmethods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_method_0_saved_item = isset($_smarty_tpl->tpl_vars['method']) ? $_smarty_tpl->tpl_vars['method'] : false;
$_smarty_tpl->tpl_vars['method'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['method']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->_loop = true;
$__foreach_method_0_saved_local_item = $_smarty_tpl->tpl_vars['method'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['method']->value['sysname'];?>
"<?php if ($_smarty_tpl->tpl_vars['method']->value['sysname'] == $_smarty_tpl->tpl_vars['defaultpaymentmethod']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['method']->value['name'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_0_saved_local_item;
}
if ($__foreach_method_0_saved_item) {
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_0_saved_item;
}
?>
                </select>
            </div>

            <div class="form-group">
                <label for="inputBillingContact" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['defaultbillingcontact'];?>
</label>
                <select name="billingcid" id="inputBillingContact" class="form-control">
                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['usedefaultcontact'];?>
</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['contacts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_contact_1_saved_item = isset($_smarty_tpl->tpl_vars['contact']) ? $_smarty_tpl->tpl_vars['contact'] : false;
$_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['contact']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
$__foreach_contact_1_saved_local_item = $_smarty_tpl->tpl_vars['contact'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['contact']->value['id'] == $_smarty_tpl->tpl_vars['billingcid']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['contact'] = $__foreach_contact_1_saved_local_item;
}
if ($__foreach_contact_1_saved_item) {
$_smarty_tpl->tpl_vars['contact'] = $__foreach_contact_1_saved_item;
}
?>
                </select>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_2_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$__foreach_customfield_2_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_2_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
                    <div class="form-group">
                        <label class="control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                        <div class="control">
                            <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_2_saved_local_item;
}
if ($__foreach_customfield_2_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_2_saved_item;
}
if ($__foreach_customfield_2_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_customfield_2_saved_key;
}
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['emailoptoutenabled']->value) {?>
            <div class="form-group">
                <label class="control-label" for="inputEmailOptOut"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailoptout'];?>
</label>
                <div class="controls checkbox">
                    <label>
                        <input type="checkbox" value="1" name="emailoptout" id="inputEmailOptOut" <?php if ($_smarty_tpl->tpl_vars['emailoptout']->value) {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailoptoutdesc'];?>

                    </label>
                </div>
            </div>
            <?php }?>

        </div>
    </div>

    <div class="form-group text-center">
        <input class="btn btn-primary" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>
" />
        <input class="btn btn-default" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
" />
    </div>

</form>
<?php }
}
