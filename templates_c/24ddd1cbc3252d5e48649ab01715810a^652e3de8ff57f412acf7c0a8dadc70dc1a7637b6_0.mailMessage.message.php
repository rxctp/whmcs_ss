<?php
/* Smarty version 3.1.29, created on 2017-04-26 16:33:42
  from "mailMessage:message" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59005b66e1f211_01049616',
  'file_dependency' => 
  array (
    '652e3de8ff57f412acf7c0a8dadc70dc1a7637b6' => 
    array (
      0 => 'mailMessage:message',
      1 => 1493195622,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59005b66e1f211_01049616 ($_smarty_tpl) {
$template = $_smarty_tpl;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>WHMCS New Order Notification</title>
        <style type="text/css">
            [EmailCSS]
        </style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                                <img src="http://127.0.0.1/assets/img/logo.png" style="max-width:600px;padding:20px 20px 0 20px" id="headerImage" alt="自由之翼" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent">
                                                <p><strong>Order Information</strong></p>
<p>Order ID: <?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
<br />
Order Number: <?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>
<br />
Date/Time: <?php echo $_smarty_tpl->tpl_vars['order_date']->value;?>
<br />
Invoice Number: <?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
<br />
Payment Method: <?php echo $_smarty_tpl->tpl_vars['order_payment_method']->value;?>
</p>
<p><strong>Customer Information</strong></p>
<p>Customer ID: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
<br />
Name: <?php echo $_smarty_tpl->tpl_vars['client_first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['client_last_name']->value;?>
<br />
Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br />
Company: <?php echo $_smarty_tpl->tpl_vars['client_company_name']->value;?>
<br />
Address 1: <?php echo $_smarty_tpl->tpl_vars['client_address1']->value;?>
<br />
Address 2: <?php echo $_smarty_tpl->tpl_vars['client_address2']->value;?>
<br />
City: <?php echo $_smarty_tpl->tpl_vars['client_city']->value;?>
<br />
State: <?php echo $_smarty_tpl->tpl_vars['client_state']->value;?>
<br />
Postcode: <?php echo $_smarty_tpl->tpl_vars['client_postcode']->value;?>
<br />
Country: <?php echo $_smarty_tpl->tpl_vars['client_country']->value;?>
<br />
Phone Number: <?php echo $_smarty_tpl->tpl_vars['client_phonenumber']->value;?>
</p>
<p><strong>Order Items</strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_items']->value;?>
</p>
<?php if ($_smarty_tpl->tpl_vars['order_notes']->value) {?><p><strong>Order Notes</strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_notes']->value;?>
</p><?php }?>
<p><strong>ISP Information</strong></p>
<p>IP: <?php echo $_smarty_tpl->tpl_vars['client_ip']->value;?>
<br />
Host: <?php echo $_smarty_tpl->tpl_vars['client_hostname']->value;?>
</p><p><a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
</a></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                <a href="https://www.whmcs.com/"><img src="https://cdn.whmcs.com/images/whmcs_email_footer.png" id="footerImage" /></a>
                                                This notification was automatically generated by WHMCS<br />
                                                &nbsp;<a href="http://127.0.0.1/">http://127.0.0.1/</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="http://127.0.0.1/admin/">log in to the admin area</a>&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html><?php }
}
