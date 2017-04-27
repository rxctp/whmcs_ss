<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:09:24
  from "/project/vpn/whmcs/templates/six/includes/verifyemail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f38924563980_10734634',
  'file_dependency' => 
  array (
    'fe0a0bbc22a3f9e99f1412c62b6d97bd99b4bdda' => 
    array (
      0 => '/project/vpn/whmcs/templates/six/includes/verifyemail.tpl',
      1 => 1481670844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f38924563980_10734634 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value) {?>
    <div class="email-verification alert-success">
        <div class="container">
            <i class="fa fa-check"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailAddressVerified'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value === false) {?>
    <div class="email-verification alert-danger">
        <div class="container">
            <i class="fa fa-times-circle"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailKeyExpired'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationPending']->value && !$_smarty_tpl->tpl_vars['showingLoginPage']->value) {?>
    <div class="email-verification alert-warning">
        <div class="container">
            <i class="fa fa-warning"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php }
}
}
