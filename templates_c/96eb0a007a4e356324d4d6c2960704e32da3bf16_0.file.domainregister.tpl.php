<?php
/* Smarty version 3.1.29, created on 2017-04-18 13:21:49
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/domainregister.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f5a26d0ce5a2_69450607',
  'file_dependency' => 
  array (
    '96eb0a007a4e356324d4d6c2960704e32da3bf16' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/domainregister.tpl',
      1 => 1492434551,
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
function content_58f5a26d0ce5a2_69450607 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>

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


            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['findNewDomain'];?>
</p>

            <div class="domain-checker-container">
                <div class="domain-checker-bg clearfix">
                    <form method="post" action="cart.php" id="frmDomainChecker">
                        <input type="hidden" name="a" value="checkDomain">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                                <div class="input-group input-group-lg input-group-box">
                                    <input type="text" name="domain" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" id="inputDomain" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.domainOrKeyword'),$_smarty_tpl);?>
" />
                                    <span class="input-group-btn">
                                        <button type="submit" id="btnCheckAvailability" class="btn btn-primary domain-check-availability"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
                            <div class="captcha-container" id="captchaContainer">
                                <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
                                    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
                                    <div id="google-recaptcha" class="g-recaptcha center-block" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['reCaptchaPublicKey']->value;?>
" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.required'),$_smarty_tpl);?>
" ></div>
                                <?php } else { ?>
                                    <div class="default-captcha default-captcha-register-margin">
                                        <p><?php echo WHMCS\Smarty::langFunction(array('key'=>"cartSimpleCaptcha"),$_smarty_tpl);?>
</p>
                                        <div>
                                            <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                                            <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control input-sm" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.required'),$_smarty_tpl);?>
" />
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    </form>
                </div>
            </div>

            <div id="DomainSearchResults" class="hidden">

                <div id="searchDomainInfo" class="domain-checker-result-headline">
                    <p id="primaryLookupSearching" class="domain-lookup-loader domain-lookup-primary-loader domain-searching"><i class="fa fa-spinner fa-spin"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.searching'),$_smarty_tpl);?>
...</p>
                    <div id="primaryLookupResult" class="domain-lookup-result hidden">
                        <p class="domain-invalid domain-checker-invalid"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.domainLetterOrNumber'),$_smarty_tpl);?>
<span class="domain-length-restrictions"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.domainLengthRequirements'),$_smarty_tpl);?>
</span></p>
                        <p class="domain-unavailable domain-checker-unavailable"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.domainIsUnavailable'),$_smarty_tpl);?>
</p>
                        <p class="domain-available domain-checker-available"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable1'];?>
 <strong></strong> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable2'];?>
</p>
                        <a class="domain-contact-support btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainContactUs'];?>
</a>
                        <p class="domain-price">
                            <span class="price"></span>
                            <button class="btn btn-primary btn-add-to-cart" data-whois="0" data-domain="">
                                <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                                <span class="added"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>'checkout'),$_smarty_tpl);?>
</span>
                                <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                            </button>
                        </p>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['spotlightTlds']->value) {?>
                    <div id="spotlightTlds" class="spotlight-tlds clearfix">
                        <div class="spotlight-tlds-container">
                            <?php
$_from = $_smarty_tpl->tpl_vars['spotlightTlds']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$__foreach_data_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
                                <div class="spotlight-tld-container spotlight-tld-container-<?php echo count($_smarty_tpl->tpl_vars['spotlightTlds']->value);?>
">
                                    <div id="spotlight<?php echo $_smarty_tpl->tpl_vars['data']->value['tldNoDots'];?>
" class="spotlight-tld">
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['group']) {?>
                                            <div class="spotlight-tld-<?php echo $_smarty_tpl->tpl_vars['data']->value['group'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['groupDisplayName'];?>
</div>
                                        <?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['tld'];?>

                                        <span class="domain-lookup-loader domain-lookup-spotlight-loader">
                                            <i class="fa fa-spinner fa-spin"></i>
                                        </span>
                                        <div class="domain-lookup-result">
                                            <button type="button" class="btn unavailable hidden" disabled="disabled">
                                                <?php echo WHMCS\Smarty::langFunction(array('key'=>'domainunavailable'),$_smarty_tpl);?>

                                            </button>
                                            <button type="button" class="btn invalid hidden" disabled="disabled">
                                                <?php echo WHMCS\Smarty::langFunction(array('key'=>'domainunavailable'),$_smarty_tpl);?>

                                            </button>
                                            <span class="available price hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['register'];?>
</span>
                                            <button type="button" class="btn hidden btn-add-to-cart" data-whois="0" data-domain="">
                                                <span class="to-add"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.add'),$_smarty_tpl);?>
</span>
                                                <span class="added"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>'checkout'),$_smarty_tpl);?>
</span>
                                                <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                            </button>
                                            <button type="button" class="btn btn-primary domain-contact-support hidden">Contact Support to Purchase</button>
                                        </div>
                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_item;
}
if ($__foreach_data_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_data_0_saved_key;
}
?>
                        </div>
                    </div>
                <?php }?>

                <div class="suggested-domains<?php if (!$_smarty_tpl->tpl_vars['showSuggestionsContainer']->value) {?> hidden<?php }?>">
                    <div class="panel-heading">
                        <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.suggestedDomains'),$_smarty_tpl);?>

                    </div>
                    <div id="suggestionsLoader" class="panel-body domain-lookup-loader domain-lookup-suggestions-loader">
                        <i class="fa fa-spinner fa-spin"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.generatingSuggestions'),$_smarty_tpl);?>

                    </div>
                    <ul id="domainSuggestions" class="domain-lookup-result list-group hidden">
                        <li class="domain-suggestion list-group-item hidden">
                            <span class="domain"></span><span class="extension"></span>
                            <button type="button" class="btn btn-add-to-cart" data-whois="1" data-domain="">
                                <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                                <span class="added"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>'checkout'),$_smarty_tpl);?>
</span>
                                <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                            </button>
                            <button type="button" class="btn btn-primary domain-contact-support hidden">Contact Support to Purchase</button>
                            <span class="price"></span>
                            <span class="promo hidden">
                                <span class="sales-group-hot hidden"><?php echo WHMCS\Smarty::langFunction(array('key'=>'domainCheckerSalesGroup.hot'),$_smarty_tpl);?>
</span>
                                <span class="sales-group-new hidden"><?php echo WHMCS\Smarty::langFunction(array('key'=>'domainCheckerSalesGroup.new'),$_smarty_tpl);?>
</span>
                                <span class="sales-group-sale hidden"><?php echo WHMCS\Smarty::langFunction(array('key'=>'domainCheckerSalesGroup.sale'),$_smarty_tpl);?>
</span>
                            </span>
                        </li>
                    </ul>
                    <div class="panel-footer more-suggestions hidden text-center">
                        <a id="moreSuggestions" href="#" onclick="loadMoreSuggestions();return false;"><?php echo WHMCS\Smarty::langFunction(array('key'=>'domainsmoresuggestions'),$_smarty_tpl);?>
</a>
                        <span id="noMoreSuggestions" class="no-more small hidden"><?php echo WHMCS\Smarty::langFunction(array('key'=>'domaincheckernomoresuggestions'),$_smarty_tpl);?>
</span>
                    </div>
                    <div class="text-center text-muted domain-suggestions-warning">
                        <p><?php echo WHMCS\Smarty::langFunction(array('key'=>'domainssuggestionswarnings'),$_smarty_tpl);?>
</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="<?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>col-md-6<?php } else { ?>col-md-8 col-md-offset-2<?php }?>">
                    <div class="domain-promo-box">

                        <div class="clearfix">
                            <i class="fa fa-server fa-4x"></i>
                            <h3><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.addHosting'),$_smarty_tpl);?>
</h3>
                            <p class="font-bold text-warning"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.chooseFromRange'),$_smarty_tpl);?>
</p>
                        </div>

                        <p><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.packagesForBudget'),$_smarty_tpl);?>
</p>

                        <a href="cart.php" class="btn btn-warning">
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.exploreNow'),$_smarty_tpl);?>

                        </a>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>
                    <div class="col-md-6">
                        <div class="domain-promo-box">

                            <div class="clearfix">
                                <i class="fa fa-globe fa-4x"></i>
                                <h3><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.transferToUs'),$_smarty_tpl);?>
</h3>
                                <p class="font-bold text-primary"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.transferExtend'),$_smarty_tpl);?>
*</p>
                            </div>

                            <a href="cart.php?a=add&domain=transfer" class="btn btn-primary">
                                <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.transferDomain'),$_smarty_tpl);?>

                            </a>

                            <p class="small">* <?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.extendExclusions'),$_smarty_tpl);?>
</p>
                        </div>
                    </div>
                <?php }?>
            </div>

        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['captchaError']->value) {?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            jQuery('#btnCheckAvailability').click();
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
