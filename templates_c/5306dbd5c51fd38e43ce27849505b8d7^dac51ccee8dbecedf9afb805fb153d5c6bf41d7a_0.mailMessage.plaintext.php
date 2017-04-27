<?php
/* Smarty version 3.1.29, created on 2017-04-27 10:19:38
  from "mailMessage:plaintext" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5901553aed0814_91558969',
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1493259578,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5901553aed0814_91558969 ($_smarty_tpl) {
$template = $_smarty_tpl;
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below. 

Email Address: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>

Password: <?php echo $_smarty_tpl->tpl_vars['client_password']->value;?>
 

To login, visit <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
