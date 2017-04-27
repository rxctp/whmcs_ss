<?php
/* Smarty version 3.1.29, created on 2017-04-18 15:00:45
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/domaintransfer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f5b99dcce759_30916634',
  'file_dependency' => 
  array (
    'e59eff8ddd4966ede7ed2d1baf47e0d57c327591' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/domaintransfer.tpl',
      1 => 1492434552,
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
function content_58f5b99dcce759_30916634 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferdomain'];?>

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


            <div class="text-center">
                <h2><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.transferToUs'),$_smarty_tpl);?>
</h2>
                <p><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.transferExtend'),$_smarty_tpl);?>
*</p>
            </div>
            <br />

            <form method="post" action="cart.php" id="frmDomainTransfer">
                <input type="hidden" name="a" value="addDomainTransfer">

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.singleTransfer'),$_smarty_tpl);?>
</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="inputTransferDomain"><?php echo WHMCS\Smarty::langFunction(array('key'=>'domainname'),$_smarty_tpl);?>
</label>
                                    <input type="text" class="form-control" name="domain" id="inputTransferDomain" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>'yourdomainplaceholder'),$_smarty_tpl);?>
.<?php echo WHMCS\Smarty::langFunction(array('key'=>'yourtldplaceholder'),$_smarty_tpl);?>
" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.enterDomain'),$_smarty_tpl);?>
" />
                                </div>
                                <div class="form-group">
                                    <label for="inputAuthCode" style="width:100%;">
                                        <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.authCode'),$_smarty_tpl);?>

                                        <a href="" data-toggle="tooltip" data-placement="left" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.authCodeTooltip'),$_smarty_tpl);?>
" class="pull-right"><i class="fa fa-question-circle"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.help'),$_smarty_tpl);?>
</a>
                                    </label>
                                    <input type="text" class="form-control" name="epp" id="inputAuthCode" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.authCodePlaceholder'),$_smarty_tpl);?>
" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.required'),$_smarty_tpl);?>
" />
                                </div>
                                <div id="transferUnavailable" class="alert alert-warning slim-alert text-center hidden"></div>
                                <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
                                    <div class="captcha-container" id="captchaContainer">
                                        <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
                                            <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
                                            <div id="google-recaptcha" class="g-recaptcha recaptcha-transfer center-block" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['reCaptchaPublicKey']->value;?>
" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.required'),$_smarty_tpl);?>
" ></div>
                                        <?php } else { ?>
                                            <div class="default-captcha">
                                                <p><?php echo WHMCS\Smarty::langFunction(array('key'=>"cartSimpleCaptcha"),$_smarty_tpl);?>
</p>
                                                <div>
                                                    <img id="inputCaptchaImage" src="includes/verifyimage.php" />
                                                    <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control input-sm" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.required'),$_smarty_tpl);?>
" />
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="panel-footer text-right">
                                <button type="submit" id="btnTransferDomain" class="btn btn-primary btn-transfer">
                                    <span class="loader hidden" id="addTransferLoader">
                                        <i class="fa fa-fw fa-spinner fa-spin"></i>
                                    </span>
                                    <span id="addToCart"><?php echo WHMCS\Smarty::langFunction(array('key'=>"orderForm.addToCart"),$_smarty_tpl);?>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            <p class="text-center small">* <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.extendExclusions'),$_smarty_tpl);?>
</p>

        </div>
    </div>
</div>
<?php }
}
