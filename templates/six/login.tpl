  <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/login.css">
</head>
<body>
<article>
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
          <h1 class="content-title">影梭</h1>
          <div class="content">
            <form action="{$systemsslurl}dologin.php" role="form">
              <div class="form-group form-group-top">
                <label for="inputEmail">邮件地址</label>
                <input type="email" name="username" class="form-control" id="inputEmail" placeholder="{$LANG.enteremail}" autofocus>
              </div>
              <div class="form-group">
                <label for="inputPassword">密码</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="{$LANG.clientareapassword}" autocomplete="off" >
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="rememberme" /> 自动登录
                </label>
              </div>
              {if $incorrect}
                  {include file="$template/includes/alert.tpl" type="error" msg=$LANG.loginincorrect textcenter=true}
              {elseif $verificationId && empty($transientDataName)}
                  {include file="$template/includes/alert.tpl" type="error" msg=$LANG.verificationKeyExpired textcenter=true}
              {elseif $ssoredirect}
                  {include file="$template/includes/alert.tpl" type="info" msg=$LANG.sso.redirectafterlogin textcenter=true}
              {/if}
              <div class="form-group">
                <input type="submit" class="btn btn-success btn-block" value="登录">
              </div>
              <div class="foot text-center">
                <a href="/pwreset.php">忘记密码?</a>
              </div>
            </form>
        </div>
        <div class="b-content">
            <div class="back">
            	<a href="/">返回</a>
            </div>
            <div class="register">
            	您还没有注册账户?
            	<a href="/register.php">注册账户</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</article>
