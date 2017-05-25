{include file="orderforms/standard_cart/common.tpl"}

<script>
var _localLang = {
    'addToCart': '{$LANG.orderForm.addToCart|escape}',
    'addedToCartRemove': '{$LANG.orderForm.addedToCartRemove|escape}'
}
</script>

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
        <a href="">
          <div class="card active">
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
        <a href="">
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
        <a href="">
          <div class="card">
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
        <a href="">
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
    <form id="frmConfigureProduct">
      <input type="hidden" name="configure" value="true" />
      <input type="hidden" name="i" value="{$i}" />
        <div class="row">
          <div class="col-md-8">
            <div class="od-head">
              <h1>配置</h1>
            </div>
            <p>{$LANG.orderForm.configureDesiredOptions}</p>

            <div class="product-info">
                <p class="product-title">{$productinfo.name}</p>
                <p>{$productinfo.description}</p>
            </div>

            <div class="alert alert-danger hidden" role="alert" id="containerProductValidationErrors">
                <p>{$LANG.orderForm.correctErrors}:</p>
                <ul id="containerProductValidationErrorsList"></ul>
            </div>

            {if $pricing.type eq "recurring"}
                <div class="field-container">
                    <div class="form-group">
                        <label for="inputBillingcycle">{$LANG.cartchoosecycle}</label>
                        <select name="billingcycle" id="inputBillingcycle" class="form-control select-inline" onchange="{if $configurableoptions}updateConfigurableOptions({$i}, this.value);{else}recalctotals();{/if}">
                            {if $pricing.monthly}
                                <option value="monthly"{if $billingcycle eq "monthly"} selected{/if}>
                                    {$pricing.monthly}
                                </option>
                            {/if}
                            {if $pricing.quarterly}
                                <option value="quarterly"{if $billingcycle eq "quarterly"} selected{/if}>
                                    {$pricing.quarterly}
                                </option>
                            {/if}
                            {if $pricing.semiannually}
                                <option value="semiannually"{if $billingcycle eq "semiannually"} selected{/if}>
                                    {$pricing.semiannually}
                                </option>
                            {/if}
                            {if $pricing.annually}
                                <option value="annually"{if $billingcycle eq "annually"} selected{/if}>
                                    {$pricing.annually}
                                </option>
                            {/if}
                            {if $pricing.biennially}
                                <option value="biennially"{if $billingcycle eq "biennially"} selected{/if}>
                                    {$pricing.biennially}
                                </option>
                            {/if}
                            {if $pricing.triennially}
                                <option value="triennially"{if $billingcycle eq "triennially"} selected{/if}>
                                    {$pricing.triennially}
                                </option>
                            {/if}
                        </select>
                    </div>
                </div>
            {/if}

            {if $productinfo.type eq "server"}
                <div class="sub-heading">
                    <span>{$LANG.cartconfigserver}</span>
                </div>

                <div class="field-container">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputHostname">{$LANG.serverhostname}</label>
                                <input type="text" name="hostname" class="form-control" id="inputHostname" value="{$server.hostname}" placeholder="servername.yourdomain.com">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputRootpw">{$LANG.serverrootpw}</label>
                                <input type="password" name="rootpw" class="form-control" id="inputRootpw" value="{$server.rootpw}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputNs1prefix">{$LANG.serverns1prefix}</label>
                                <input type="text" name="ns1prefix" class="form-control" id="inputNs1prefix" value="{$server.ns1prefix}" placeholder="ns1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputNs2prefix">{$LANG.serverns2prefix}</label>
                                <input type="text" name="ns2prefix" class="form-control" id="inputNs2prefix" value="{$server.ns2prefix}" placeholder="ns2">
                            </div>
                        </div>
                    </div>

                </div>
            {/if}

            {if $configurableoptions}
                <div class="sub-heading">
                    <span>{$LANG.orderconfigpackage}</span>
                </div>
                <div class="product-configurable-options" id="productConfigurableOptions">
                    <div class="row">
                        {foreach $configurableoptions as $num => $configoption}
                            {if $configoption.optiontype eq 1}
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputConfigOption{$configoption.id}">{$configoption.optionname}</label>
                                        <select name="configoption[{$configoption.id}]" id="inputConfigOption{$configoption.id}" class="form-control">
                                            {foreach key=num2 item=options from=$configoption.options}
                                                <option value="{$options.id}"{if $configoption.selectedvalue eq $options.id} selected="selected"{/if}>
                                                    {$options.name}
                                                </option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            {elseif $configoption.optiontype eq 2}
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputConfigOption{$configoption.id}">{$configoption.optionname}</label>
                                        {foreach key=num2 item=options from=$configoption.options}
                                            <br />
                                            <label>
                                                <input type="radio" name="configoption[{$configoption.id}]" value="{$options.id}"{if $configoption.selectedvalue eq $options.id} checked="checked"{/if} />
                                                {if $options.name}
                                                    {$options.name}
                                                {else}
                                                    {$LANG.enable}
                                                {/if}
                                            </label>
                                        {/foreach}
                                    </div>
                                </div>
                            {elseif $configoption.optiontype eq 3}
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputConfigOption{$configoption.id}">{$configoption.optionname}</label>
                                        <br />
                                        <label>
                                            <input type="checkbox" name="configoption[{$configoption.id}]" id="inputConfigOption{$configoption.id}" value="1"{if $configoption.selectedqty} checked{/if} />
                                            {if $configoption.options.0.name}
                                                {$configoption.options.0.name}
                                            {else}
                                                {$LANG.enable}
                                            {/if}
                                        </label>
                                    </div>
                                </div>
                            {elseif $configoption.optiontype eq 4}
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputConfigOption{$configoption.id}">{$configoption.optionname}</label>
                                        {if $configoption.qtymaximum}
                                            {if !$rangesliderincluded}
                                                <script type="text/javascript" src="{$BASE_PATH_JS}/ion.rangeSlider.min.js"></script>
                                                <link href="{$BASE_PATH_CSS}/ion.rangeSlider.css" rel="stylesheet">
                                                <link href="{$BASE_PATH_CSS}/ion.rangeSlider.skinModern.css" rel="stylesheet">
                                                {assign var='rangesliderincluded' value=true}
                                            {/if}
                                            <input type="text" name="configoption[{$configoption.id}]" value="{if $configoption.selectedqty}{$configoption.selectedqty}{else}{$configoption.qtyminimum}{/if}" id="inputConfigOption{$configoption.id}" class="form-control" />
                                            <script>
                                                var sliderTimeoutId = null;
                                                var sliderRangeDifference = {$configoption.qtymaximum} - {$configoption.qtyminimum};
                                                // The largest size that looks nice on most screens.
                                                var sliderStepThreshold = 25;
                                                // Check if there are too many to display individually.
                                                var setLargerMarkers = sliderRangeDifference > sliderStepThreshold;

                                                jQuery("#inputConfigOption{$configoption.id}").ionRangeSlider({
                                                    min: {$configoption.qtyminimum},
                                                    max: {$configoption.qtymaximum},
                                                    grid: true,
                                                    grid_snap: setLargerMarkers ? false : true,
                                                    onChange: function() {
                                                        if (sliderTimeoutId) {
                                                            clearTimeout(sliderTimeoutId);
                                                        }

                                                        sliderTimeoutId = setTimeout(function() {
                                                            sliderTimeoutId = null;
                                                            recalctotals();
                                                        }, 250);
                                                    }
                                                });
                                            </script>
                                        {else}
                                            <div>
                                                <input type="number" name="configoption[{$configoption.id}]" value="{if $configoption.selectedqty}{$configoption.selectedqty}{else}{$configoption.qtyminimum}{/if}" id="inputConfigOption{$configoption.id}" min="{$configoption.qtyminimum}" onchange="recalctotals()" onkeyup="recalctotals()" class="form-control form-control-qty" />
                                                <span class="form-control-static form-control-static-inline">
                                                    x {$configoption.options.0.name}
                                                </span>
                                            </div>
                                        {/if}
                                    </div>
                                </div>
                            {/if}
                            {if $num % 2 != 0}
                                </div>
                                <div class="row">
                            {/if}
                        {/foreach}
                    </div>
                </div>

            {/if}

            {if $customfields}

                <div class="sub-heading">
                    <span>{$LANG.orderadditionalrequiredinfo}</span>
                </div>

                <div class="field-container">
                    {foreach $customfields as $customfield}
                        <div class="form-group">
                            <label for="customfield{$customfield.id}">{$customfield.name}</label>
                            {$customfield.input}
                            {if $customfield.description}
                                <span class="field-help-text">
                                    {$customfield.description}
                                </span>
                            {/if}
                        </div>
                    {/foreach}
                </div>

            {/if}

            {if $addons}

                <div class="sub-heading">
                    <span>{$LANG.cartavailableaddons}</span>
                </div>

                <div class="row addon-products">
                    {foreach $addons as $addon}
                        <div class="col-sm-{if count($addons) > 1}6{else}12{/if}">
                            <div class="panel panel-default panel-addon{if $addon.status} panel-addon-selected{/if}">
                                <div class="panel-body">
                                    <label>
                                        <input type="checkbox" name="addons[{$addon.id}]"{if $addon.status} checked{/if} />
                                        {$addon.name}
                                    </label><br />
                                    {$addon.description}
                                </div>
                                <div class="panel-price">
                                    {$addon.pricing}
                                </div>
                                <div class="panel-add">
                                    <i class="fa fa-plus"></i>
                                    {$LANG.addtocart}
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>

            {/if}

            <div class="alert alert-warning info-text-sm">
                <i class="fa fa-question-circle"></i>
                {$LANG.orderForm.haveQuestionsContact} <a href="contact.php" target="_blank" class="alert-link">{$LANG.orderForm.haveQuestionsClickHere}</a>
            </div>
          </div>
          <div class="col-md-4" id="scrollingPanelContainer">
            <div id="orderSummary">
              <div class="order-summary">
                <div class="loader" id="orderSummaryLoader">
                  <i class="fa fa-fw fa-refresh fa-spin"></i>
                </div>
                <h2>{$LANG.ordersummary}</h2>
                <div class="summary-container" id="producttotal"></div>
              </div>
              <div class="text-center">
                <button type="submit" id="btnCompleteProductConfig" class="btn btn-primary btn-lg">
                  {$LANG.continue}
                  <i class="fa fa-arrow-circle-right"></i>
                </button>
              </div>
            </div>
          </div>
      </div>
    </form>
  </div>
</section>

<script>recalctotals();</script>
