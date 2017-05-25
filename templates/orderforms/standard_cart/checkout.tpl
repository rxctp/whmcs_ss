<script>
    // Define state tab index value
    var statesTab = 10;
    // Do not enforce state input client side
    var stateNotRequired = true;
</script>
{include file="orderforms/standard_cart/common.tpl"}
<script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>
<script type="text/javascript" src="{$BASE_PATH_JS}/PasswordStrength.js"></script>
<script>
    window.langPasswordStrength = "{$LANG.pwstrength}";
    window.langPasswordWeak = "{$LANG.pwstrengthweak}";
    window.langPasswordModerate = "{$LANG.pwstrengthmoderate}";
    window.langPasswordStrong = "{$LANG.pwstrengthstrong}";
</script>
{function name=getFontAwesomeCCIcon}
    {if $ccType eq "Visa"}
        fa-cc-visa
    {elseif $ccType eq "MasterCard"}
        fa-cc-mastercard
    {elseif $ccType eq "Discover"}
        fa-cc-discover
    {elseif $ccType eq "American Express"}
        fa-cc-amex
    {elseif $ccType eq "JCB"}
        fa-cc-jcb
    {elseif $ccType eq "Diners Club" || $ccType eq "EnRoute"}
        fa-cc-diners-club
    {else}
        fa-credit-card
    {/if}
{/function}

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
        <a href="javascript:;">
          <div class="card active">
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
    <div class="container order-msg">
      {include file="orderforms/standard_cart/sidebar-categories-collapsed.tpl"}
      <div class="already-registered clearfix">
          <div class="pull-right">
              <button type="button" class="btn btn-info{if $loggedin || !$loggedin && $custtype eq "existing"} hidden{/if}" id="btnAlreadyRegistered">
                  {$LANG.orderForm.alreadyRegistered}
              </button>
              <button type="button" class="btn btn-warning{if $loggedin || $custtype neq "existing"} hidden{/if}" id="btnNewUserSignup">
                  {$LANG.orderForm.createAccount}
              </button>
          </div>
          <p>{$LANG.orderForm.enterPersonalDetails}</p>
      </div>

      {if $errormessage}
          <div class="alert alert-danger checkout-error-feedback" role="alert">
              <p>{$LANG.orderForm.correctErrors}:</p>
              <ul>
                  {$errormessage}
              </ul>
          </div>
          <div class="clearfix"></div>
      {/if}

      <form method="post" action="{$smarty.server.PHP_SELF}?a=checkout" name="orderfrm" id="frmCheckout">
          <input type="hidden" name="submit" value="true" />
          <input type="hidden" name="custtype" id="inputCustType" value="{$custtype}" />

          <div id="containerExistingUserSignin"{if $loggedin || $custtype neq "existing"} class="hidden"{/if}>

              <div class="sub-heading">
                  <span>{$LANG.orderForm.existingCustomerLogin}</span>
              </div>

              <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputLoginEmail" class="field-icon">
                              <i class="fa fa-envelope"></i>
                          </label>
                          <input type="text" name="loginemail" id="inputLoginEmail" class="field" placeholder="{$LANG.orderForm.emailAddress}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputLoginPassword" class="field-icon">
                              <i class="fa fa-lock"></i>
                          </label>
                          <input type="password" name="loginpassword" id="inputLoginPassword" class="field" placeholder="{$LANG.clientareapassword}">
                      </div>
                  </div>
              </div>

          </div>

          <div id="containerNewUserSignup"{if !$loggedin && $custtype eq "existing"} class="hidden"{/if}>

              <div class="sub-heading">
                  <span>{$LANG.orderForm.personalInformation}</span>
              </div>

              <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputFirstName" class="field-icon">
                              <i class="fa fa-user"></i>
                          </label>
                          <input type="text" name="firstname" id="inputFirstName" class="field" placeholder="{$LANG.orderForm.firstName}" value="{$clientsdetails.firstname}"{if $loggedin} readonly="readonly"{/if} autofocus>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputLastName" class="field-icon">
                              <i class="fa fa-user"></i>
                          </label>
                          <input type="text" name="lastname" id="inputLastName" class="field" placeholder="{$LANG.orderForm.lastName}" value="{$clientsdetails.lastname}"{if $loggedin} readonly="readonly"{/if}>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputEmail" class="field-icon">
                              <i class="fa fa-envelope"></i>
                          </label>
                          <input type="email" name="email" id="inputEmail" class="field" placeholder="{$LANG.orderForm.emailAddress}" value="{$clientsdetails.email}"{if $loggedin} readonly="readonly"{/if}>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputPhone" class="field-icon">
                              <i class="fa fa-phone"></i>
                          </label>
                          <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="{$LANG.orderForm.phoneNumber}" value="{$clientsdetails.phonenumber}"{if $loggedin} readonly="readonly"{/if}>
                      </div>
                  </div>
              </div>

              <div class="sub-heading hide">
                  <span>{$LANG.orderForm.billingAddress}</span>
              </div>

              <div class="row hide">
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <label for="inputCompanyName" class="field-icon">
                              <i class="fa fa-building"></i>
                          </label>
                          <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="{$LANG.orderForm.companyName} ({$LANG.orderForm.optional})" value="缺省" {if $loggedin} readonly="readonly"{/if}>
                          <!-- {$clientsdetails.companyname} -->
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <label for="inputAddress1" class="field-icon">
                              <i class="fa fa-building-o"></i>
                          </label>
                          <input type="text" name="address1" id="inputAddress1" class="field" placeholder="{$LANG.orderForm.streetAddress}" value="缺省" {if $loggedin} readonly="readonly"{/if}>
                          <!-- {$clientsdetails.address1} -->
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <label for="inputAddress2" class="field-icon">
                              <i class="fa fa-map-marker"></i>
                          </label>
                          <input type="text" name="address2" id="inputAddress2" class="field" placeholder="{$LANG.orderForm.streetAddress2}" value="缺省" {if $loggedin} readonly="readonly"{/if}>
                          <!-- {$clientsdetails.address2} -->
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="form-group prepend-icon">
                          <label for="inputCity" class="field-icon">
                              <i class="fa fa-building-o"></i>
                          </label>
                          <input type="text" name="city" id="inputCity" class="field" placeholder="{$LANG.orderForm.city}" value="缺省" {if $loggedin} readonly="readonly"{/if}>
                          <!-- {$clientsdetails.city} -->
                      </div>
                  </div>
                  <div class="col-sm-5">
                      <div class="form-group prepend-icon">
                          <label for="inputState" class="field-icon" id="inputStateIcon">
                              <i class="fa fa-map-signs"></i>
                          </label>
                          <input type="text" name="state" id="inputState" class="field" placeholder="{$LANG.orderForm.state}" value="缺省" {if $loggedin} readonly="readonly"{/if}>
                          <!-- {$clientsdetails.state} -->
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-group prepend-icon">
                          <label for="inputPostcode" class="field-icon">
                              <i class="fa fa-certificate"></i>
                          </label>
                          <input type="text" name="postcode" id="inputPostcode" class="field" placeholder="{$LANG.orderForm.postcode}" value="000000" {if $loggedin} readonly="readonly"{/if}>
                          <!-- {$clientsdetails.postcode} -->
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <select name="country" id="inputCountry" class="field"{if $loggedin} disabled="disabled"{/if}>
                              {foreach $countries as $countrycode => $countrylabel}
                                  <option value="{$countrycode}"{if (!$country && $countrycode == $defaultcountry) || $countrycode eq $country} selected{/if}>
                                      {$countrylabel}
                                  </option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
              </div>

              {if $customfields}
                  <div class="sub-heading">
                      <span>{$LANG.orderadditionalrequiredinfo}</span>
                  </div>
                  <div class="field-container">
                      <div class="row">
                          {foreach $customfields as $customfield}
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="customfield{$customfield.id}">{$customfield.name}</label>
                                      {$customfield.input}
                                      {if $customfield.description}
                                          <span class="field-help-text">
                                              {$customfield.description}
                                          </span>
                                      {/if}
                                  </div>
                              </div>
                          {/foreach}
                      </div>
                  </div>
              {/if}

          </div>

          {if $domainsinorder}

              <div class="sub-heading">
                  <span>{$LANG.domainregistrantinfo}</span>
              </div>

              <p class="small text-muted">{$LANG.orderForm.domainAlternativeContact}</p>

              <div class="row margin-bottom">
                  <div class="col-sm-6 col-sm-offset-3">
                      <select name="contact" id="inputDomainContact" class="field">
                          <option value="">{$LANG.usedefaultcontact}</option>
                          {foreach $domaincontacts as $domcontact}
                              <option value="{$domcontact.id}"{if $contact == $domcontact.id} selected{/if}>
                                  {$domcontact.name}
                              </option>
                          {/foreach}
                          <option value="addingnew"{if $contact == "addingnew"} selected{/if}>
                              {$LANG.clientareanavaddcontact}...
                          </option>
                      </select>
                  </div>
              </div>

              <div class="row{if $contact neq "addingnew"} hidden{/if}" id="domainRegistrantInputFields">
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputDCFirstName" class="field-icon">
                              <i class="fa fa-user"></i>
                          </label>
                          <input type="text" name="domaincontactfirstname" id="inputDCFirstName" class="field" placeholder="{$LANG.orderForm.firstName}" value="{$domaincontact.firstname}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputDCLastName" class="field-icon">
                              <i class="fa fa-user"></i>
                          </label>
                          <input type="text" name="domaincontactlastname" id="inputDCLastName" class="field" placeholder="{$LANG.orderForm.lastName}" value="{$domaincontact.lastname}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputDCEmail" class="field-icon">
                              <i class="fa fa-envelope"></i>
                          </label>
                          <input type="email" name="domaincontactemail" id="inputDCEmail" class="field" placeholder="{$LANG.orderForm.emailAddress}" value="{$domaincontact.email}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputDCPhone" class="field-icon">
                              <i class="fa fa-phone"></i>
                          </label>
                          <input type="tel" name="domaincontactphonenumber" id="inputDCPhone" class="field" placeholder="{$LANG.orderForm.phoneNumber}" value="{$domaincontact.phonenumber}">
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <label for="inputDCCompanyName" class="field-icon">
                              <i class="fa fa-building"></i>
                          </label>
                          <input type="text" name="domaincontactcompanyname" id="inputDCCompanyName" class="field" placeholder="{$LANG.orderForm.companyName} ({$LANG.orderForm.optional})" value="{$domaincontact.companyname}">
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <label for="inputDCAddress1" class="field-icon">
                              <i class="fa fa-building-o"></i>
                          </label>
                          <input type="text" name="domaincontactaddress1" id="inputDCAddress1" class="field" placeholder="{$LANG.orderForm.streetAddress}" value="{$domaincontact.address1}">
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <label for="inputDCAddress2" class="field-icon">
                              <i class="fa fa-map-marker"></i>
                          </label>
                          <input type="text" name="domaincontactaddress2" id="inputDCAddress2" class="field" placeholder="{$LANG.orderForm.streetAddress2}" value="{$domaincontact.address2}">
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="form-group prepend-icon">
                          <label for="inputDCCity" class="field-icon">
                              <i class="fa fa-building-o"></i>
                          </label>
                          <input type="text" name="domaincontactcity" id="inputDCCity" class="field" placeholder="{$LANG.orderForm.city}" value="{$domaincontact.city}">
                      </div>
                  </div>
                  <div class="col-sm-5">
                      <div class="form-group prepend-icon">
                          <label for="inputDCState" class="field-icon">
                              <i class="fa fa-map-signs"></i>
                          </label>
                          <input type="text" name="domaincontactstate" id="inputDCState" class="field" placeholder="{$LANG.orderForm.state}" value="{$domaincontact.state}">
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-group prepend-icon">
                          <label for="inputDCPostcode" class="field-icon">
                              <i class="fa fa-certificate"></i>
                          </label>
                          <input type="text" name="domaincontactpostcode" id="inputDCPostcode" class="field" placeholder="{$LANG.orderForm.postcode}" value="{$domaincontact.postcode}">
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <select name="domaincontactcountry" id="inputDCCountry" class="field">
                              {foreach $countries as $countrycode => $countrylabel}
                                  <option value="{$countrycode}"{if (!$domaincontact.country && $countrycode == $defaultcountry) || $countrycode eq $domaincontact.country} selected{/if}>
                                      {$countrylabel}
                                  </option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
              </div>

          {/if}

          {if !$loggedin}

              <div id="containerNewUserSecurity"{if !$loggedin && $custtype eq "existing"} class="hidden"{/if}>

                  <div class="sub-heading">
                      <span>{$LANG.orderForm.accountSecurity}</span>
                  </div>

                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group prepend-icon">
                              <label for="inputNewPassword1" class="field-icon">
                                  <i class="fa fa-lock"></i>
                              </label>
                              <input type="password" name="password" id="inputNewPassword1" class="field" placeholder="{$LANG.clientareapassword}">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group prepend-icon">
                              <label for="inputNewPassword2" class="field-icon">
                                  <i class="fa fa-lock"></i>
                              </label>
                              <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="{$LANG.clientareaconfirmpassword}">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="progress">
                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <p class="text-center small text-muted" id="passwordStrengthTextLabel">{$LANG.pwstrength}: {$LANG.pwstrengthenter}</p>
                      </div>
                  </div>
                  {if $securityquestions}
                      <div class="row">
                          <div class="col-sm-6">
                              <select name="securityqid" id="inputSecurityQId" class="field">
                                  <option value="">{$LANG.clientareasecurityquestion}</option>
                                  {foreach $securityquestions as $question}
                                      <option value="{$question.id}"{if $question.id eq $securityqid} selected{/if}>
                                          {$question.question}
                                      </option>
                                  {/foreach}
                              </select>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group prepend-icon">
                                  <label for="inputSecurityQAns" class="field-icon">
                                      <i class="fa fa-lock"></i>
                                  </label>
                                  <input type="password" name="securityqans" id="inputSecurityQAns" class="field" placeholder="{$LANG.clientareasecurityanswer}">
                              </div>
                          </div>
                      </div>
                  {/if}

              </div>

          {/if}

          <div class="sub-heading">
              <span>{$LANG.orderForm.paymentDetails}</span>
          </div>

          <div class="alert alert-success text-center large-text" role="alert">
              {$LANG.ordertotalduetoday}: &nbsp; <strong>{$total}</strong>
          </div>

          <div class="form-group">
              <p class="small text-muted">{$LANG.orderForm.preferredPaymentMethod}</p>

              <div class="text-center">
                  {foreach key=num item=gateway from=$gateways}
                      <label class="radio-inline">
                          <input type="radio" name="paymentmethod" value="{$gateway.sysname}" class="payment-methods{if $gateway.type eq "CC"} is-credit-card{/if}"{if $selectedgateway eq $gateway.sysname} checked{/if} />
                          {$gateway.name}
                      </label>
                  {/foreach}
              </div>
          </div>

          <div class="alert alert-danger text-center gateway-errors hidden"></div>

          <div class="clearfix"></div>

          <div id="creditCardInputFields"{if $selectedgatewaytype neq "CC"} class="hidden"{/if}>
              {if $clientsdetails.cclastfour}
                  <div class="row margin-bottom">
                      <div class="col-sm-12">
                          <div class="text-center">
                              <label class="radio-inline">
                                  <input type="radio" name="ccinfo" value="useexisting" id="useexisting" {if $clientsdetails.cclastfour} checked{else} disabled{/if} />
                                  {$LANG.creditcarduseexisting}
                                  {if $clientsdetails.cclastfour}
                                      ({$clientsdetails.cclastfour})
                                  {/if}
                              </label>
                              <label class="radio-inline">
                                  <input type="radio" name="ccinfo" value="new" id="new" {if !$clientsdetails.cclastfour || $ccinfo eq "new"} checked{/if} />
                                  {$LANG.creditcardenternewcard}
                              </label>
                          </div>
                      </div>
                  </div>
              {else}
                  <input type="hidden" name="ccinfo" value="new" />
              {/if}
              <div id="newCardInfo" class="row{if $clientsdetails.cclastfour && $ccinfo neq "new"} hidden{/if}">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input type="hidden" id="cctype" name="cctype" value="{$acceptedcctypes.0}" />
                          <div class="dropdown" id="cardType">
                              <button class="btn btn-default dropdown-toggle field" type="button" id="creditCardType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <span id="selectedCardType">
                                      <i class="fa {getFontAwesomeCCIcon ccType=$acceptedcctypes.0} fa-fw"></i>
                                      {$acceptedcctypes.0}
                                  </span>
                                  <span class="fa fa-caret-down fa-fw"></span>
                              </button>
                              <ul class="dropdown-menu" id="creditCardTypeDropDown" aria-labelledby="creditCardType">
                                  {foreach $acceptedcctypes as $cardType}
                                      <li>
                                          <a href="#">
                                              <i class="fa {getFontAwesomeCCIcon ccType=$cardType} fa-fw"></i>
                                              <span class="type">
                                                  {$cardType}
                                              </span>
                                          </a>
                                      </li>
                                  {/foreach}
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputCardNumber" class="field-icon">
                              <i class="fa fa-credit-card"></i>
                          </label>
                          <input type="tel" name="ccnumber" id="inputCardNumber" class="field" placeholder="{$LANG.orderForm.cardNumber}" autocomplete="cc-number">
                      </div>
                  </div>
                  {if $showccissuestart}
                      <div class="col-sm-6">
                          <div class="form-group prepend-icon">
                              <label for="inputCardStart" class="field-icon">
                                  <i class="fa fa-calendar-check-o"></i>
                              </label>
                              <input type="tel" name="ccstartdate" id="inputCardStart" class="field" placeholder="MM / YY ({$LANG.creditcardcardstart})" autocomplete="cc-exp">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group prepend-icon">
                              <label for="inputCardIssue" class="field-icon">
                                  <i class="fa fa-asterisk"></i>
                              </label>
                              <input type="tel" name="ccissuenum" id="inputCardIssue" class="field" placeholder="{$LANG.creditcardcardissuenum}">
                          </div>
                      </div>
                  {/if}
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputCardExpiry" class="field-icon">
                              <i class="fa fa-calendar"></i>
                          </label>
                          <input type="tel" name="ccexpirydate" id="inputCardExpiry" class="field" placeholder="MM / YY{if $showccissuestart} ({$LANG.creditcardcardexpires}){/if}" autocomplete="cc-exp">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group prepend-icon">
                          <label for="inputCardCVV" class="field-icon">
                              <i class="fa fa-barcode"></i>
                          </label>
                          <input type="tel" name="cccvv" id="inputCardCVV" class="field" placeholder="{$LANG.orderForm.cvv}" autocomplete="cc-cvc">
                      </div>
                  </div>
              </div>
              <div id="existingCardInfo" class="row{if !$clientsdetails.cclastfour || $ccinfo eq "new"} hidden{/if}">
                  <div class="col-sm-12">
                      <div class="form-group prepend-icon">
                          <label for="inputCardCvvExisting" class="field-icon">
                              <i class="fa fa-barcode"></i>
                          </label>
                          <input type="tel" name="cccvvexisting" id="inputCardCvvExisting" class="field" placeholder="{$LANG.orderForm.cvv}" autocomplete="cc-cvc">
                      </div>
                  </div>
              </div>
          </div>

          {if $shownotesfield}

              <div class="sub-heading">
                  <span>{$LANG.orderForm.additionalNotes}</span>
              </div>

              <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group">
                          <textarea name="notes" class="field" rows="4" placeholder="{$LANG.ordernotesdescription}">{$orderNotes}</textarea>
                      </div>
                  </div>
              </div>

          {/if}

          <div class="text-center">
              {if $accepttos}
                  <p>
                      <label class="checkbox-inline">
                          <input type="checkbox" name="accepttos" id="accepttos" />
                          &nbsp;
                          {$LANG.ordertosagreement}
                          <a href="{$tosurl}" target="_blank">{$LANG.ordertos}</a>
                      </label>
                  </p>
              {/if}

              <button type="submit" id="btnCompleteOrder" class="btn btn-primary btn-lg"{if $cartitems==0} disabled="disabled"{/if} onclick="this.value='{$LANG.pleasewait}'">
                  {$LANG.completeorder}
                  &nbsp;<i class="fa fa-arrow-circle-right"></i>
              </button>
          </div>
      </form>

      {if $servedOverSsl}
          <div class="alert alert-warning checkout-security-msg">
              <i class="fa fa-lock"></i>
              {$LANG.ordersecure} (<strong>{$ipaddress}</strong>) {$LANG.ordersecure2}
          </div>
      {/if}

    </div>
</section>

<script type="text/javascript" src="{$BASE_PATH_JS}/jquery.payment.js"></script>
