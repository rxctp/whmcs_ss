<?php
/* Smarty version 3.1.29, created on 2017-04-20 11:49:21
  from "/home/wwwroot/whmcs/templates/six/downloads.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f82fc1543340_76067270',
  'file_dependency' => 
  array (
    '4491e9021c154b786b2f2403d2f632ecc83ec238' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/downloads.tpl',
      1 => 1492433936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f82fc1543340_76067270 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['dlcats']->value)) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'],'textcenter'=>true), 0, true);
?>

<?php } else { ?>
    <form role="form" method="post" action="downloads.php?action=search">
        <div class="input-group margin-bottom">
            <input type="text" name="search" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadssearch'];?>
" />
            <span class="input-group-btn">
                <input type="submit" class="btn btn-primary btn-input-padded-responsive" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
" />
            </span>
        </div>
    </form>

    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsintrotext'];?>
</p>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadscategories'];?>
</h3>
                </div>
                <div class="list-group">
                    <?php
$_from = $_smarty_tpl->tpl_vars['dlcats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dlcat_0_saved_item = isset($_smarty_tpl->tpl_vars['dlcat']) ? $_smarty_tpl->tpl_vars['dlcat'] : false;
$_smarty_tpl->tpl_vars['dlcat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dlcat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dlcat']->value) {
$_smarty_tpl->tpl_vars['dlcat']->_loop = true;
$__foreach_dlcat_0_saved_local_item = $_smarty_tpl->tpl_vars['dlcat'];
?>
                        <span class="list-group-item">
                            <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/downloads/<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['urlfriendlyname'];
} else { ?>downloads.php?action=displaycat&amp;catid=<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['id'];
}?>">
                                <i class="fa fa-folder-open-o"></i>
                                <strong><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['name'];?>
</strong>
                            </a>
                            (<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['numarticles'];?>
)
                            <br />
                            <?php echo $_smarty_tpl->tpl_vars['dlcat']->value['description'];?>

                        </span>
                    <?php
$_smarty_tpl->tpl_vars['dlcat'] = $__foreach_dlcat_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['dlcat']->_loop) {
?>
                        <span class="list-group-item">
                            <p class="text-center fontsize3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>
</p>
                        </span>
                    <?php
}
if ($__foreach_dlcat_0_saved_item) {
$_smarty_tpl->tpl_vars['dlcat'] = $__foreach_dlcat_0_saved_item;
}
?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadspopular'];?>
</h3>
                </div>
                <div class="list-group">
                    <?php
$_from = $_smarty_tpl->tpl_vars['mostdownloads']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_download_1_saved_item = isset($_smarty_tpl->tpl_vars['download']) ? $_smarty_tpl->tpl_vars['download'] : false;
$_smarty_tpl->tpl_vars['download'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['download']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->_loop = true;
$__foreach_download_1_saved_local_item = $_smarty_tpl->tpl_vars['download'];
?>
                        <div class="list-group-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
">
                                <i class="fa fa-file-o"></i>
                                <strong>
                                    <?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['download']->value['clientsonly']) {?>
                                        <i class="fa fa-lock"></i>
                                    <?php }?>
                                </strong>
                            </a><br />
                            <?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>

                            <div><span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsfilesize'];?>
: <?php echo $_smarty_tpl->tpl_vars['download']->value['filesize'];?>
</span></div>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['download']->_loop) {
?>
                        <span class="list-group-item">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>

                        </span>
                    <?php
}
if ($__foreach_download_1_saved_item) {
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_1_saved_item;
}
?>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
