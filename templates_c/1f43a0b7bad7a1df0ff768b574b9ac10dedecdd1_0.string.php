<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:12:42
  from "1f43a0b7bad7a1df0ff768b574b9ac10dedecdd1" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f389ea256ac7_05771674',
  'file_dependency' => 
  array (
    '1f43a0b7bad7a1df0ff768b574b9ac10dedecdd1' => 
    array (
      0 => '1f43a0b7bad7a1df0ff768b574b9ac10dedecdd1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f389ea256ac7_05771674 ($_smarty_tpl) {
$template = $_smarty_tpl;
?>
<div class="alert alert-info info-alert"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomRecommended"),$_smarty_tpl);?>
</div>

<div class="clearfix">
    <div style="float:left;margin-top:-14px;"><img src="//www.whmcs.com/assets/product/wizard/img/enom.png" alt="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.registrarEnom"),$_smarty_tpl);?>
"></div>
    <div style="float:left;padding:6px 20px;width:390px;"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.registrarEnomCreateAccountDescription"),$_smarty_tpl);?>
</div>
</div>

<div id="enomSignupContainer">

    <div class="signup-frm">
        <div class="row">
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="name" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderYourName"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="email" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderEmail"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="address" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderAddress"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="city" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderCity"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="state" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderState"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="postcode" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderPostcode"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="country" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderCountry"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="phone" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderPhoneNumber"),$_smarty_tpl);?>
" />
            </div>
        </div>
    
        <p><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomCredentials"),$_smarty_tpl);?>
</p>
    
        <div class="row">
            <div class="col-sm-6 bottom-margin-5">
                <input type="text" name="newusername" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderUsername"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="password" name="newpassword" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderPassword"),$_smarty_tpl);?>
" />
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <select name="securityq" class="form-control">
                    <option value=""><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomSecurityQuestionSelectOne"),$_smarty_tpl);?>
</option>
                    <option value="fteach"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomSecurityQuestionFavoriteTeacher"),$_smarty_tpl);?>
</option>
                    <option value="fvspot"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomSecurityQuestionFavoriteVacationSpot"),$_smarty_tpl);?>
</option>
                    <option value="fpet"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomSecurityQuestionFavoritePet"),$_smarty_tpl);?>
</option>
                    <option value="fmovie"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomSecurityQuestionFavoriteMovie"),$_smarty_tpl);?>
</option>
                    <option value="fbook"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomSecurityQuestionFavoriteBook"),$_smarty_tpl);?>
</option>
                </select>
            </div>
            <div class="col-sm-6 bottom-margin-5">
                <input type="password" name="securitya" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.placeholderSecurityQuestionAnswer"),$_smarty_tpl);?>
" />
            </div>
        </div>
    
        <div style="margin:10px 0 0 0;"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomAlreadyHaveAccount"),$_smarty_tpl);?>
 <a href="#" class="enomUseExistingAcct"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.loginUsingExistingAccount"),$_smarty_tpl);?>
</a></div> 
    </div>
    
    <div class="signup-frm-success hidden">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="alert alert-success text-center">
                    <h2><i class="fa fa-check"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomAccountCreated"),$_smarty_tpl);?>
</h2>
                    <p>
                        <?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomAccountManagementUrl"),$_smarty_tpl);?>

                    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div id="enomLoginContainer" class="hidden">

    <div style="margin:10px 0 0 0;">
        <?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.dontHaveAnEnomAccount"),$_smarty_tpl);?>
 <a href="#" class="enomCreateAcct"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.createNewOneNow"),$_smarty_tpl);?>
</a>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputUsername" class="col-sm-4 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomApiUsername"),$_smarty_tpl);?>
</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomApiUsername"),$_smarty_tpl);?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputApiToken" class="col-sm-4 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomApiToken"),$_smarty_tpl);?>
</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="inputApiToken" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomApiToken"),$_smarty_tpl);?>
">
                        <br>
                        <div class="alert alert-warning info-alert">
                            Don't have an API Token? <a href="https://www.enom.com/apitokens" target="_blank"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomCreateToken"),$_smarty_tpl);?>
</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<input type="hidden" name="accttype" id="inputEnomAccountType" value="new">

<?php echo '<script'; ?>
>
$(document).ready(function() {
    $('.enomUseExistingAcct').click(function(e) {
        e.preventDefault();
        $('#enomSignupContainer').slideUp('fast', function() {
            $('#enomLoginContainer').hide().removeClass('hidden').slideDown('fast');
            $('#inputEnomAccountType').val('existing');
        });
    });
    $('.enomCreateAcct').click(function(e) {
        e.preventDefault();
        $('#enomLoginContainer').slideUp('fast', function() {
            $('#enomSignupContainer').slideDown('fast');
            $('#inputEnomAccountType').val('new');
        });
    });
    $('body').on('click', '.modal-setup-wizard .modal-submit', function() {
        var accountType = $('#inputEnomAccountType').val();
            
            if (accountType == 'new') {
                var username = $('input[name="newusername"]').val(),
                    password = $('input[name="newpassword"]').val();
            } else {
                var username = $('#inputUsername').val(),
                    password = $('#inputApiToken').val();
            }
            if (username && password) {
                $('#enomEnabled').removeClass('hidden');
            }
        });
});
<?php echo '</script'; ?>
><?php }
}
