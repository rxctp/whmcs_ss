<?php
/* Smarty version 3.1.29, created on 2017-04-26 14:45:45
  from "mailMessage:plaintext" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59004219a7bb53_70824771',
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1493189145,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59004219a7bb53_70824771 ($_smarty_tpl) {
$template = $_smarty_tpl;
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

This is a notice that an invoice has been generated on <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
. 

Your payment method is: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
 

Invoice #<?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>

Amount Due: <?php echo $_smarty_tpl->tpl_vars['invoice_total']->value;?>

Due Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
 

Invoice Items 

<?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
 
------------------------------------------------------ 

You can login to your client area to view and pay the invoice at <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
 

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
