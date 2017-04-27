<?php
/* Smarty version 3.1.29, created on 2017-04-21 17:57:35
  from "/home/wwwroot/whmcs/templates/six/logout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9d78f00b734_54476071',
  'file_dependency' => 
  array (
    '91805893eea15741edfe7538ecb45285ea6e4fda' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/logout.tpl',
      1 => 1492433942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f9d78f00b734_54476071 ($_smarty_tpl) {
?>
<div class="logincontainer">

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['logouttitle']), 0, true);
?>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['logoutsuccessful'],'textcenter'=>true), 0, true);
?>


    <div class="main-content">
        <p class="text-center">
            <a href="index.php" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutcontinuetext'];?>
</a>
        </p>
    </div>
</div>
<?php }
}
