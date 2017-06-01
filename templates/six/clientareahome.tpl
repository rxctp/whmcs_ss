  <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/index.css">
  <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/client.css">

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

<div class="tiles clearfix container">
    <div class="row">
        <div class="col-sm-4 col-xs-6 tile" onclick="window.location='clientarea.php?action=services'">
            <a class="type-item" href="clientarea.php?action=services">
                <div class="icon"><i class="fa fa-cube"></i></div>
                <div class="title">{$LANG.navservices} <span class="text-red">{$clientsstats.productsnumactive}</span></div>
                <div class="highlight bg-color-blue"></div>
            </a>
        </div>
        <div class="col-sm-4 col-xs-6 tile" onclick="window.location='supporttickets.php'">
            <a class="type-item" href="supporttickets.php">
                <div class="icon"><i class="fa fa-comments"></i></div>
                <div class="title">{$LANG.navtickets} <span class="text-blue">{$clientsstats.numactivetickets}</span></div>
                <div class="highlight bg-color-red"></div>
            </a>
        </div>
        <div class="col-sm-4 col-xs-6 tile" onclick="window.location='clientarea.php?action=invoices'">
            <a class="type-item" href="clientarea.php?action=invoices">
                <div class="icon"><i class="fa fa-credit-card"></i></div>
                <div class="title">{$LANG.navinvoices} <span class="text-green">{$clientsstats.numunpaidinvoices}</span></div>
                <div class="highlight bg-color-gold"></div>
            </a>
        </div>
    </div>
</div>

<div class="client-home-panels container">
    <div class="row">
        <div class="col-sm-6">

            {function name=outputHomePanels}
                <div menuItemName="{$item->getName()}" class="panel panel-default panel-accent-{$item->getExtra('color')}{if $item->getClass()} {$item->getClass()}{/if}"{if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {if $item->getExtra('btn-link') && $item->getExtra('btn-text')}
                                <div class="pull-right">
                                    <a href="{$item->getExtra('btn-link')}" class="btn btn-default bg-color-{$item->getExtra('color')} btn-xs">
                                        {if $item->getExtra('btn-icon')}<i class="fa {$item->getExtra('btn-icon')}"></i>{/if}
                                        {$item->getExtra('btn-text')}
                                    </a>
                                </div>
                            {/if}
                            {if $item->hasIcon()}<i class="{$item->getIcon()}"></i>&nbsp;{/if}
                            {$item->getLabel()}
                            {if $item->hasBadge()}&nbsp;<span class="badge">{$item->getBadge()}</span>{/if}
                        </h3>
                    </div>
                    {if $item->hasBodyHtml()}
                        <div class="panel-body">
                            {$item->getBodyHtml()}
                        </div>
                    {/if}
                    {if $item->hasChildren()}
                        <div class="list-group{if $item->getChildrenAttribute('class')} {$item->getChildrenAttribute('class')}{/if}">
                            {foreach $item->getChildren() as $childItem}
                                {if $childItem->getUri()}
                                    <a menuItemName="{$childItem->getName()}" href="{$childItem->getUri()}" class="list-group-item{if $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()} active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if} id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </a>
                                {else}
                                    <div menuItemName="{$childItem->getName()}" class="list-group-item{if $childItem->getClass()} {$childItem->getClass()}{/if}" id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/if}
                    <div class="panel-footer">
                        {if $item->hasFooterHtml()}
                            {$item->getFooterHtml()}
                        {/if}
                    </div>
                </div>
            {/function}

            {foreach $panels as $item}
                {if $item@iteration is odd}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
        <div class="col-sm-6">

            {foreach $panels as $item}
                {if $item@iteration is even}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
    </div>
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
