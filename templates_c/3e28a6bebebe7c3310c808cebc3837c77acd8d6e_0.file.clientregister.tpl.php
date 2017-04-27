<?php
/* Smarty version 3.1.29, created on 2017-04-20 11:45:30
  from "/home/wwwroot/whmcs/templates/six/clientregister.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f82eda1879b0_95494318',
  'file_dependency' => 
  array (
    '3e28a6bebebe7c3310c808cebc3837c77acd8d6e' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/clientregister.tpl',
      1 => 1492433932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f82eda1879b0_95494318 ($_smarty_tpl) {
if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>
    <?php echo '<script'; ?>
>
        var stateNotRequired = true;
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>((($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccount']).(' <strong><a href="cart.php" class="alert-link">')).($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccountOrder'])).('</a></strong>')), 0, true);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>

    <form method="post" class="using-password-strength" action="<?php echo $_SERVER['PHP_SELF'];?>
" role="form">
        <input type="hidden" name="register" value="true"/>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
                    <input type="text" name="firstname" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
" class="form-control" <?php if (!in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                </div>

                <div class="form-group">
                    <label for="lastname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
                    <input type="text" name="lastname" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
" class="form-control" <?php if (!in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                </div>

                <div class="form-group">
                    <label for="companyname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
                    <input type="text" name="companyname" id="companyname" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                    <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
" class="form-control"/>
                </div>

                <div id="newPassword1" class="form-group has-feedback">
                    <label for="inputNewPassword1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
                    <input type="password" class="form-control" id="inputNewPassword1" name="password" autocomplete="off" />
                    <span class="form-control-feedback glyphicon glyphicon-password"></span>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                </div>
                <div id="newPassword2" class="form-group has-feedback">
                    <label for="inputNewPassword2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
</label>
                    <input type="password" class="form-control" id="inputNewPassword2" name="password2" autocomplete="off" />
                    <span class="form-control-feedback glyphicon glyphicon-password"></span>
                    <div id="inputNewPassword2Msg">
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="address1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
                    <input type="text" name="address1" id="address1" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
" class="form-control" <?php if (!in_array('address1',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                </div>

                <div class="form-group">
                    <label for="address2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
                    <input type="text" name="address2" id="address2" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="city" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
                    <input type="text" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
" class="form-control" <?php if (!in_array('city',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                </div>

                <div class="form-group">
                    <label for="state" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
                    <input type="text" name="state" id="state" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
" class="form-control" <?php if (!in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                </div>

                <div class="form-group">
                    <label for="postcode" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
                    <input type="text" name="postcode" id="postcode" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
" class="form-control" <?php if (!in_array('postcode',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                </div>

                <div class="form-group">
                    <label for="country" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                    <select id="country" name="country" class="form-control">
                        <?php
$_from = $_smarty_tpl->tpl_vars['clientcountries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_countryName_0_saved_item = isset($_smarty_tpl->tpl_vars['countryName']) ? $_smarty_tpl->tpl_vars['countryName'] : false;
$__foreach_countryName_0_saved_key = isset($_smarty_tpl->tpl_vars['countryCode']) ? $_smarty_tpl->tpl_vars['countryCode'] : false;
$_smarty_tpl->tpl_vars['countryName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countryCode'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countryName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['countryCode']->value => $_smarty_tpl->tpl_vars['countryName']->value) {
$_smarty_tpl->tpl_vars['countryName']->_loop = true;
$__foreach_countryName_0_saved_local_item = $_smarty_tpl->tpl_vars['countryName'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['countryCode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['clientcountry']->value && $_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['defaultCountry']->value) || ($_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['clientcountry']->value)) {?> selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['countryName']->value;?>

                            </option>
                        <?php
$_smarty_tpl->tpl_vars['countryName'] = $__foreach_countryName_0_saved_local_item;
}
if ($__foreach_countryName_0_saved_item) {
$_smarty_tpl->tpl_vars['countryName'] = $__foreach_countryName_0_saved_item;
}
if ($__foreach_countryName_0_saved_key) {
$_smarty_tpl->tpl_vars['countryCode'] = $__foreach_countryName_0_saved_key;
}
?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phonenumber" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
                    <input type="tel" name="phonenumber" id="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
" class="form-control" <?php if (!in_array('phonenumber',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                </div>

                <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_1_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$__foreach_customfield_1_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_1_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
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
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_local_item;
}
if ($__foreach_customfield_1_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_item;
}
if ($__foreach_customfield_1_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_customfield_1_saved_key;
}
?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['currencies']->value) {?>
                    <div class="form-group">
                        <label for="currency" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</label>
                        <select id="currency" name="currency" class="form-control">
                            <?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_curr_2_saved_item = isset($_smarty_tpl->tpl_vars['curr']) ? $_smarty_tpl->tpl_vars['curr'] : false;
$_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['curr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
$__foreach_curr_2_saved_local_item = $_smarty_tpl->tpl_vars['curr'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"<?php if (!$_POST['currency'] && $_smarty_tpl->tpl_vars['curr']->value['default'] || $_POST['currency'] == $_smarty_tpl->tpl_vars['curr']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_2_saved_local_item;
}
if ($__foreach_curr_2_saved_item) {
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_2_saved_item;
}
?>
                        </select>
                    </div>
                <?php }?>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
:</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group col-sm-12">
                        <select name="securityqid" id="securityqid" class="form-control">
                            <?php
$_from = $_smarty_tpl->tpl_vars['securityquestions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_3_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_3_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_3_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_3_saved_local_item;
}
if ($__foreach_question_3_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_3_saved_item;
}
if ($__foreach_question_3_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_question_3_saved_key;
}
?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="securityqans"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
                        <div class="col-sm-6">
                            <input type="password" name="securityqans" id="securityqans" class="form-control" autocomplete="off" />
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
            <div class="panel panel-danger tospanel">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-exclamation-triangle tosicon"></span> &nbsp; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</h3>
                </div>
                <div class="panel-body">
                        <div class="col-md-12">
                            <label class="checkbox">
                            <input type="checkbox" name="accepttos" class="accepttos">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a>
                            </label>
                        </div>
                </div>
            </div>
        <?php }?>

        <p align="center">
            <input class="btn btn-large btn-primary" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'];?>
"/>
        </p>

    </form>

<?php }
}
}
