<!-- modal start-->
    <div class="modal fade" id="log_part" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">帐号登录</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" name="login">
                        <p>
                            <label for="username">用户名</label>
                            <input name="username" type="text" alt="用户名" size="18">
                        </p>
                        <p>
                            <label for="passwd">密码</label>
                            <input name="passwd" type="password" alt="密码" size="18">
                        </p>
                        <p id="login-remember">
                            <label for="remember" style="margin: 5px 0 2px;">
                                <input name="remember" type="checkbox" value="yes" alt="在此设备上保持登录状态">在此设备上保持登录状态</label>
                        </p>
                        <p id="login-button">
                            <input type="submit" name="Submit" value="登录">
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <a style="float:left" href="/pwreset.php">忘记密码？</a>
                    <a style="float:right" href="/pwreset.php">忘记用户名？</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- content start -->
    <div id="wrapper">
        <div class="root">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="/" class="navbar-brand"><img src="templates/six/img/brand.png" alt="Green" width="90"></a> <span class="navbar-summary">快速、稳定的网络优化服务</span>
                        <a class="app-dl" target="_blank" href="/">下载客户端</a>
                        <button data-toggle="collapse" data-target=".mobile-nav" class="navbar-toggle collapsed"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div role="navigation" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/">首页</a></li>
                            <li><a href="/">下载</a></li>
                            <li><a href="/">购买</a></li>
                            <li><a href="/">帮助</a></li>
                            <li><a href="/">关于</a></li>
                            <li class="signin"><a href="/clientarea.php" data-toggle="modal" data-target="#log_part">登录</a></li>
                            <li class="signin"><a href="/register.php">注册</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-nav collapse">
                    <ul>
                        <li><a href="/">首页</a></li>
                        <li><a href="/">下载</a></li>
                        <li><a href="/">购买</a></li>
                        <li><a href="/">帮助</a></li>
                        <li><a href="/">关于</a></li>
                        <li class="signin"><a href="/clientarea.php">登录</a></li>
                        <li class="sign-out">
                           <a href="/register.php">注册</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="main-content">
                <div class="index_first">
                    <div class="container bs-example" data-example-id="carousel-with-captions" style="position: relative;">
                        <div id="carousel-example-captions" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner height_500" role="listbox">
                                <div class="item index_item">
                                    <div class="col-lg-6 col-md-6 col-sm-6 index_banner">
                                        <h3 class="index_h3">Green新版手机客户端发布</h3>
                                        <p class="index_p_banner">移动客户端全新升级，专治各种连不上、速度慢和常掉线等老大难问题，欢迎下载体验。</p>
                                        <a data-toggle="modal" data-target="#app_qr" href="/" class="index_first_a hidden-xs">猛戳下载 &gt;</a> </div>
                                    <div class="col-lg-4 col-lg-offset-1 col-sm-4 col-sm-offset-1 index_banner_third_2 index_banner_img_2"><img src="templates/six/img/slider-4.png" class="img-responsive center-block"></div>
                                </div>
                                <div class="item index_item height_500">
                                    <div class="col-lg-5 col-sm-5 index_banner_third index_banner_img_2"><img src="templates/six/img/slider-2.png" class="img-responsive center-block"></div>
                                    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 index_banner">
                                        <h3 class="index_h3">优化网络连接, 保护隐私</h3>
                                        <p class="index_p_banner">遍布各地的优质加速节点，为专业人士、海外商务提供可靠加速服务，通过加密协议保护网络数据，有效加固个人隐私。</p>
                                    </div>
                                </div>
                                <div class="item index_item height_500 active">
                                    <div class="col-lg-5 col-sm-5 index_banner_third index_banner_img_2"><img src="templates/six/img/slider-3.png" class="img-responsive center-block"></div>
                                    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 index_banner">
                                        <h3 class="index_h3">多平台支持, 易于使用</h3>
                                        <p class="index_p_banner">兼容各主流系统平台使用，拥有专用客户端软件。账号不受平台限制，真正做到一号通用，随时随地获取安全网络。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hju" style="width: 100%; margin-top: -11px;"><img src="templates/six/img/xian.png" style="width: 100%; height: 1px;"></div>
                        </div>
                        <a class="left carousel-control banner_a_left" href="/" role="button" data-slide="prev" style="width: 50px;"><span class="icon" aria-hidden="true"><img src="templates/six/img/prevBtn.png"></span></a>
                        <a class="right carousel-control banner_a_right" href="" role="button" data-slide="next" style="width: 50px;"><span class="icon" aria-hidden="true"><img src="templates/six/img/nextBtn.png"></span></a>
                    </div>
                </div>
                <section class="container index_margin">
                    <div class="index_news"> <span class="wyy3"><i class="glyphicon glyphicon-volume-up g-1x"></i>网上有诸多山寨假冒网站，建议收藏网址或从软件里点击访问</span> <span class="wyy4"><a href="/">推广合作，等你来参加&gt;&gt;</a></span> </div>
                    <div class="col-lg-6">
                        <div class="feature-box-a"><img src="templates/six/img/locking-ico.png" class="feature-img">
                            <div class="feature-text-a">
                                <h4>安全隐私必备</h4>
                                <p>通过建立安全通道连接，能有效加密网络通信，确保网络数据的完整准确性，避免在不安全的网络环境下（如公共Wi-Fi）通信记录被黑客窃取利用。</p>
                            </div>
                        </div>
                        <div class="feature-box-a"><img src="templates/six/img/imac-ico.png" class="feature-img">
                            <div class="feature-text-a">
                                <h4>设备支持广泛</h4>
                                <p>Windows、Mac、iOS、Android 原生支持，除手动设置使用外，还提供专用客户端软件，运行资源占用小，使用简单无需复杂配置，建议优先选用。</p>
                            </div>
                        </div>
                        <div class="feature-box-b"><img src="templates/six/img/server-ico.png" class="feature-img">
                            <div class="feature-text-b">
                                <h4>99%高可用率</h4>
                                <p>后台实时状态监控，线路异常自动预处理。配合技术人员定点检查，最大程度确保线路运行平稳。即使遇到突发故障影响，也能及时响应更新解决。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box-a"><img src="templates/six/img/earth-ico.png" class="feature-img">
                            <div class="feature-text-a">
                                <h4>高速服务节点</h4>
                                <p>采用企业级商用服务器群组，与知名IDC服务商合作，无论线路带宽、硬件资源都能得到有效保障。运行于全球各地优质机房，提供高速互联体验。</p>
                            </div>
                        </div>
                        <div class="feature-box-a"><img src="templates/six/img/connection-ico.png" class="feature-img">
                            <div class="feature-text-a">
                                <h4>连接协议丰富</h4>
                                <p>支持多种虚拟专用网协议，加密性强，拥有良好的平台与网络兼容性。在提供更多选择的同时，也提高了网络连接稳定性，让您拥有更舒心的网络体验。</p>
                            </div>
                        </div>
                        <div class="feature-box-b" style="margin: 0;"><img src="templates/six/img/support-ico.png" class="feature-img">
                            <div class="feature-text-a">
                                <h4>售后支持完善</h4>
                                <p>我们格外重视你的使用体验，并为此不断完善产品本身。如果使用遇到任何问题，请不要犹豫，联系在线客服协助解决，或者查阅网站帮助中心栏目。</p>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row"> <img src="templates/six/img/xian.png" class="img-responsive center-block" style="height: 1px;"> </div>
                <div class="user-rating">
                    <div class="container rating-box">
                        <div id="rating-slider" class="carousel slide">
                            <ol id="slider-control" class="carousel-indicators" style="display: block;">
                                <li id="slider-control-li" data-target="#rating-slider" data-slide-to="0" class="active"></li>
                                <li id="slider-control-li" data-target="#rating-slider" data-slide-to="1"></li>
                                <li id="slider-control-li" data-target="#rating-slider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" style="height: auto;">
                                <div class="item active" style="height: auto;">
                                    <div class="big-testimonial-wrapper">
                                        <div class="big-testimonial-image"><img src="templates/six/img/user-rating-1.jpg" alt=""></div>
                                        <div class="big-testimonial-content">“迄今为止用过最舒心的网络优化服务，外贸商务必备工具。有效提高了工作效率，方便我们公司开拓海外市场用户。希望Green继续保持稳定优质服务！”<span>逆风の蒲公英 - 某外贸公司资深用户</span></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="item" style="height: auto;">
                                    <div class="big-testimonial-wrapper">
                                        <div class="big-testimonial-image"><img src="templates/six/img/user-rating-2.jpg" alt=""></div>
                                        <div class="big-testimonial-content">“大学时期查阅资料开始接触使用，几年下来的使用，Green已成为我日常中不可或缺的辅助工具。无论工作需要亦或是维持个人社交，都带来了很大便利。”<span>追风少年 - 某互联网公司程序员</span></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="item" style="height: auto;">
                                    <div class="big-testimonial-wrapper">
                                        <div class="big-testimonial-image"><img src="templates/six/img/user-rating-3.jpg" alt=""></div>
                                        <div class="big-testimonial-content">“身边朋友推荐我使用的，平时闲暇用来关注偶像动态更新，打榜活动期也和饭团们一起用行动支持。偶尔还会海淘用到，基本上就这些啦，使用还算满意。”<span>喵小呆 - 某EXO社区网友</span></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-button-left"><a href="/" data-slide="prev">&lt;</a></div>
                        <div class="slider-button-right"><a href="/" data-slide="next">&gt;</a></div>
                    </div>
                </div>
                <div class="row"> <img src="templates/six/img/xian.png" class="img-responsive center-block" style="height: 1px;"> </div>
                <div class="container-fluid hidden-xs" style="padding: 0 0 10px;">
                    <div style="position: relative; height: 160px; width: 100%;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 all_foot">
                                    <h3 class="wyy2" style="text-align: left;">注册帐号即可开始免费试用</h3>
                                    <h4 class="like-h4" style="color: #B8B7B8; text-align: left;">邮件激活后可获得免费试用机会，下载手机客户端更有其它惊喜！</h4>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 text-right">
                                    <a href="/register.php">
                                        <button class="index_contact">立即注册免费试用</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="app_qr" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header" style="padding: 20px 20px 16px;">
                                <h4 class="modal-title" style="font-size:20px;">扫描二维码下载</h4>
                            </div>
                            <div class="modal-body" style="padding: 20px 35px;"> <img src="templates/six/img/app-index.png" border="0" alt="Android APP" style="width: 100%;"> </div>
                            <div class="modal-footer"> <a style="font-size:14px;color:#03A9F4;float:left" href="/">前往App Store下载</a> <a style="font-size:14px;color:#03A9F4;float:right" href="/" type="application/vnd.android.package-archive">直接下载安卓APK</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-link">
            <ul>
                <li><a href="https://get.greenjsqcn.com/tos.html">服务条款</a></li>
                <li><a href="https://get.greenjsqcn.com/privacy.html">隐私声明</a></li>
                <li><a href="https://get.greenjsqcn.com/about-cn.html">联系我们</a></li>
                <li style="margin-right: 0;"><a href="https://get.greenjsqcn.com/affiliates" target="_blank">推广合作</a></li>
            </ul>
        </div>
        <div class="footer-text">Copyright&nbsp;©&nbsp;2017&nbsp;广州绿绮信息技术有限公司&nbsp;All Rights Reserved 粤ICP备14089320号-4</div>
        <div class="footer-text" style="margin: 0;">Green产品服务的范围及用途均适用于并遵循中华人民共和国法律和相关法规</div>
        <div class="container" style="margin-top: 20px;">
            <img src="templates/six/img/appstore-ico.png" alt="App Store" class="footer-appdl" style="margin-right: 30px;">
            <img src="templates/six/img/playstore-ico.png" alt="Google Play" class="footer-appdl">
        </div>
    </footer>
