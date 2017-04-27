<?php
/* Smarty version 3.1.29, created on 2017-04-20 11:46:25
  from "/home/wwwroot/whmcs/templates/six/supportticketsubmit-steptwo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f82f117cd864_64705696',
  'file_dependency' => 
  array (
    '5ded8f0150d68ac2ac56542a1b404ca3cefb3149' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/supportticketsubmit-steptwo.tpl',
      1 => 1492433949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f82f117cd864_64705696 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>

<?php }?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?step=3" enctype="multipart/form-data" role="form">

    <div class="row">
        <div class="form-group col-sm-4">
            <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientname'];?>
</label>
            <input type="text" name="name" id="inputName" value="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
echo $_smarty_tpl->tpl_vars['clientname']->value;
} else {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" class="form-control<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
        </div>
        <div class="form-group col-sm-5">
            <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientemail'];?>
</label>
            <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-10">
            <label for="inputSubject"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubject'];?>
</label>
            <input type="text" name="subject" id="inputSubject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="inputDepartment"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsdepartment'];?>
</label>
            <select name="deptid" id="inputDepartment" class="form-control" onchange="refreshCustomFields(this)">
                <?php
$_from = $_smarty_tpl->tpl_vars['departments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_department_0_saved_item = isset($_smarty_tpl->tpl_vars['department']) ? $_smarty_tpl->tpl_vars['department'] : false;
$_smarty_tpl->tpl_vars['department'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['department']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
$__foreach_department_0_saved_local_item = $_smarty_tpl->tpl_vars['department'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['department']->value['id'] == $_smarty_tpl->tpl_vars['deptid']->value) {?> selected="selected"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>

                    </option>
                <?php
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_local_item;
}
if ($__foreach_department_0_saved_item) {
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_item;
}
?>
            </select>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['relatedservices']->value) {?>
            <div class="form-group col-sm-5">
                <label for="inputRelatedService"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['relatedservice'];?>
</label>
                <select name="relatedservice" id="inputRelatedService" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['none'];?>
</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['relatedservices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_relatedservice_1_saved_item = isset($_smarty_tpl->tpl_vars['relatedservice']) ? $_smarty_tpl->tpl_vars['relatedservice'] : false;
$_smarty_tpl->tpl_vars['relatedservice'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['relatedservice']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['relatedservice']->value) {
$_smarty_tpl->tpl_vars['relatedservice']->_loop = true;
$__foreach_relatedservice_1_saved_local_item = $_smarty_tpl->tpl_vars['relatedservice'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['id'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['status'];?>
)
                        </option>
                    <?php
$_smarty_tpl->tpl_vars['relatedservice'] = $__foreach_relatedservice_1_saved_local_item;
}
if ($__foreach_relatedservice_1_saved_item) {
$_smarty_tpl->tpl_vars['relatedservice'] = $__foreach_relatedservice_1_saved_item;
}
?>
                </select>
            </div>
        <?php }?>
        <div class="form-group col-sm-3">
            <label for="inputPriority"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketspriority'];?>
</label>
            <select name="urgency" id="inputPriority" class="form-control">
                <option value="High"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "High") {?> selected="selected"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencyhigh'];?>

                </option>
                <option value="Medium"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Medium" || !$_smarty_tpl->tpl_vars['urgency']->value) {?> selected="selected"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencymedium'];?>

                </option>
                <option value="Low"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Low") {?> selected="selected"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencylow'];?>

                </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputMessage"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactmessage'];?>
</label>
        <textarea name="message" id="inputMessage" rows="12" class="form-control markdown-editor" data-auto-save-name="client_ticket_open"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
    </div>

    <div class="row form-group">
        <div class="col-sm-12">
            <label for="inputAttachments"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketattachments'];?>
</label>
        </div>
        <div class="col-sm-9">
            <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
            <div id="fileUploadsContainer"></div>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-default btn-block" onclick="extraTicketAttachment()">
                <i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addmore'];?>

            </button>
        </div>
        <div class="col-xs-12 ticket-attachments-message text-muted">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsallowedextensions'];?>
: <?php echo $_smarty_tpl->tpl_vars['allowedfiletypes']->value;?>

        </div>
    </div>

    <div id="customFieldsContainer">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/supportticketsubmit-customfields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div>

    <div id="autoAnswerSuggestions" class="well hidden"></div>

    <div class="text-center margin-bottom">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div>

    <p class="text-center">
        <input type="submit" id="openTicketSubmit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubmit'];?>
" class="btn btn-primary" />
        <a href="supporttickets.php" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
</a>
    </p>

</form>

<?php if ($_smarty_tpl->tpl_vars['kbsuggestions']->value) {?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            getTicketSuggestions();
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
