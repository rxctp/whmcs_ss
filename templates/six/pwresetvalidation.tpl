<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/index.css">
</head>
<body>
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
          <li class="active">
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
<div class="logincontainer">

    {include file="$template/includes/pageheader.tpl" title=$LANG.pwreset}

    {if $invalidlink}

        {include file="$template/includes/alert.tpl" type="danger" msg=$invalidlink textcenter=true}

    {elseif $success}

        {include file="$template/includes/alert.tpl" type="success" msg=$LANG.pwresetvalidationsuccess textcenter=true}

        <p class="text-center">
            {$LANG.pwresetsuccessdesc|sprintf2:'<a href="clientarea.php">':'</a>'}
        </p>

    {else}

        {if $errormessage}
            {include file="$template/includes/alert.tpl" type="danger" msg=$errormessage textcenter=true}
        {/if}

        <p>{$LANG.pwresetenternewpw}</p>

        <form class="using-password-strength" method="post" action="{$smarty.server.PHP_SELF}?action=pwreset">
            <input type="hidden" name="key" id="key" value="{$key}" />

            <div id="newPassword1" class="form-group has-feedback">
                <label class="control-label" for="inputNewPassword1">{$LANG.newpassword}</label>
                <input type="password" name="newpw" id="inputNewPassword1" class="form-control" autocomplete="off" />
                <span class="form-control-feedback glyphicon glyphicon-password"></span>
            </div>

            <div id="newPassword2" class="form-group has-feedback">
                <label class="control-label" for="inputNewPassword2">{$LANG.confirmnewpassword}</label>
                <input type="password" name="confirmpw" id="inputNewPassword2" class="form-control" autocomplete="off" />
                <span class="form-control-feedback glyphicon glyphicon-password"></span>
                <div id="inputNewPassword2Msg"></div>
            </div>

            <div class="form-group">
                <label class="control-label">{$LANG.pwstrength}</label>
                {include file="$template/includes/pwstrength.tpl"}
            </div>

            <div class="form-group">
                <div class="text-center">
                    <input class="btn btn-primary" type="submit" name="submit" value="{$LANG.clientareasavechanges}" />
                    <input class="btn btn-default" type="reset" value="{$LANG.cancel}" />
                </div>
            </div>

        </form>

    {/if}

</div>
