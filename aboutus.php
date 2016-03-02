<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
    <link rel="stylesheet" type="text/css" href="./css/ryu_custom_rec.css">
</head>
<body>
	<?php defnavbar(); ?>
	<!-- Header -->
    <section id="breadcrumb_nav">
        <!-- <div class="container-fluid"> -->
            <div class="row row-10">
                <?php breadcrumbs(1,'会社案内','','','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="aboutus_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">COMPANY</h1>
                    <p class="">会社案内</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="aboutus_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">紹介</h1>
                    <hr class="large">
                    <p class="lead ">社員同士の風通しが良く、みんなが和気あいあいと交流出来る社風です。未経験から経験者まで幅広い人材が、それぞれに適した環境で活躍しています。</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="aboutus_main">
            <h2 class="text-center">ABOUT US</h2>
            <hr class="large">
            <p class="small text-center">株式会社竜巧社ネットウエアについて</p>
            <div class="row row-10 text-center">

                <div class="col-md-3 col-sm-6" id="service1">
                    <div class="service-item">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-flag-o fa-fw fa-stack-1x text-info gra"></i>
                        </span>
                        <h4>
                            <strong>経営理念</strong>
                        </h4>
                        <a href="./managementphilosophy.php" class="btn btn-dark btn-lg btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" id="service1">
                    <div class="service-item">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-sitemap fa-fw fa-stack-1x text-info gra"></i>
                        </span>
                        <h4>
                            <strong>組織図</strong>
                        </h4>
                        <a href="#" class="btn btn-dark btn-lg btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" id="service1">
                    <div class="service-item">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-list fa-fw fa-stack-1x text-info gra"></i>
                        </span>
                        <h4>
                            <strong>沿革</strong>
                        </h4>
                        <a href="#" class="btn btn-dark btn-lg btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" id="service1">
                    <div class="service-item">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-list-alt fa-fw fa-stack-1x text-info gra"></i>
                        </span>
                        <h4>
                            <strong>会社概要</strong>
                        </h4>
                        <a href="#" class="btn btn-dark btn-lg btn-block chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 詳しく</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <aside class="callout2">
        <div class="text-vertical-center">
            <h4 class="font-type-1" id="rec"><i class="fa fa-thumbs-o-up"></i></h4>
            <h4>RECRUIT</h4>
            <hr class="medium">
            <p class="small font-type-1">採用情報ページはこちらから。</p>
            <a href="./recruit_top.php" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 採用ページへ</a>
        </div>
    </aside>

    <aside class="rotat">
        <div class="rotat_inner">
            <h1 class="" id="rec"><i class="fa fa-phone-square"></i> ENTRY／CONTACT <i class="fa fa-envelope"></i></h1>
            <P>エントリー・コンタクト</P>
            <hr class="medium">
            <p class="small"><p>気になったらすぐに応募・ご連絡ください！</p></p>
            <a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> フォームへ</a>
        </div>
   </aside>

    <?php tmp_footer(); ?>

	<?php tmp_footer_js(); ?>

    <script src="./js/t.min.js"></script>
    <script>
        $(function(){
            $('.type').t({
                blink:true,
                speed_vary:true,
                mistype:true,
            });
        });

        $(".rec_top").bgswitcher({
            images: ['./img/rectop.jpg', 1, 2],
            effect: "drop",
        });

        $('#recruit-menu a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
    </script>
</body>
</html>