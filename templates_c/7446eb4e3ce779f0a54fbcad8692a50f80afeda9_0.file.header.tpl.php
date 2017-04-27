<?php
/* Smarty version 3.1.29, created on 2017-04-18 13:20:07
  from "/home/wwwroot/whmcs/admin/templates/blend/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f5a207b25b63_13002831',
  'file_dependency' => 
  array (
    '7446eb4e3ce779f0a54fbcad8692a50f80afeda9' => 
    array (
      0 => '/home/wwwroot/whmcs/admin/templates/blend/header.tpl',
      1 => 1492434015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f5a207b25b63_13002831 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/wwwroot/whmcs/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WHMCS - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var datepickerformat = "<?php echo $_smarty_tpl->tpl_vars['datepickerformat']->value;?>
",
            csrfToken="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
";
        <?php if ($_smarty_tpl->tpl_vars['jquerycode']->value) {?>
            $(document).ready(function(){
                <?php echo $_smarty_tpl->tpl_vars['jquerycode']->value;?>

            });
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['jscode']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>

        <?php }?>
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body>

    <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


    <div class="topbar">
        <div class="pull-left">
            <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['title'];?>
</a> |
            <a href="../"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['clientarea'];?>
</a> |
            <a href="#" data-toggle="modal" data-target="#myNotes"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</a> |
            <a href="myaccount.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['myaccount'];?>
</a> |
            <a id="logout" href="logout.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['logout'];?>
</a>
            <?php echo $_smarty_tpl->tpl_vars['topBarNotification']->value;?>

        </div>
        <div class="pull-right date hidden-xs">
            <?php echo smarty_modifier_date_format(time(),"%A, %d %B %Y, %H:%M");?>

        </div>
    </div>
    <div class="clearfix"></div>

    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo.gif" border="0" /></a>
        </div>
        <div class="stats">
            <a href="orders.php?status=Pending">
                <span class="stat"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['pendingorders'];?>

            </a> |
            <a href="invoices.php?status=Overdue">
                <span class="stat"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['overdueinvoices'];?>

            </a> |
            <a href="supporttickets.php">
                <span class="stat"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['tickets']['awaitingreply'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['ticketsawaitingreply'];?>

            </a>
        </div>
    </div>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <div class="global-admin-warning<?php if (!$_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value) {?> hidden<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value;?>

    </div>

    <div id="sidebaropen"<?php if (!$_smarty_tpl->tpl_vars['minsidebar']->value) {?> style="display:none;"<?php }?>>
        <a href="#" onclick="sidebarOpen();return false">
            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/opensidebar.png" border="0" />
        </a>
    </div>
    <div id="sidebar"<?php if ($_smarty_tpl->tpl_vars['minsidebar']->value) {?> style="display:none;"<?php }?>>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div>

    <div class="contentarea" id="contentarea"<?php if (!$_smarty_tpl->tpl_vars['minsidebar']->value) {?> style="margin-left:209px;"<?php }?>>

        <div style="float:left;width:100%;">

            <?php if ($_smarty_tpl->tpl_vars['helplink']->value) {?>
                <div class="contexthelp">
                    <a href="http://docs.whmcs.com/<?php echo $_smarty_tpl->tpl_vars['helplink']->value;?>
" target="_blank">
                        <img src="images/icons/help.png" border="0" align="absmiddle" />
                        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['contextlink'];?>

                    </a>
                </div>
            <?php }?>

            <h1<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value == $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['hometitle']) {?> class="pull-left"<?php }?>><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
<?php }
}
