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
                <?php breadcrumbs(2,'事業案内','./aboutus.php','経営理念','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="ceo_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">MANAGEMENT PHILOSOPHY</h1>
                    <p class="">経営理念</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="ceo_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="brk" id=""><span class="text-red">愛</span>を基本とし 技術を基礎に 進歩を目的とす</h1>
                    <hr class="large">
                    <p class="lead ">社訓</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="aboutus_main">
            <h2 class="text-center page-header">代表メッセージ</h2>
            <hr class="large">
            <p class="text-center lead">「これからのIT時代に、システム技術者となる人材を世に送り出そう」</p>
            <div class="row row-10 text-left">

                <div class="col-md-6 margin10">
                    <div class="">
                        <div class="text-center">
                            <h1 class="page-header top text1">
                            愛を基本とし<br>技術を基礎に<br>進歩を目的とす<br>
                            </h1>
                            <p class="text-right text-muted">社訓</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 margin10">
                    <img src="./img/ceo2.jpg" alt="竜巧社ネットウエア井上雅之社長" class="img-responsive">
                    <div class="carousel-caption">
                        <!-- <h1></h1> -->
                    </div>
                </div>
                <div class="col-md-6 margin10">
                    <img src="./img/ceo.jpg" alt="竜巧社ネットウエア井上雅之社長" class="img-responsive">
                    <div class="carousel-caption">
                        <!-- <h1></h1> -->
                    </div>
                </div>
                <div class="col-md-6 margin10">
                    <div class="">
                        <div class="text-left">
                            <h3 class="page-header">
                               設立。そして、これから。
                            </h3>
                            <p class="">これからのIT時代に、システム技術者となる人材を世に送り出そう。」人材開発と教育事業で培った経験を活かし、社員0名から「竜巧社ネットウエア」は設立されました。</p>
                            <p>設立当初から今まで一貫して私は経営理念でもある「愛を持って人に接する」ということを自分自身、又社員一同に対して唱えております。その結果、社員1人から始まり、友が友を呼びいつしか組織として大きく成長することができました。</p>
                            <p>今まさに若い社員と経験豊かな社員が共に柔軟な頭脳を持ち合わせ、新鮮且つ斬新なアイデアを形にして行く果てしない可能性と果敢に挑む姿勢で事業活動を盛り上げ、夢を実現しようとしています。</p>
                            <p>当社の経営理念及び社員一丸となった仕事への意欲、ならびにお客様に対しての感謝の気持ちが少しでも皆様に伝わることが出来たなら幸いです。</p>
                            <h6 class="text-right">
                                <i class="fa fa-pencil"></i> 代表取締役社長 / 井上 雅之
                            </h6>
                        </div>
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