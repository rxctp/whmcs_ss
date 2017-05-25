{if $checkout}

    {include file="orderforms/$carttpl/checkout.tpl"}

{else}

<script>
    // Define state tab index value
    var statesTab = 10;
    var stateNotRequired = true;
</script>
{include file="orderforms/standard_cart/common.tpl"}
<script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>
<header>
  <div class="container">
      <div class="navbar-header">
          <a class="navbar-brand" href="">影梭</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="true">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
      </div>
      <nav class="navbar-collapse collapse" id="bs-navbar">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/">首页</a>
            </li>
            <li>
              <a href="/client.html">客户端</a>
            </li>
            <li>
              <a href="/help.html">使用教程</a>
            </li>
            <li>
              <a href="/tos.html">服务条款</a>
            </li>
            <li>
              <a href="/clientarea.php">登录</a>
            </li>
            <li>
              <a href="/register.php" class="btn btn-outline btn-border">注册</a>
            </li>
          </ul>
      </nav>
  </div>
</header>
<!-- menu -->
<section class="menu">
  <div class="container">
    <div class="row i-menu text-center">
      <div class="col-sm-3">
        <a href="javascript:;">
          <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="theme-gray size-md">
              <g>
                <g>
                    <path d="M23,12.5c-0.3,0-0.5-0.2-0.5-0.5V4.7c0-1.7-1.6-3.2-3.5-3.2h-8c-1.9,0-3.5,1.4-3.5,3.2V12c0,0.3-0.2,0.5-0.5,0.5    S6.5,12.3,6.5,12V4.7c0-2.3,2-4.2,4.5-4.2h8c2.5,0,4.5,1.9,4.5,4.2V12C23.5,12.3,23.3,12.5,23,12.5z"></path>
                </g>
                <g>
                    <path d="M21,9.5H9C8.7,9.5,8.5,9.3,8.5,9S8.7,8.5,9,8.5h12c0.3,0,0.5,0.2,0.5,0.5S21.3,9.5,21,9.5z"></path>
                </g>
                <g>
                    <path d="M29,29.5H1c-0.3,0-0.5-0.2-0.5-0.5V9c0-0.3,0.2-0.5,0.5-0.5h4c0.3,0,0.5,0.2,0.5,0.5S5.3,9.5,5,9.5H1.5v19h27v-19H25    c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h4c0.3,0,0.5,0.2,0.5,0.5v20C29.5,29.3,29.3,29.5,29,29.5z"></path>
                </g>
                <g>
                    <path d="M17,19.5h-4c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h4c0.3,0,0.5,0.2,0.5,0.5S17.3,19.5,17,19.5z"></path>
                </g>
                <g>
                    <path d="M15,21.5c-0.3,0-0.5-0.2-0.5-0.5v-4c0-0.3,0.2-0.5,0.5-0.5s0.5,0.2,0.5,0.5v4C15.5,21.3,15.3,21.5,15,21.5z"></path>
                </g>
                <g>
                    <path d="M15,25.5c-3.6,0-6.5-2.9-6.5-6.5s2.9-6.5,6.5-6.5s6.5,2.9,6.5,6.5S18.6,25.5,15,25.5z M15,13.5c-3,0-5.5,2.5-5.5,5.5    s2.5,5.5,5.5,5.5s5.5-2.5,5.5-5.5S18,13.5,15,13.5z"></path>
                </g>
              </g>
            </svg>
            <p>选择产品</p>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="javascript:;">
          <div class="card">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="theme-gray size-md">
                <g>
                  <g>
                      <path d="M26.5,25h-23C3.2,25,3,24.8,3,24.5S3.2,24,3.5,24h23c0.3,0,0.5,0.2,0.5,0.5S26.8,25,26.5,25z"></path>
                  </g>
                  <g>
                      <path d="M23.5,12c-0.3,0-0.5-0.2-0.5-0.5v-7C23,2.7,21.3,1,19.5,1H10C8.1,1,7,2.8,7,4.5v7C7,11.8,6.8,12,6.5,12S6,11.8,6,11.5v-7    C6,2,7.8,0,10,0h9.5C21.9,0,24,2.1,24,4.5v7C24,11.8,23.8,12,23.5,12z"></path>
                  </g>
                  <g>
                      <path d="M20.5,8h-11C9.2,8,9,7.8,9,7.5S9.2,7,9.5,7h11C20.8,7,21,7.2,21,7.5S20.8,8,20.5,8z"></path>
                  </g>
                  <g>
                      <path d="M29.5,30h-29C0.2,30,0,29.8,0,29.5v-22C0,7.2,0.2,7,0.5,7h4C4.8,7,5,7.2,5,7.5S4.8,8,4.5,8H1v21h28V8h-3.5    C25.2,8,25,7.8,25,7.5S25.2,7,25.5,7h4C29.8,7,30,7.2,30,7.5v22C30,29.8,29.8,30,29.5,30z"></path>
                  </g>
                </g>
              </svg>
              <p>确认信息</p>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="javascript:;">
          <div class="card active">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="theme-gray size-md">
                <g>
                  <g>
                      <path d="M26.5,19h-11c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h11c1.1,0,2.5-0.9,2.5-2V8c0-1.1-0.9-2-2-2H12c-1.1,0-2,0.9-2,2v3.5    c0,0.3-0.2,0.5-0.5,0.5S9,11.8,9,11.5V8c0-1.7,1.3-3,3-3h15c1.7,0,3,1.3,3,3v8C30,17.7,28.1,19,26.5,19z"></path>
                  </g>
                  <g>
                      <path d="M13.5,9h-1C12.2,9,12,8.8,12,8.5S12.2,8,12.5,8h1C13.8,8,14,8.2,14,8.5S13.8,9,13.5,9z"></path>
                  </g>
                  <g>
                      <path d="M17.5,9h-1C16.2,9,16,8.8,16,8.5S16.2,8,16.5,8h1C17.8,8,18,8.2,18,8.5S17.8,9,17.5,9z"></path>
                  </g>
                  <g>
                      <path d="M21.5,9h-1C20.2,9,20,8.8,20,8.5S20.2,8,20.5,8h1C21.8,8,22,8.2,22,8.5S21.8,9,21.5,9z"></path>
                  </g>
                  <g>
                      <path d="M25.5,9h-1C24.2,9,24,8.8,24,8.5S24.2,8,24.5,8h1C25.8,8,26,8.2,26,8.5S25.8,9,25.5,9z"></path>
                  </g>
                  <g>
                      <g>
                          <path d="M12.9,25c-0.2,0-0.4,0-0.6-0.1l-8-1.5C4.1,23.4,4,23.2,4,22.9l1-5.5c0,0,0-0.1,0-0.1C5.9,15.7,7.8,15,9.3,15l2.9-2.9     c1-1,2-1.2,2.7-0.5c0.7,0.7,0.9,1.5,0.6,2.1l-2,3c-0.7,0.9-0.9,1.5-0.9,1.7c0,0.5,0.3,1.1,0.7,1.5c0.5,0.4,1.1,0.6,1.7,0.5     l2.5-0.5l4.1,0c0.2,0,0.4,0.2,0.5,0.4c0.1,0.2,0,0.4-0.2,0.6l-5,3C16.2,24.4,14.1,25,12.9,25z M5.1,22.6l7.5,1.4     c0.8,0.2,3.2-0.5,3.6-0.9c0,0,0.1-0.1,0.1-0.1l3.5-2.1h-2.2l-2.4,0.5c-0.9,0.1-1.8-0.1-2.5-0.8c-0.7-0.6-1.1-1.4-1.1-2.2     c0-0.5,0.4-1.3,1.1-2.3l2-3c0.1-0.2-0.1-0.5-0.4-0.9c-0.4-0.4-1.3,0.5-1.3,0.5l-3,3C9.8,15.9,9.6,16,9.5,16     c-1.3,0-2.9,0.5-3.5,1.7L5.1,22.6z"></path>
                      </g>
                      <g>
                          <path d="M0.5,25C0.2,25,0,24.8,0,24.5v-9c0-0.1,0.1-0.3,0.1-0.4C0.2,15.1,0.4,15,0.5,15c0.7,0,4.3,0.1,5.3,1.1     C6,16.2,6,16.4,6,16.5c-0.3,3.2-1,6.5-1,6.6c0,0.1-0.1,0.2-0.2,0.3C4.7,23.5,2.2,25,0.5,25z M1,16v7.9c1-0.2,2.4-0.9,3.1-1.3     c0.2-0.7,0.7-3.4,0.9-6C4.2,16.3,2.4,16.1,1,16z"></path>
                      </g>
                  </g>
                  <g>
                      <g>
                          <path d="M22.5,16c-1.4,0-2.5-1.1-2.5-2.5s1.1-2.5,2.5-2.5c0.4,0,0.9,0.1,1.3,0.3c0.2,0.1,0.2,0.3,0.2,0.4s-0.1,0.3-0.2,0.4     c-0.5,0.3-0.8,0.8-0.8,1.3s0.3,1,0.8,1.3c0.2,0.1,0.2,0.3,0.2,0.4s-0.1,0.3-0.2,0.4C23.4,15.9,22.9,16,22.5,16z M22.5,12     c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5c0,0,0,0,0,0c-0.3-0.4-0.5-1-0.5-1.5S22.2,12.4,22.5,12C22.5,12,22.5,12,22.5,12z"></path>
                      </g>
                      <g>
                          <g>
                              <path d="M24.5,16c-1.4,0-2.5-1.1-2.5-2.5s1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5S25.9,16,24.5,16z M24.5,12c-0.8,0-1.5,0.7-1.5,1.5      s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S25.3,12,24.5,12z"></path>
                          </g>
                      </g>
                  </g>
                </g>
              </svg>
            <p>支付订单</p>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="javascript:;">
          <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve" class="theme-gray size-md">
              <g>
                <g>
                    <path d="M22,10c-0.1,0-0.3,0-0.4-0.1l-2-2c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0L22,8.8l4.6-4.6c0.2-0.2,0.5-0.2,0.7,0    s0.2,0.5,0,0.7l-5,5C22.3,10,22.1,10,22,10z"></path>
                </g>
                <g>
                    <path d="M26,22H11.8c-2.1,0-4.1-1.5-4.5-3.4L4.9,3H1C0.7,3,0.5,2.8,0.5,2.5S0.7,2,1,2h4.3c0.2,0,0.5,0.2,0.5,0.4l2.5,16    c0.3,1.4,1.9,2.6,3.5,2.6H26c0.3,0,0.5,0.2,0.5,0.5S26.3,22,26,22z"></path>
                </g>
                <g>
                    <path d="M11,30c-1.9,0-3.5-1.6-3.5-3.5S9.1,23,11,23s3.5,1.6,3.5,3.5S12.9,30,11,30z M11,24c-1.4,0-2.5,1.1-2.5,2.5S9.6,29,11,29    s2.5-1.1,2.5-2.5S12.4,24,11,24z"></path>
                </g>
                <g>
                    <path d="M23,30c-1.9,0-3.5-1.6-3.5-3.5S21.1,23,23,23s3.5,1.6,3.5,3.5S24.9,30,23,30z M23,24c-1.4,0-2.5,1.1-2.5,2.5    S21.6,29,23,29s2.5-1.1,2.5-2.5S24.4,24,23,24z"></path>
                </g>
                <g>
                    <path d="M23,13c-3.6,0-6.5-2.9-6.5-6.5S19.4,0,23,0s6.5,2.9,6.5,6.5S26.6,13,23,13z M23,1c-3,0-5.5,2.5-5.5,5.5S20,12,23,12    s5.5-2.5,5.5-5.5S26,1,23,1z"></path>
                </g>
                <g>
                    <path d="M25,17H7.5C7.2,17,7,16.8,7,16.5S7.2,16,7.5,16H25c0.8,0,1.9-0.4,2-1.5l0.3-1.7c0.1-0.3,0.3-0.5,0.6-0.4    c0.3,0.1,0.5,0.3,0.4,0.6L28,14.7C27.8,16,26.6,17,25,17z"></path>
                </g>
                <g>
                    <path d="M15,7H6C5.7,7,5.5,6.8,5.5,6.5S5.7,6,6,6h9c0.3,0,0.5,0.2,0.5,0.5S15.3,7,15,7z"></path>
                </g>
              </g>
            </svg>
            <p>订单完成</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="order" id="order-standard_cart">
    <div class="container">
      {include file="orderforms/standard_cart/sidebar-categories-collapsed.tpl"}
      <div class="row">
        <div class="col-md-8 order-msg">
            {if $promoerrormessage}
                <div class="alert alert-warning text-center" role="alert">
                    {$promoerrormessage}
                </div>
            {elseif $errormessage}
                <div class="alert alert-danger" role="alert">
                    <p>{$LANG.orderForm.correctErrors}:</p>
                    <ul>
                        {$errormessage}
                    </ul>
                </div>
            {elseif $promotioncode && $rawdiscount eq "0.00"}
                <div class="alert alert-info text-center" role="alert">
                    {$LANG.promoappliedbutnodiscount}
                </div>
            {elseif $promoaddedsuccess}
                <div class="alert alert-success text-center" role="alert">
                    {$LANG.orderForm.promotionAccepted}
                </div>
            {/if}

            {if $bundlewarnings}
                <div class="alert alert-warning" role="alert">
                    <strong>{$LANG.bundlereqsnotmet}</strong><br />
                    <ul>
                        {foreach from=$bundlewarnings item=warning}
                            <li>{$warning}</li>
                        {/foreach}
                    </ul>
                </div>
            {/if}

            <form method="post" action="{$smarty.server.PHP_SELF}?a=view">

                <div class="view-cart-items-header">
                    <div class="row">
                        <div class="{if $showqtyoptions}col-sm-5{else}col-sm-7{/if} col-xs-7">
                            {$LANG.orderForm.productOptions}
                        </div>
                        {if $showqtyoptions}
                            <div class="col-sm-2 hidden-xs text-center">
                                {$LANG.orderForm.qty}
                            </div>
                        {/if}
                        <div class="col-sm-4 col-xs-5 text-right">
                            {$LANG.orderForm.priceCycle}
                        </div>
                    </div>
                </div>
                <div class="view-cart-items">

                    {foreach $products as $num => $product}
                        <div class="item">
                            <div class="row">
                                <div class="{if $showqtyoptions}col-sm-5{else}col-sm-7{/if}">
                                    <span class="item-title">
                                        {$product.productinfo.name}
                                        <a href="{$smarty.server.PHP_SELF}?a=confproduct&i={$num}" class="btn btn-link btn-xs">
                                            <i class="fa fa-pencil"></i>
                                            {$LANG.orderForm.edit}
                                        </a>
                                        <span class="visible-xs-inline">
                                            <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('p','{$num}')">
                                                <i class="fa fa-times"></i>
                                                {$LANG.orderForm.remove}
                                            </button>
                                        </span>
                                    </span>
                                    <span class="item-group">
                                        {$product.productinfo.groupname}
                                    </span>
                                    {if $product.domain}
                                        <span class="item-domain">
                                            {$product.domain}
                                        </span>
                                    {/if}
                                    {if $product.configoptions}
                                        <small>
                                        {foreach key=confnum item=configoption from=$product.configoptions}
                                            &nbsp;&raquo; {$configoption.name}: {if $configoption.type eq 1 || $configoption.type eq 2}{$configoption.option}{elseif $configoption.type eq 3}{if $configoption.qty}{$configoption.option}{else}{$LANG.no}{/if}{elseif $configoption.type eq 4}{$configoption.qty} x {$configoption.option}{/if}<br />
                                        {/foreach}
                                        </small>
                                    {/if}
                                </div>
                                {if $showqtyoptions}
                                    <div class="col-sm-2 item-qty">
                                        {if $product.allowqty}
                                            <input type="number" name="qty[{$num}]" value="{$product.qty}" class="form-control text-center" />
                                            <button type="submit" class="btn btn-xs">
                                                {$LANG.orderForm.update}
                                            </button>
                                        {/if}
                                    </div>
                                {/if}
                                <div class="col-sm-4 item-price">
                                    <span>{$product.pricing.totalTodayExcludingTaxSetup}</span>
                                    <span class="cycle">{$product.billingcyclefriendly}</span>
                                    {if $product.pricing.productonlysetup}
                                        {$product.pricing.productonlysetup->toPrefixed()} {$LANG.ordersetupfee}
                                    {/if}
                                    {if $product.proratadate}<br />({$LANG.orderprorata} {$product.proratadate}){/if}
                                </div>
                                <div class="col-sm-1 hidden-xs">
                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('p','{$num}')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {foreach key=addonnum item=addon from=$product.addons}
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <span class="item-title">
                                            {$addon.name}
                                        </span>
                                        <span class="item-group">
                                            {$LANG.orderaddon}
                                        </span>
                                        {if $addon.setup}
                                            <span class="item-setup">
                                                {$addon.setup} {$LANG.ordersetupfee}
                                            </span>
                                        {/if}
                                    </div>
                                    <div class="col-sm-4 item-price">
                                        <span>{$addon.totaltoday}</span>
                                        <span class="cycle">{$addon.billingcyclefriendly}</span>
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    {/foreach}

                    {foreach $addons as $num => $addon}
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <span class="item-title">
                                        {$addon.name}
                                        <span class="visible-xs-inline">
                                            <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('a','{$num}')">
                                                <i class="fa fa-times"></i>
                                                {$LANG.orderForm.remove}
                                            </button>
                                        </span>
                                    </span>
                                    <span class="item-group">
                                        {$addon.productname}
                                    </span>
                                    {if $addon.domainname}
                                        <span class="item-domain">
                                            {$addon.domainname}
                                        </span>
                                    {/if}
                                    {if $addon.setup}
                                        <span class="item-setup">
                                            {$addon.setup} {$LANG.ordersetupfee}
                                        </span>
                                    {/if}
                                </div>
                                <div class="col-sm-4 item-price">
                                    <span>{$addon.pricingtext}</span>
                                    <span class="cycle">{$addon.billingcyclefriendly}</span>
                                </div>
                                <div class="col-sm-1 hidden-xs">
                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('a','{$num}')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                    {foreach $domains as $num => $domain}
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <span class="item-title">
                                        {if $domain.type eq "register"}{$LANG.orderdomainregistration}{else}{$LANG.orderdomaintransfer}{/if}
                                        <a href="{$smarty.server.PHP_SELF}?a=confdomains" class="btn btn-link btn-xs">
                                            <i class="fa fa-pencil"></i>
                                            {$LANG.orderForm.edit}
                                        </a>
                                        <span class="visible-xs-inline">
                                            <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('d','{$num}')">
                                                <i class="fa fa-times"></i>
                                                {$LANG.orderForm.remove}
                                            </button>
                                        </span>
                                    </span>
                                    {if $domain.domain}
                                        <span class="item-domain">
                                            {$domain.domain}
                                        </span>
                                    {/if}
                                    {if $domain.dnsmanagement}&nbsp;&raquo; {$LANG.domaindnsmanagement}<br />{/if}
                                    {if $domain.emailforwarding}&nbsp;&raquo; {$LANG.domainemailforwarding}<br />{/if}
                                    {if $domain.idprotection}&nbsp;&raquo; {$LANG.domainidprotection}<br />{/if}
                                </div>
                                <div class="col-sm-4 item-price">
                                    {if count($domain.pricing) == 1 || $domain.type == 'transfer'}
                                        <span name="{$domain.domain}Price">{$domain.price}</span>
                                        <span class="cycle">{$domain.regperiod} {$domain.yearsLanguage}</span>
                                        <span class="renewal cycle">
                                            {lang key='domainrenewalprice'} <span class="renewal-price cycle">{$domain.renewprice->toPrefixed()}{$domain.shortYearsLanguage}</span>
                                        </span>
                                    {else}
                                        <span name="{$domain.domain}Price">{$domain.price}</span>
                                        <div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="{$domain.domain}Pricing" name="{$domain.domain}Pricing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                {$domain.regperiod} {$domain.yearsLanguage}
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="{$domain.domain}Pricing">
                                                {foreach $domain.pricing as $years => $price}
                                                    <li>
                                                        <a href="#" onclick="selectDomainPeriodInCart('{$domain.domain}', '{$price.register}', {$years}, '{if $years == 1}{lang key='orderForm.year'}{else}{lang key='orderForm.years'}{/if}');return false;">
                                                            {$years} {if $years == 1}{lang key='orderForm.year'}{else}{lang key='orderForm.years'}{/if} @ {$price.register}
                                                        </a>
                                                    </li>
                                                {/foreach}
                                            </ul>
                                        </div>
                                        <span class="renewal cycle">
                                            {lang key='domainrenewalprice'} <span class="renewal-price cycle">{$domain.renewprice->toPrefixed()}{$domain.shortYearsLanguage}</span>
                                        </span>
                                    {/if}
                                </div>
                                <div class="col-sm-1 hidden-xs">
                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('d','{$num}')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                    {foreach key=num item=domain from=$renewals}
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <span class="item-title">
                                        {$LANG.domainrenewal}
                                    </span>
                                    <span class="item-domain">
                                        {$domain.domain}
                                    </span>
                                    {if $domain.dnsmanagement}&nbsp;&raquo; {$LANG.domaindnsmanagement}<br />{/if}
                                    {if $domain.emailforwarding}&nbsp;&raquo; {$LANG.domainemailforwarding}<br />{/if}
                                    {if $domain.idprotection}&nbsp;&raquo; {$LANG.domainidprotection}<br />{/if}
                                </div>
                                <div class="col-sm-4 item-price">
                                    <span>{$domain.price}</span>
                                    <span class="cycle">{$domain.regperiod} {$LANG.orderyears}</span>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('r','{$num}')">
                                        <i class="fa fa-times"></i>
                                        <span class="visible-xs">{$LANG.orderForm.remove}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                    {if $cartitems == 0}
                        <div class="view-cart-empty">
                            {$LANG.cartempty}
                        </div>
                    {/if}

                </div>

                {if $cartitems > 0}
                    <div class="empty-cart">
                        <button type="button" class="btn btn-link btn-xs" id="btnEmptyCart">
                            <i class="fa fa-trash"></i>
                            <span>{$LANG.emptycart}</span>
                        </button>
                    </div>
                {/if}

            </form>

            {foreach $gatewaysoutput as $gatewayoutput}
                <div class="view-cart-gateway-checkout">
                    {$gatewayoutput}
                </div>
            {/foreach}

            <div class="view-cart-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#applyPromo" aria-controls="applyPromo" role="tab" data-toggle="tab">{$LANG.orderForm.applyPromoCode}</a></li>
                    {if $taxenabled && !$loggedin}
                        <li role="presentation"><a href="#calcTaxes" aria-controls="calcTaxes" role="tab" data-toggle="tab">{$LANG.orderForm.estimateTaxes}</a></li>
                    {/if}
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active promo" id="applyPromo">
                        {if $promotioncode}
                            <div class="view-cart-promotion-code">
                                {$promotioncode} - {$promotiondescription}
                            </div>
                            <div class="text-center">
                                <a href="{$smarty.server.PHP_SELF}?a=removepromo" class="btn btn-default btn-sm">
                                    {$LANG.orderForm.removePromotionCode}
                                </a>
                            </div>
                        {else}
                            <form method="post" action="cart.php?a=view">
                                <div class="form-group prepend-icon ">
                                    <label for="cardno" class="field-icon">
                                        <i class="fa fa-ticket"></i>
                                    </label>
                                    <input type="text" name="promocode" id="inputPromotionCode" class="field" placeholder="{lang key="orderPromoCodePlaceholder"}" required="required">
                                </div>
                                <button type="submit" name="validatepromo" class="btn btn-block" value="{$LANG.orderpromovalidatebutton}">
                                    {$LANG.orderpromovalidatebutton}
                                </button>
                            </form>
                        {/if}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="calcTaxes">

                        <form method="post" action="cart.php?a=setstateandcountry">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputState" class="col-sm-4 control-label">{$LANG.orderForm.state}</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="state" id="inputState" value="{$clientsdetails.state}" class="form-control"{if $loggedin} disabled="disabled"{/if} />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCountry" class="col-sm-4 control-label">{$LANG.orderForm.country}</label>
                                    <div class="col-sm-7">
                                        <select name="country" id="inputCountry" class="form-control">
                                            {foreach $countries as $countrycode => $countrylabel}
                                                <option value="{$countrycode}"{if (!$country && $countrycode == $defaultcountry) || $countrycode eq $country} selected{/if}>
                                                    {$countrylabel}
                                                </option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn">
                                        {$LANG.orderForm.updateTotals}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 order-box" id="scrollingPanelContainer">
          <div class="order-summary" id="orderSummary">
            <div class="loader" id="orderSummaryLoader" style="display: none;">
                <i class="fa fa-fw fa-refresh fa-spin"></i>
            </div>
            <h2>{$LANG.ordersummary}</h2>
            <div class="summary-container">

                <div class="subtotal clearfix">
                    <span class="pull-left">{$LANG.ordersubtotal}</span>
                    <span id="subtotal" class="pull-right">{$subtotal}</span>
                </div>
                {if $promotioncode || $taxrate || $taxrate2}
                    <div class="bordered-totals">
                        {if $promotioncode}
                            <div class="clearfix">
                                <span class="pull-left">{$promotiondescription}</span>
                                <span id="discount" class="pull-right">{$discount}</span>
                            </div>
                        {/if}
                        {if $taxrate}
                            <div class="clearfix">
                                <span class="pull-left">{$taxname} @ {$taxrate}%</span>
                                <span id="taxTotal1" class="pull-right">{$taxtotal}</span>
                            </div>
                        {/if}
                        {if $taxrate2}
                            <div class="clearfix">
                                <span class="pull-left">{$taxname2} @ {$taxrate2}%</span>
                                <span id="taxTotal2" class="pull-right">{$taxtotal2}</span>
                            </div>
                        {/if}
                    </div>
                {/if}
                <div class="recurring-totals clearfix">
                    <span class="pull-left">{$LANG.orderForm.totals}</span>
                    <span id="recurring" class="pull-right recurring-charges">
                        <span id="recurringMonthly" {if !$totalrecurringmonthly}style="display:none;"{/if}>
                            <span class="cost">{$totalrecurringmonthly}</span> {$LANG.orderpaymenttermmonthly}<br />
                        </span>
                        <span id="recurringQuarterly" {if !$totalrecurringquarterly}style="display:none;"{/if}>
                            <span class="cost">{$totalrecurringquarterly}</span> {$LANG.orderpaymenttermquarterly}<br />
                        </span>
                        <span id="recurringSemiAnnually" {if !$totalrecurringsemiannually}style="display:none;"{/if}>
                            <span class="cost">{$totalrecurringsemiannually}</span> {$LANG.orderpaymenttermsemiannually}<br />
                        </span>
                        <span id="recurringAnnually" {if !$totalrecurringannually}style="display:none;"{/if}>
                            <span class="cost">{$totalrecurringannually}</span> {$LANG.orderpaymenttermannually}<br />
                        </span>
                        <span id="recurringBiennially" {if !$totalrecurringbiennially}style="display:none;"{/if}>
                            <span class="cost">{$totalrecurringbiennially}</span> {$LANG.orderpaymenttermbiennially}<br />
                        </span>
                        <span id="recurringTriennially" {if !$totalrecurringtriennially}style="display:none;"{/if}>
                            <span class="cost">{$totalrecurringtriennially}</span> {$LANG.orderpaymenttermtriennially}<br />
                        </span>
                    </span>
                </div>

                <div class="total-due-today total-due-today-padded">
                    <span id="totalDueToday" class="amt">{$total}</span>
                    <span>{$LANG.ordertotalduetoday}</span>
                </div>

                <div class="text-right">
                    <a href="cart.php?a=checkout" class="btn btn-success btn-lg btn-checkout{if $cartitems == 0} disabled{/if}" id="checkout">
                        {$LANG.orderForm.checkout}
                        <i class="fa fa-arrow-right"></i>
                    </a><br />
                    <a href="cart.php" class="btn btn-link btn-continue-shopping" id="continueShopping">
                        {$LANG.orderForm.continueShopping}
                    </a>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <form method="post" action="cart.php">
        <input type="hidden" name="a" value="remove" />
        <input type="hidden" name="r" value="" id="inputRemoveItemType" />
        <input type="hidden" name="i" value="" id="inputRemoveItemRef" />
        <div class="modal fade modal-remove-item" id="modalRemoveItem" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="{$LANG.orderForm.close}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">
                            <i class="fa fa-times fa-3x"></i>
                            <span>{$LANG.orderForm.removeItem}</span>
                        </h4>
                    </div>
                    <div class="modal-body">
                        {$LANG.cartremoveitemconfirm}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{$LANG.no}</button>
                        <button type="submit" class="btn btn-primary">{$LANG.yes}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="cart.php">
        <input type="hidden" name="a" value="empty" />
        <div class="modal fade modal-remove-item" id="modalEmptyCart" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="{$LANG.orderForm.close}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">
                            <i class="fa fa-trash fa-3x"></i>
                            <span>{$LANG.emptycart}</span>
                        </h4>
                    </div>
                    <div class="modal-body">
                        {$LANG.cartemptyconfirm}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{$LANG.no}</button>
                        <button type="submit" class="btn btn-primary">{$LANG.yes}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
{/if}
