<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
</head>
<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >竜巧社ネットウエア</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 class="font-type-1 animated zoomInDown">RYUKOSHA NETWARE Inc.</h1>
            <h3 class="font-type-1"><u>確かな信頼と力強いソリューションでビジネスを加速させます</u></h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg chaffle" data-lang="en"><i class="fa fa-arrow-down"></i> MORE</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="font-type-1" id="about1">「これからのIT時代に、システム技術者となる人材を世に送り出そう」</h2>
                    <p class="lead font-type-1" id="about2">どこまでも信頼出来る技術と柔軟性で世界を支えるソリューションを提供し続けます</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2 class="font-type-1">ABOUT</h2>
                    <hr class="medium">
                    <p class="small font-type-1">竜巧社ネットウエアについて</p>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 font-type-1" id="service1">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-building fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>会社案内</strong>
                                </h4>
                                <p>会社概要や組織図、経営理念について掲載しています。</p>
                                <a href="#" class="btn btn-light btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 font-type-1"  id="service2">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-compass fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>事業案内</strong>
                                </h4>
                                <p>弊社の各事業の詳細を掲載しています。</p>
                                <a href="#" class="btn btn-light btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 font-type-1"  id="service3">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-users fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>採用情報</strong>
                                </h4>
                                <p>新卒・キャリア（中途）採用についての詳細を掲載しています。</p>
                                <a href="#" class="btn btn-light btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 font-type-1"  id="service4">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-map-marker fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>アクセス・コンタクト</strong>
                                </h4>
                                <p>各種お問い合わせや、所在地の地図等を掲載しております。</p>
                                <a href="#" class="btn btn-light btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1 class="font-type-1" id="rec">RECRUITING</h1>
            <hr class="medium">
            <p class="small font-type-1">採用情報ページ</p>
            <a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 採用ページへ</a>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2 class="font-type-1">What's New</h2>
                    <hr class="medium">
                    <p class="small font-type-1">ニュース</p>
                    <div class="row">
                        <div class="col-md-12 font-type-1" id="news1">
                            <ul class="event-list">
                                <li>
                                    <time datetime="2014-07-20 0000">
                                    <span class="day">8</span>
                                    <span class="month">Jul</span>
                                    <span class="year">2014</span>
                                    <span class="time">12:00 AM</span>
                                    </time>
                                    <div class="info">
                                        <h2 class="title">Shipment Ready</h2>
                                        <p class="desc"></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 font-type-1" id="news2">
                            <ul class="event-list">
                                <li>
                                    <time datetime="2014-07-20 0000">
                                    <span class="day">8</span>
                                    <span class="month">Jul</span>
                                    <span class="year">2014</span>
                                    <span class="time">12:00 AM</span>
                                    </time>
                                    <div class="info">
                                        <h2 class="title">Shipment Ready</h2>
                                        <p class="desc"></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 font-type-1" id="news3">
                            <ul class="event-list">
                                <li>
                                    <time datetime="2014-07-20 0000">
                                    <span class="day">8</span>
                                    <span class="month">Jul</span>
                                    <span class="year">2014</span>
                                    <span class="time">12:00 AM</span>
                                    </time>
                                    <div class="info">
                                        <h2 class="title">Shipment Ready</h2>
                                        <p class="desc"></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 font-type-1" id="news4">
                            <ul class="event-list">
                                <li>
                                    <time datetime="2014-07-20 0000">
                                    <span class="day">8</span>
                                    <span class="month">Jul</span>
                                    <span class="year">2014</span>
                                    <span class="time">12:00 AM</span>
                                    </time>
                                    <div class="info">
                                        <h2 class="title">Shipment Ready</h2>
                                        <p class="desc"></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark font-type-1 chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> もっと見る</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>SOCIAL</h3>
                    <hr class="medium">
                    <p class="small font-type-1">ソーシャルアカウント</p>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-icon">
                            <span class="fa fa-4x fa-twitter"></span>
                        </div>
                        <div class="info">
                            <h4 class="text-center">Follow Us On Twitter</h4>
                            <a class="twitter-timeline" href="https://twitter.com/HIROSHI_1403" data-widget-id="646960370540675072">@HIROSHI_1403さんのツイート</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-icon">
                            <span class="fa fa-4x fa-facebook"></span>
                        </div>
                        <div class="info">
                            <h4 class="text-center">Find Us On Facebook</h4>
                            <!-- <iframe id="facebook-feed" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Ffringe&width=500&height=300&show_faces=true&colorscheme=light&stream=true&border_color&header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:300px;" allowTransparency="true"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <!-- <section id="contact" class="map">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6481.969377492912!2d139.772358!3d35.677379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be285dd2e8d%3A0xdfe2b11600bb0911!2z77yI5qCq77yJ56uc5ben56S-44ON44OD44OI44Km44Ko44Ki!5e0!3m2!1sja!2sus!4v1455521350021"></iframe>
            <br />
            <small>
                <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6481.969377492912!2d139.772358!3d35.677379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be285dd2e8d%3A0xdfe2b11600bb0911!2z77yI5qCq77yJ56uc5ben56S-44ON44OD44OI44Km44Ko44Ki!5e0!3m2!1sja!2sus!4v1455521350021"></a>
            </small>
            </iframe>
    </section> -->

    <!-- Footer -->
    <!-- <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer> -->
    <?php tmp_footer(); ?>

    <?php tmp_footer_js(); ?>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu

    </script>
</body>
</html>
