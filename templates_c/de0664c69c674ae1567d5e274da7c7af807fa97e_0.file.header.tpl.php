<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:09:24
  from "/project/vpn/whmcs/templates/six/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f3892443dae0_23140455',
  'file_dependency' => 
  array (
    'de0664c69c674ae1567d5e274da7c7af807fa97e' => 
    array (
      0 => '/project/vpn/whmcs/templates/six/header.tpl',
      1 => 1481670844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f3892443dae0_23140455 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body>

<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<section id="header">
    <div class="container">

        <!-- Top Bar -->
        <div id="top-nav">
            <!-- Language -->
            <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="languageChooser"><i class="fa fa-language"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['chooselanguage'];?>
 <span class="caret"></span></a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['locales']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_locale_0_saved_item = isset($_smarty_tpl->tpl_vars['locale']) ? $_smarty_tpl->tpl_vars['locale'] : false;
$_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['locale']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->_loop = true;
$__foreach_locale_0_saved_local_item = $_smarty_tpl->tpl_vars['locale'];
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_local_item;
}
if ($__foreach_locale_0_saved_item) {
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_item;
}
?>
                        </ul>
                    </div>
                </div>
            <?php }?>
            <!-- Login/Account Notifications -->
            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>"notifications"),$_smarty_tpl);?>
"><i class="fa fa-info"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notifications'];?>
 (<?php echo count($_smarty_tpl->tpl_vars['clientAlerts']->value);?>
)</a>
                    <div id="accountNotificationsContent" class="hidden">
                        <?php
$_from = $_smarty_tpl->tpl_vars['clientAlerts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_alert_1_saved_item = isset($_smarty_tpl->tpl_vars['alert']) ? $_smarty_tpl->tpl_vars['alert'] : false;
$_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['alert']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
$__foreach_alert_1_saved_local_item = $_smarty_tpl->tpl_vars['alert'];
?>
                            <div class="clientalert text-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();
if ($_smarty_tpl->tpl_vars['alert']->value->getLinkText()) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
" class="btn btn-xs btn-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();?>
</a><?php }?></div>
                        <?php
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['alert']->_loop) {
?>
                            <div class="clientalert text-success"><i class="fa fa-check-square-o"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>
</div>
                        <?php
}
if ($__foreach_alert_1_saved_item) {
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_item;
}
?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="loginOrRegister" data-placement="bottom"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a>
                    <div id="loginOrRegisterContent" class="hidden">
                        <form action="<?php if ($_smarty_tpl->tpl_vars['systemsslurl']->value) {
echo $_smarty_tpl->tpl_vars['systemsslurl']->value;
} else {
echo $_smarty_tpl->tpl_vars['systemurl']->value;
}?>dologin.php" method="post" role="form">
                            <div class="form-group">
                                <input type="email" name="username" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
" required />
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginpassword'];?>
" autocomplete="off" required />
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
" />
                                    </span>
                                </div>
                            </div>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="rememberme" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
 &bull; <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a>
                            </label>
                        </form>
                        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
                            <hr />
                            <?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['newcustomersignup'],"<a href=\"".((string)$_smarty_tpl->tpl_vars['WEB_ROOT']->value)."/register.php\">","</a>");?>

                        <?php }?>
                    </div>
                </div>
            <?php }?>
            <!-- Shopping Cart -->
            <div class="pull-right nav">
                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>
 (</span><span id="cartItemCount"><?php echo $_smarty_tpl->tpl_vars['cartitemcount']->value;?>
</span><span class="hidden-xs">)</span></a>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {?>
                <!-- Return to admin link -->
                <div class="alert alert-danger admin-masquerade-notice">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['adminmasqueradingasclient'];?>
<br />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutandreturntoadminarea'];?>
</a>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
                <!-- Return to admin link -->
                <div class="alert alert-danger admin-masquerade-notice">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['adminloggedin'];?>
<br />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['returntoadminarea'];?>
</a>
                </div>
            <?php }?>

        </div>

        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" /></a>

    </div>
</section>

<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>


                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>


                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

</section>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
    <section id="home-banner">
        <div class="container text-center">
            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegin'];?>
</h2>
                <form method="post" action="domainchecker.php">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['exampledomain'];?>
" autocapitalize="none" />
                                <span class="input-group-btn">
                                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                        <input type="submit" class="btn btn-warning" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
" />
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                        <input type="submit" name="transfer" class="btn btn-info" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
" />
                                    <?php }?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                </form>
            <?php } else { ?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['doToday'];?>
</h2>
            <?php }?>
        </div>
    </section>
    <div class="home-shortcuts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs text-center">
                    <p class="lead">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>

                    </p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                            <li>
                                <a id="btnBuyADomain" href="domainchecker.php">
                                    <i class="fa fa-globe"></i>
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>
 <span>&raquo;</span>
                                    </p>
                                </a>
                            </li>
                        <?php }?>
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<section id="main-body" class="container">

    <div class="row">
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
            <?php if ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()) {?>
                <div class="col-md-9 pull-md-right">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

                </div>
            <?php }?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>

            </div>
        <?php }?>
        <!-- Container for main page display content -->
        <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
            <?php if (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['showingLoginPage']->value && !$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['templatefile']->value != 'homepage') {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

            <?php }
}
}
