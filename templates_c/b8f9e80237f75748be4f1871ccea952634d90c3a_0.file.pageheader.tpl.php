<?php
/* Smarty version 3.1.29, created on 2017-04-18 13:23:29
  from "/home/wwwroot/whmcs/templates/six/includes/pageheader.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f5a2d16976b1_26410167',
  'file_dependency' => 
  array (
    'b8f9e80237f75748be4f1871ccea952634d90c3a' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/includes/pageheader.tpl',
      1 => 1492434639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f5a2d16976b1_26410167 ($_smarty_tpl) {
?>
<div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
</div>
<?php }
}
