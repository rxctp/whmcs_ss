<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:12:42
  from "2476e8a0198a062cd953bcb1dddef838e2eecd21" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f389ea1534a6_25709212',
  'file_dependency' => 
  array (
    '2476e8a0198a062cd953bcb1dddef838e2eecd21' => 
    array (
      0 => '2476e8a0198a062cd953bcb1dddef838e2eecd21',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f389ea1534a6_25709212 ($_smarty_tpl) {
$template = $_smarty_tpl;
?><div class="alert alert-info info-alert"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.settingsIntro"),$_smarty_tpl);?>
</div>

<div class="form-horizontal">
    <div class="form-group">
        <label for="inputCompanyName" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.companyname"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">
            <input id="inputCompanyName" type="text" name="CompanyName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CompanyName']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="inputLogo" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.logo"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">
            <input type="file" id="inputLogo" name="Logo" class="form-control" accept="image/*">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.email"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">
            <input id="inputEmail" type="email" name="Email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
">
            <p class="help-block"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.settingsEmailDescription"),$_smarty_tpl);?>
</p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.address"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">
            <textarea id="inputAddress" name="Address" class="form-control" style="height:68px;"><?php echo $_smarty_tpl->tpl_vars['Address']->value;?>
</textarea>
            <p class="help-block"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.settingsAddressDescription"),$_smarty_tpl);?>
</p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputCountry" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.country"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">
            <select name="Country" id="inputCountry" class="form-control select-inline">
                <?php
$_from = $_smarty_tpl->tpl_vars['AvailableCountries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_country_0_saved_item = isset($_smarty_tpl->tpl_vars['country']) ? $_smarty_tpl->tpl_vars['country'] : false;
$__foreach_country_0_saved_key = isset($_smarty_tpl->tpl_vars['code']) ? $_smarty_tpl->tpl_vars['code'] : false;
$__foreach_country_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['country'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['code'] = new Smarty_Variable();
$__foreach_country_0_iteration=0;
$_smarty_tpl->tpl_vars['country']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
$__foreach_country_0_iteration++;
$_smarty_tpl->tpl_vars['country']->last = $__foreach_country_0_iteration == $__foreach_country_0_total;
$__foreach_country_0_saved_local_item = $_smarty_tpl->tpl_vars['country'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['code']->value == $_smarty_tpl->tpl_vars['DefaultCountry']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</option>
                <?php
$_smarty_tpl->tpl_vars['country'] = $__foreach_country_0_saved_local_item;
}
if ($__foreach_country_0_saved_item) {
$_smarty_tpl->tpl_vars['country'] = $__foreach_country_0_saved_item;
}
if ($__foreach_country_0_saved_key) {
$_smarty_tpl->tpl_vars['code'] = $__foreach_country_0_saved_key;
}
?>
            </select>
            <p class="help-block"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.settingsCountryDescription"),$_smarty_tpl);?>
</p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputLanguage" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.language"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">
            <select name="Language" id="inputLanguage" class="form-control select-inline">
                <?php
$_from = $_smarty_tpl->tpl_vars['AvailableLanguages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_language_1_saved_item = isset($_smarty_tpl->tpl_vars['language']) ? $_smarty_tpl->tpl_vars['language'] : false;
$__foreach_language_1_saved_key = isset($_smarty_tpl->tpl_vars['discard']) ? $_smarty_tpl->tpl_vars['discard'] : false;
$_smarty_tpl->tpl_vars['language'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['discard'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['language']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['discard']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
$__foreach_language_1_saved_local_item = $_smarty_tpl->tpl_vars['language'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value == $_smarty_tpl->tpl_vars['Language']->value) {?> selected="selected"<?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</option>
                <?php
$_smarty_tpl->tpl_vars['language'] = $__foreach_language_1_saved_local_item;
}
if ($__foreach_language_1_saved_item) {
$_smarty_tpl->tpl_vars['language'] = $__foreach_language_1_saved_item;
}
if ($__foreach_language_1_saved_key) {
$_smarty_tpl->tpl_vars['discard'] = $__foreach_language_1_saved_key;
}
?>
            </select>
            <p class="help-block"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.settingsLanguageDescription"),$_smarty_tpl);?>
</p>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.company').val(jQuery('#fieldCompanyName').val());
    });
    jQuery('#fieldCompanyName').keydown(function() {
        jQuery('.company').val(jQuery(this).val());
    });
    jQuery('#inputCountry').change(function() {
        var allowedCountries = [<?php
$_from = $_smarty_tpl->tpl_vars['allowedCcSignupCountries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_country_2_saved_item = isset($_smarty_tpl->tpl_vars['country']) ? $_smarty_tpl->tpl_vars['country'] : false;
$__foreach_country_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['country'] = new Smarty_Variable();
$__foreach_country_2_iteration=0;
$_smarty_tpl->tpl_vars['country']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
$__foreach_country_2_iteration++;
$_smarty_tpl->tpl_vars['country']->last = $__foreach_country_2_iteration == $__foreach_country_2_total;
$__foreach_country_2_saved_local_item = $_smarty_tpl->tpl_vars['country'];
?>'<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['country']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['country'] = $__foreach_country_2_saved_local_item;
}
if ($__foreach_country_2_saved_item) {
$_smarty_tpl->tpl_vars['country'] = $__foreach_country_2_saved_item;
}
?>],
            isAllowed = jQuery.inArray(jQuery(this).val(), allowedCountries);
            
        if (isAllowed < 0) {
            jQuery('.wizard-content').find('.credit-card').addClass('hidden');
            jQuery('#checkboxCreditCardEnable').iCheck('uncheck');
        } else {
            jQuery('.wizard-content').find('credit-card').removeClass('hidden');
            jQuery('#checkboxCreditCardEnable').iCheck('check');
        }
    });
<?php echo '</script'; ?>
><?php }
}
