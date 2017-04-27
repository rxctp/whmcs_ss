<?php
/* Smarty version 3.1.29, created on 2017-04-20 11:48:03
  from "/home/wwwroot/whmcs/templates/six/viewannouncement.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f82f734f2035_27405716',
  'file_dependency' => 
  array (
    '84cf645cb154958ef31a0af0b16eaeeff283bd89' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/six/viewannouncement.tpl',
      1 => 1492433952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f82f734f2035_27405716 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/wwwroot/whmcs/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if ($_smarty_tpl->tpl_vars['twittertweet']->value) {?>
    <div class="pull-right">
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="<?php echo $_smarty_tpl->tpl_vars['twitterusername']->value;?>
">Tweet</a><?php echo '<script'; ?>
 type="text/javascript" src="//platform.twitter.com/widgets.js"><?php echo '</script'; ?>
>
    </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>


<br />
<br />

<p>
    <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['timestamp']->value,"%A, %B %e, %Y");?>
</strong>
</p>

<?php if ($_smarty_tpl->tpl_vars['googleplus1']->value) {?>
    <br />
    <br />
    <g:plusone annotation="inline"></g:plusone>
    <?php echo '<script'; ?>
 type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebookrecommend']->value) {?>
    <br />
    <br />
    
    <div id="fb-root">
    </div>
    <?php echo '<script'; ?>
>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
    
    <div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['urlfriendlytitle']->value;?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebookcomments']->value) {?>
    <br />
    <br />
    
    <div id="fb-root">
    </div>
    <?php echo '<script'; ?>
>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
    
    <fb:comments href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['urlfriendlytitle']->value;?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" num_posts="5" width="500"></fb:comments>
<?php }?>

<p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements.php" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'];?>
</a>
</p>
<?php }
}
