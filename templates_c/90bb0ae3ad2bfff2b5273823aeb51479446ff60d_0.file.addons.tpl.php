<?php
/* Smarty version 3.1.29, created on 2017-04-21 17:56:46
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/addons.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f9d75e3a2733_71173371',
  'file_dependency' => 
  array (
    '90bb0ae3ad2bfff2b5273823aeb51479446ff60d' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/addons.tpl',
      1 => 1492434544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/common.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories-collapsed.tpl' => 1,
  ),
),false)) {
function content_58f9d75e3a2733_71173371 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</h1>
            </div>

        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>

        <div class="col-md-9 pull-md-right">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <?php if (count($_smarty_tpl->tpl_vars['addons']->value) == 0) {?>
                <div class="alert alert-warning text-center" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddonsnone'];?>

                </div>
                <p class="text-center">
                    <a href="clientarea.php" class="btn btn-default">
                        <i class="fa fa-arrow-circle-left"></i>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['returnToClientArea'];?>

                    </a>
                </p>
            <?php }?>

            <div class="products">
                <div class="row row-eq-height">
                    <?php
$_from = $_smarty_tpl->tpl_vars['addons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addon_0_saved_item = isset($_smarty_tpl->tpl_vars['addon']) ? $_smarty_tpl->tpl_vars['addon'] : false;
$__foreach_addon_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addon']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
$__foreach_addon_0_saved_local_item = $_smarty_tpl->tpl_vars['addon'];
?>
                        <div class="col-md-6">
                            <div class="product clearfix" id="product<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=add" class="form-inline">
                                    <input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
" />
                                    <header>
                                        <span><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']) {?>
                                            <span class="qty">
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>

                                            </span>
                                        <?php }?>
                                    </header>
                                    <div class="product-desc">
                                        <p><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</p>
                                        <div class="form-group">
                                            <select name="productid" id="inputProductId<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="field">
                                                <?php
$_from = $_smarty_tpl->tpl_vars['addon']->value['productids'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_1_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_1_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?> - <?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];
}?>
                                                    </option>
                                                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_local_item;
}
if ($__foreach_product_1_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_item;
}
?>
                                            </select>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="product-pricing">
                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['free']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                            <?php } else { ?>
                                                <span class="price"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurringamount'];?>
 <?php echo $_smarty_tpl->tpl_vars['addon']->value['billingcycle'];?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['setupfee']) {?><br />+ <?php echo $_smarty_tpl->tpl_vars['addon']->value['setupfee'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
                                            <?php }?>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-shopping-cart"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                        </button>
                                    </footer>
                                </form>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['num']->value%2 != 0) {?>
                            </div>
                            <div class="row row-eq-height">
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_0_saved_local_item;
}
if ($__foreach_addon_0_saved_item) {
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_0_saved_item;
}
if ($__foreach_addon_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_addon_0_saved_key;
}
?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
