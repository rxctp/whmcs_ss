
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
<!-- news -->

<div class="logincontainer">
    {include file="$template/includes/pageheader.tpl" title=$LANG.pwreset}

    {if $loggedin}
        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.noPasswordResetWhenLoggedIn textcenter=true}
    {else}
        {if $success}

            {include file="$template/includes/alert.tpl" type="success" msg=$LANG.pwresetvalidationsent textcenter=true}

            <p>{$LANG.pwresetvalidationcheckemail}</p>

        {else}

            {if $errormessage}
                {include file="$template/includes/alert.tpl" type="error" msg=$errormessage textcenter=true}
            {/if}

            {if $securityquestion}

                <p>{$LANG.pwresetsecurityquestionrequired}</p>


                <form method="post" action="pwreset.php"  class="form-stacked">
                    <input type="hidden" name="action" value="reset" />
                    <input type="hidden" name="email" value="{$email}" />

                    <div class="form-group">
                        <label for="inputAnswer">{$securityquestion}</label>
                        <input type="text" name="answer" class="form-control" id="inputAnswer" autofocus>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">{$LANG.pwresetsubmit}</button>
                    </div>

                </form>

            {else}

                <p>{$LANG.pwresetemailneeded}</p>

                <form method="post" action="{$systemsslurl}pwreset.php" role="form">
                    <input type="hidden" name="action" value="reset" />

                    <div class="form-group">
                        <label for="inputEmail">{$LANG.loginemail}</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="{$LANG.enteremail}" autofocus>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">{$LANG.pwresetsubmit}</button>
                    </div>

                </form>

            {/if}

        {/if}
    {/if}

</div>
