<?php
/* Smarty version 3.1.29, created on 2017-04-21 18:11:01
  from "/home/wwwroot/whmcs/templates/six/forwardpage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9dab5234491_21439827',
  'file_dependency' => 
  array (
    'a2f3170ff5b66e4f0032bb220aa3c6a9a508d733' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/forwardpage.tpl',
      1 => 1492433937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f9dab5234491_21439827 ($_smarty_tpl) {
?>
<br />

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['message']->value,'textcenter'=>true), 0, true);
?>


<br />

<div class="text-center">

    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" alt="Loading" border="0" />

    <br /><br /><br />

    <div id="frmPayment" align="center">

        <?php echo $_smarty_tpl->tpl_vars['code']->value;?>


        <form method="post" action="<?php if ($_smarty_tpl->tpl_vars['invoiceid']->value) {?>viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;
} else { ?>clientarea.php<?php }?>">
        </form>

    </div>

</div>

<br /><br /><br />

<?php echo '<script'; ?>
 language="javascript">
    setTimeout("autoSubmitFormByContainer('frmPayment')", 5000);
<?php echo '</script'; ?>
>
<?php }
}
