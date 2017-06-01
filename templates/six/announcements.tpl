{if $announcementsFbRecommend}
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/{$LANG.locale}/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
{/if}
{foreach from=$announcements item=announcement}

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
    <div class="announcement-single">

        <h2>
            <span class="label label-default">
                {"M jS"|date:$announcement.timestamp}
            </span>
            <a href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}{$smarty.server.PHP_SELF}?id={$announcement.id}{/if}">{$announcement.title}</a>
        </h2>

        <blockquote>
            <p>{if $announcement.text|strip_tags|strlen < 350}{$announcement.text}{else}{$announcement.summary}
            <a href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}{$smarty.server.PHP_SELF}?id={$announcement.id}{/if}" class="label label-warning">{$LANG.readmore} &raquo;</a>
            {/if}</p>
        </blockquote>

        {if $announcementsFbRecommend}
            <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="{$systemurl}{if $seofriendlyurls}announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
            <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="{$systemurl}{if $seofriendlyurls}announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
        {/if}

    </div>

{foreachelse}

    {include file="$template/includes/alert.tpl" type="info" msg="{$LANG.noannouncements}" textcenter=true}

{/foreach}

{if $prevpage || $nextpage}

    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <form class="form-inline" role="form">
            <div class="form-group">
                <div class="input-group">
                    {if $prevpage}
                        <span class="input-group-btn">
                            <a href="announcements.php?page={$prevpage}{if $view}&view={$view}{/if}" class="btn btn-default">&laquo; {$LANG.previouspage}</a>
                        </span>
                    {/if}
                    <input class="form-control" style="text-align: center;" value="{$LANG.page} {$pagenumber}" disabled="disabled">
                    {if $nextpage}
                        <span class="input-group-btn">
                            <a href="announcements.php?page={$nextpage}{if $view}&view={$view}{/if}" class="btn btn-default">{$LANG.nextpage} &raquo;</a>
                        </span>
                    {/if}
                </div>
            </div>
        </form>
    </div>
{/if}
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
