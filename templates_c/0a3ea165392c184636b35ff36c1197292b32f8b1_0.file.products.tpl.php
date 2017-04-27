<?php
/* Smarty version 3.1.29, created on 2017-04-18 13:27:10
  from "/home/wwwroot/whmcs/templates/orderforms/standard_cart/products.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f5a3aec92353_04057384',
  'file_dependency' => 
  array (
    '0a3ea165392c184636b35ff36c1197292b32f8b1' => 
    array (
      0 => '/home/wwwroot/whmcs/templates/orderforms/standard_cart/products.tpl',
      1 => 1492434557,
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
function content_58f5a3aec92353_04057384 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1>
                    <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['headline']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['headline'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['name'];?>

                    <?php }?>
                </h1>
                <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['productGroup']->value['tagline'];?>
</p>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                </div>
            <?php }?>
        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>

        <div class="col-md-9 pull-md-right">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <div class="products" id="products">
                <div class="row row-eq-height">
                    <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->iteration=0;
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$_smarty_tpl->tpl_vars['product']->iteration++;
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                        <div class="col-md-6">
                            <div class="product clearfix" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
">
                                <header>
                                    <span id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']) {?>
                                        <span class="qty">
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>

                                        </span>
                                    <?php }?>
                                </header>
                                <div class="product-desc">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['featuresdesc']) {?>
                                        <p id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-description">
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value['featuresdesc'];?>

                                        </p>
                                    <?php }?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['product']->value['features'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['feature']) ? $_smarty_tpl->tpl_vars['feature'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->iteration=0;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$_smarty_tpl->tpl_vars['value']->iteration++;
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                                            <li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
                                                <span class="feature-value"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
                                                <?php echo $_smarty_tpl->tpl_vars['feature']->value;?>

                                            </li>
                                        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['feature'] = $__foreach_value_1_saved_key;
}
?>
                                    </ul>
                                </div>
                                <footer>
                                    <div class="product-pricing" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-price">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>
<br />
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>
                                                <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['displayprice'];?>
</span>
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingfrom'];?>

                                                <br />
                                            <?php }?>
                                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'];?>
</span>
                                            <br />
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "monthly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "quarterly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "semiannually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "annually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "biennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "triennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                                            <?php }?>
                                            <br>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']) {?>
                                                <small><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>
</small>
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                    <a href="cart.php?a=add&<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>" class="btn btn-success btn-sm" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-order-button">
                                        <i class="fa fa-shopping-cart"></i>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                    </a>
                                </footer>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->iteration%2 == 0) {?>
                            </div>
                            <div class="row row-eq-height">
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
