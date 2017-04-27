<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:09:24
  from "/project/vpn/whmcs/templates/six/includes/captcha.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f38924540496_45563973',
  'file_dependency' => 
  array (
    'ce683f898baeabe59e39856573ca14c4813bb94e' => 
    array (
      0 => '/project/vpn/whmcs/templates/six/includes/captcha.tpl',
      1 => 1481670844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f38924540496_45563973 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['filename']->value == 'index') {?>
            <div class="domainchecker-homepage-captcha">
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
            <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
            <div id="google-recaptcha-domainchecker" class="g-recaptcha center-block" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['reCaptchaPublicKey']->value;?>
"></div>
        <?php } else { ?>
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <div id="default-captcha-domainchecker" class="<?php if ($_smarty_tpl->tpl_vars['filename']->value == 'domainchecker') {?>input-group input-group-box <?php }?>text-center">
                    <p><?php echo WHMCS\Smarty::langFunction(array('key'=>"captchaverify"),$_smarty_tpl);?>
</p>

                    <div class="col-xs-6 captchaimage">
                        <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                    </div>

                    <div class="col-xs-6">
                        <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control" />
                    </div>
                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['filename']->value == 'index') {?>
            </div>
        <?php }?>
    </div>
<?php }
}
}
