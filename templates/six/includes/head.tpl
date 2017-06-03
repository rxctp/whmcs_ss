<!-- SEO -->
<meta name="keywords" content="影梭,影梭官网,shadowsocks,ss,ssr,SSR,VPN,科学上网">
<meta name="description" content="影梭提供美国VPN,日本VPN,香港VPN,影梭官网支持手机VPN,MAC VPN">
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- JQuery -->
<script type="text/javascript" src="{$WEB_ROOT}/templates/static/js/jquery-2.1.1.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/bootstrap.min.css">
<script type="text/javascript" src="{$WEB_ROOT}/templates/static/js/bootstrap.min.js"></script>

<!-- common -->
<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/common.css">
<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/index.css">
<link rel="shortcut icon" href="favicon.png">
<!-- Styling -->


<!-- font-awesome -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- 百度统计 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6951179f677f4d5051c02b36171cbf7b";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script type="text/javascript">
    var csrfToken = '{$token}',
        markdownGuide = '{lang key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{$mdeLocale}{else}en{/if}',
        saved = '{lang key="markdown.saved"}',
        saving = '{lang key="markdown.saving"}';
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/scripts.min.js?v={$versionHash}"></script>

{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}
