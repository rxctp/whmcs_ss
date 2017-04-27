<?php
/* Smarty version 3.1.29, created on 2017-04-26 16:34:59
  from "/home/wwwroot/whmcs/templates/six/clientareacancelrequest.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59005bb35d2b03_46244678',
  'file_dependency' => 
  array (
    '810d84ad23f554c8fee073cb586503c24a87a424' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/clientareacancelrequest.tpl',
      1 => 1492433921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59005bb35d2b03_46244678 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['invalid']->value) {?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelinvalid'],'textcenter'=>true), 0, true);
?>

    <p class="text-center">
        <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'];?>
</a>
    </p>

<?php } elseif ($_smarty_tpl->tpl_vars['requested']->value) {?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelconfirmation'],'textcenter'=>true), 0, true);
?>


    <p class="text-center">
        <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'];?>
</a>
    </p>

<?php } else { ?>

    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>"<li>".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelreasonrequired'])."</li>"), 0, true);
?>

    <?php }?>

    <?php ob_start();
if ($_smarty_tpl->tpl_vars['domain']->value) {
echo " (";
echo (string)$_smarty_tpl->tpl_vars['domain']->value;
echo ")";
}
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'textcenter'=>true,'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelproduct']).": <strong>".((string)$_smarty_tpl->tpl_vars['groupname']->value)." - ".((string)$_smarty_tpl->tpl_vars['productname']->value)."</strong>".$_tmp1), 0, true);
?>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=cancel&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-stacked">
        <input type="hidden" name="sub" value="submit" />

        <fieldset>
            <div class="form-group">
                <label for="cancellationreason"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancelreason'];?>
</label>
                <textarea name="cancellationreason" id="cancellationreason" class="form-control" rows="6" class="fullwidth"></textarea>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['domainid']->value) {?>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancelrequestdomain'];?>
</h3>
                </div>
                <div class="panel-body">
                    <p><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cancelrequestdomaindesc'],$_smarty_tpl->tpl_vars['domainnextduedate']->value,$_smarty_tpl->tpl_vars['domainprice']->value,$_smarty_tpl->tpl_vars['domainregperiod']->value);?>
</p>
                    <div class="col-sm-12 text-center">
                        <label class="checkbox">
                            <input type="checkbox" name="canceldomain" id="canceldomain" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancelrequestdomainconfirm'];?>

                        </label>
                    </div>
                </div>
            </div>
            <?php }?>

            <div class="form-group">
                <div class="form-inline text-center">
                    <label class="control-label" for="type"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancellationtype'];?>
</label>
                    <select name="type" id="type" class="form-control">
                        <option value="Immediate"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancellationimmediate'];?>
</option>
                        <option value="End of Billing Period"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancellationendofbillingperiod'];?>
</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-inline text-center">
                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancelrequestbutton'];?>
" class="btn btn-danger" />
                    <a href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
</a>
                </div>
            </div>

        </fieldset>

    </form>

<?php }
}
}
