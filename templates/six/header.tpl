<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"}

    {$headoutput}

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
              <a href="">客户端</a>
            </li>
            <li>
              <a href="">使用教程</a>
            </li>
            <li>
              <a href="">服务条款</a>
            </li>
            <li>
              <a href="">登录</a>
            </li>
            <li>
              <a href="" class="btn btn-outline btn-border">注册</a>
            </li>
          </ul>
      </nav>
  </div>
</header>
<!-- news -->
<section class="i-index">
    <div class="container">
        <div class="row i-content">
            <div class="col-md-5">
                <h2>轻量级科学上网新姿势</h2>
                <p>国内外智能分流，多平台架构，200M 独享带宽</p>
                <p>365×24 小时网络不间断，改变您的生活体验！</p>
                <a href="" class="btn btn-successful">立即体验</a>
            </div>
        </div>
    </div>
</section>
