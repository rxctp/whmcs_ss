<?php
/* Smarty version 3.1.29, created on 2017-04-27 10:13:53
  from "mailMessage:plaintext" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_590153e1c139b6_48866737',
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1493259233,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590153e1c139b6_48866737 ($_smarty_tpl) {
$template = $_smarty_tpl;
?>Order Information


Order ID: <?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>

Order Number: <?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>

Date/Time: <?php echo $_smarty_tpl->tpl_vars['order_date']->value;?>

Invoice Number: <?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>

Payment Method: <?php echo $_smarty_tpl->tpl_vars['order_payment_method']->value;?>



Customer Information


Customer ID: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>

Name: <?php echo $_smarty_tpl->tpl_vars['client_first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['client_last_name']->value;?>

Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>

Company: <?php echo $_smarty_tpl->tpl_vars['client_company_name']->value;?>

Address 1: <?php echo $_smarty_tpl->tpl_vars['client_address1']->value;?>

Address 2: <?php echo $_smarty_tpl->tpl_vars['client_address2']->value;?>

City: <?php echo $_smarty_tpl->tpl_vars['client_city']->value;?>

State: <?php echo $_smarty_tpl->tpl_vars['client_state']->value;?>

Postcode: <?php echo $_smarty_tpl->tpl_vars['client_postcode']->value;?>

Country: <?php echo $_smarty_tpl->tpl_vars['client_country']->value;?>

Phone Number: <?php echo $_smarty_tpl->tpl_vars['client_phonenumber']->value;?>



Order Items


<?php echo $_smarty_tpl->tpl_vars['order_items']->value;?>



<?php if ($_smarty_tpl->tpl_vars['order_notes']->value) {?>Order Notes


<?php echo $_smarty_tpl->tpl_vars['order_notes']->value;?>


<?php }?>
ISP Information


IP: <?php echo $_smarty_tpl->tpl_vars['client_ip']->value;?>

Host: <?php echo $_smarty_tpl->tpl_vars['client_hostname']->value;?>


<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;
}
}
