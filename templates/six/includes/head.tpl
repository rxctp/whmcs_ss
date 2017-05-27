<!-- SEO -->
<meta name="keywords" content="影梭,shadowsocks,ss,天行,天行VPN官网,天行VPN,天行加速器,VPN">
<meta name="description" content="影梭提供美国VPN,日本VPN,香港VPN,影梭官网支持手机VPN,MAC VPN">
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
