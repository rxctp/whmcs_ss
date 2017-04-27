<?php
/* Smarty version 3.1.29, created on 2017-04-26 15:26:32
  from "mailMessage:plaintext" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59004ba8859595_94601647',
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1493191592,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59004ba8859595_94601647 ($_smarty_tpl) {
$template = $_smarty_tpl;
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

This message is to confirm that your domain purchase has been successful. The details of the domain purchase are below: 

Registration Date: <?php echo $_smarty_tpl->tpl_vars['domain_reg_date']->value;?>

Domain: <?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>

Registration Period: <?php echo $_smarty_tpl->tpl_vars['domain_reg_period']->value;?>

Amount: <?php echo $_smarty_tpl->tpl_vars['domain_first_payment_amount']->value;?>

Next Due Date: <?php echo $_smarty_tpl->tpl_vars['domain_next_due_date']->value;?>
 

You may login to your client area at <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 to manage your new domain. 

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
