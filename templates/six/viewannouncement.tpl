<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/six/css/all.css">
<style>
.container.main-content {
  padding: 50px 0;
}
</style>
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
                <a href="/cart.php">套餐价格</a>
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
  <div class="container main-content">

{if $twittertweet}
    <div class="pull-right">
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="{$twitterusername}">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    </div>
{/if}

{$text}

<br />
<br />

<p>
    <strong>{$timestamp|date_format:"%A, %B %e, %Y"}</strong>
</p>

{if $googleplus1}
    <br />
    <br />
    <g:plusone annotation="inline"></g:plusone>
    {literal}<script type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    </script>{/literal}
{/if}

{if $facebookrecommend}
    <br />
    <br />
    {literal}
    <div id="fb-root">
    </div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    {/literal}
    <div class="fb-like" data-href="{$systemurl}{if $seofriendlyurls}announcements/{$id}/{$urlfriendlytitle}.html{else}announcements.php?id={$id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend">
    </div>
{/if}

{if $facebookcomments}
    <br />
    <br />
    {literal}
    <div id="fb-root">
    </div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    {/literal}
    <fb:comments href="{$systemurl}{if $seofriendlyurls}announcements/{$id}/{$urlfriendlytitle}.html{else}announcements.php?id={$id}{/if}" num_posts="5" width="500"></fb:comments>
{/if}

<p>
    <a href="{$WEB_ROOT}/announcements.php" class="btn btn-default">{$LANG.clientareabacklink}</a>
</p>
</div>
<!-- poster -->
<section class="poster">
  <div class="container">
      <div class="row text-center">
          <div class="col-md-10 col-md-offset-1">
              <h2>影梭：致力于网络加速第一选择！</h2>
              <a href="/cart.php" class="btn btn-successful">立即体验</a>
          </div>
      </div>
  </div>
</section>
<footer>
  <h4><center>© 2017  影梭 - SSR -影梭官网 - 使用本站服务请遵守中国大陆以及香港法律</center></h4>
</footer>
