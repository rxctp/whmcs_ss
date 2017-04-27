<?php
/* Smarty version 3.1.29, created on 2017-04-16 23:12:42
  from "d322f4dfacece77d5e4c3e448ecc013229b73bd6" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f389ea35b158_32723279',
  'file_dependency' => 
  array (
    'd322f4dfacece77d5e4c3e448ecc013229b73bd6' => 
    array (
      0 => 'd322f4dfacece77d5e4c3e448ecc013229b73bd6',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f389ea35b158_32723279 ($_smarty_tpl) {
$template = $_smarty_tpl;
?><div class="alert alert-info info-alert"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.sellingWebHosting"),$_smarty_tpl);?>
</div>

<div class="form-horizontal">
    <div class="form-group">
        <label for="inputControlPanel" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.controlpanel"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">

            <div style="margin-bottom:5px;"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.serverTypeNotListed"),$_smarty_tpl);?>
</div>

            <input type="hidden" name="module" value="" id="inputModule" />
            <div class="server-module-select">
                <?php
$_from = $_smarty_tpl->tpl_vars['autoConfigServers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_server_0_saved_item = isset($_smarty_tpl->tpl_vars['server']) ? $_smarty_tpl->tpl_vars['server'] : false;
$_smarty_tpl->tpl_vars['server'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['server']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->_loop = true;
$__foreach_server_0_saved_local_item = $_smarty_tpl->tpl_vars['server'];
?>

                    <span data-module="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
">
                        <img src="../modules/servers/<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
/logo.png" height="22" />
                    </span>

                <?php
$_smarty_tpl->tpl_vars['server'] = $__foreach_server_0_saved_local_item;
}
if ($__foreach_server_0_saved_item) {
$_smarty_tpl->tpl_vars['server'] = $__foreach_server_0_saved_item;
}
?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label for="inputHostname" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.hostnameip"),$_smarty_tpl);?>
</label>
        <div class="col-sm-9">
            <input id="inputHostname" type="text" name="hostname" class="form-control" placeholder="server1.example.com">
        </div>
    </div>
    <div class="form-group">
        <label for="inputServerUsername" class="col-sm-3 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.username"),$_smarty_tpl);?>
</label>
        <div class="col-sm-3">
            <input id="inputServerUsername" type="text" name="username" class="form-control" placeholder="root">
        </div>
        <label for="inputPassword" class="col-sm-2 control-label"><?php echo WHMCS\Smarty::langFunction(array('key'=>"fields.password"),$_smarty_tpl);?>
</label>
        <div class="col-sm-4">
            <input id="inputPassword" type="password" name="password" class="form-control">
        </div>
    </div>
</div>

<div style="background-color:#f8f8f8;margin:15px 0 12px 0;padding:10px;text-align:left;">
    <?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.testServerConnectionDescription"),$_smarty_tpl);?>

    <div class="pull-right" style="margin-top:-2px;">
    <button type="button" class="btn btn-primary btn-xs" id="btnVerifyConnection">
        <span><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.verifyConnection"),$_smarty_tpl);?>
</span>
        <span class="hidden"><i class="fa fa-spinner fa-spin"></i> <?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.verifyConnectionConnecting"),$_smarty_tpl);?>
</span>
    </button>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="inputServerName"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.serverName"),$_smarty_tpl);?>
 <span class="field-desc"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.serverNameDesc"),$_smarty_tpl);?>
</span></label>
            <input type="text" name="name" class="form-control" id="inputServerName" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.serverNameExample"),$_smarty_tpl);?>
" value="">
        </div>
        <div class="form-group">
            <label for="inputNameserver1"><?php echo WHMCS\Smarty::langFunction(array('key'=>"configservers.primarynameserver"),$_smarty_tpl);?>
</label>
            <input type="text" name="nameserver1" class="form-control" id="inputNameserver1" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"configservers.primarynameserverexample"),$_smarty_tpl);?>
" value="">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="inputPrimaryIp"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.serverPrimaryIp"),$_smarty_tpl);?>
 <span class="field-desc"><?php echo WHMCS\Smarty::langFunction(array('key'=>"wizard.displayedInWelcomeEmails"),$_smarty_tpl);?>
</span></label>
            <input type="text" name="primaryip" class="form-control" id="inputPrimaryIp" placeholder="xx.xxx.xx.xx" value="">
        </div>
        <div class="form-group">
            <label for="inputNameserver2"><?php echo WHMCS\Smarty::langFunction(array('key'=>"configservers.secondarynameserver"),$_smarty_tpl);?>
</label>
            <input type="text" name="nameserver2" class="form-control" id="inputNameserver2" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"configservers.secondarynameserverexample"),$_smarty_tpl);?>
" value="">
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>

var verifyButtonLabel;

$(document).ready(function() {
    $(".server-module-select span").click(function() {
        $("#inputModule").val($(this).data("module"));
        $(".server-module-select span").removeClass('active');
        $(this).addClass('active');
    });
    $(".server-module-select span:first-child").click();

    $('#btnVerifyConnection').click(function() {
        var requestVars = 'module=' + $('#inputModule').val()
            + '&hostname=' + $('#inputHostname').val()
            + '&username=' + $('#inputServerUsername').val()
            + '&password=' + $('#inputPassword').val();

        $('#btnVerifyConnection span:first-child').hide();
        $('#btnVerifyConnection span:last-child').removeClass('hidden').show();
        wizardCall('verifyConnection', requestVars, function(data){
            $('#btnVerifyConnection span:first-child').show();
            $('#btnVerifyConnection span:last-child').hide();
            if (data.error) {
                wizardError(data.error);
            } else {
                $('.info-alert:visible').html('<?php echo WHMCS\Smarty::langFunction(array('key'=>strtr("wizard.testConnectionSuccessful", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
').removeClass('alert-info').removeClass('alert-danger').addClass('alert-success');
                $('#inputServerName').val(data.serverName);
                $('#inputPrimaryIp').val(data.primaryIp);
                $('#inputNameserver1').val(data.nameservers[0]);
                $('#inputNameserver2').val(data.nameservers[1]);
            }
        });
    });
});
<?php echo '</script'; ?>
>
<?php }
}
