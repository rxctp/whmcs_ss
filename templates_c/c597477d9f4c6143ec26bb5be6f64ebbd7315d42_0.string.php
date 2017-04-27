<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:12:42
  from "c597477d9f4c6143ec26bb5be6f64ebbd7315d42" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f389ea374480_45730932',
  'file_dependency' => 
  array (
    'c597477d9f4c6143ec26bb5be6f64ebbd7315d42' => 
    array (
      0 => 'c597477d9f4c6143ec26bb5be6f64ebbd7315d42',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f389ea374480_45730932 ($_smarty_tpl) {
$template = $_smarty_tpl;
?><div class="wizard-transition-step">
    <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
    <div class="title"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.setupComplete"),$_smarty_tpl);?>
</div>
    <div class="tag"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.readyToBeginUsing"),$_smarty_tpl);?>
</div>
    <div class="greyout"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.runAgainMsg"),$_smarty_tpl);?>
</div>
    <div style="margin:10px 0 0 0;" class="greyout hidden" id="enomEnabled">
        <?php ob_start();
echo WHMCS\Smarty::langFunction(array('key'=>"global.clickhere"),$_smarty_tpl);
$_tmp1=ob_get_clean();
echo WHMCS\Smarty::langFunction(array('key'=>"wizard.enomIpWhiteList",'link'=>"<a href='http://docs.whmcs.com/Enom#IP_Registration_.28User_not_permitted_from_this_IP_address.29' class='autoLinked'>".$_tmp1."</a>"),$_smarty_tpl);?>

    </div>
</div><?php }
}
