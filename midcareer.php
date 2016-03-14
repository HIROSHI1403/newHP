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
            <div class="row row-10">
                <?php breadcrumbs(2,'リクルート','./recruit_top.php','中途採用','','',''); ?>
            </div>
    </section>


    <section id="midcareer_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">CAREER</h1>
                    <p class="">中途採用</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="midcareer_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">経験・未経験問いません！</h1>
                    <hr class="large">
                    <p class="lead ">経験者なら夢をかなえるフィールドが揃っています。未経験者の方でもＩＴスペシャリストへの道が開けます！</p>
                </div>
            </div>
        </div>
    </section>
    <?php tmp_rec_nav(); ?>
    <section>
        <div class="container" id="interview_top_main">
            <div class="row row-10 text-center">
                <div class="col-lg-12">
                    <h1 class="" id=""></h1>
                    <div class="offer offer-primary">
                        <div class="shape">
                            <div class="shape-text">
                                <i class="fa fa-star fa-spin"></i>
                            </div>
                        </div>
                        <div class="offer-content">
                            <h3 class="lead">
                                今あなたが必要です！未経験者も経験者も共に力を合わせ一緒に未来を創る！
                            </h3>
                            <p>
                                経験、未経験を問いません。経験者なら、あなたのやりたい夢をかなえるフィールドがここにあります。もちろん給与、ポジション、その他面接の上優遇します。未経験の方でも、経験豊かな先輩からのOJTや会社主催の勉強会・研修等で丁寧に指導。ＩＴスペシャリストの道がひらけます。実力とアイディアがあれば、管理者として事業部まるごとお任せすることも可能です。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h2 class="page-header">中途募集要項／インタビュー</h2>
                </div>
                <div class="col-lg-6 margin10">
                    <div class="box" id="relation1">
                        <div class="box-icon box-icon-color2">
                            <span class="fa fa-thumbs-o-up fa-4x"></span>
                        </div>
                        <div class="info">
                            <h3 class="page-header text-center">中途募集要項</h3>
                            <h4 class="">集まれ！若いチカラ！</h4>
                            <a href="./requirements.php" class="btn-mkr"><i class="fa fa-angle-right"></i> 募集要項へ</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin10">
                    <div class="box" id="relation4">
                        <div class="box-icon box-icon-color2">
                            <span class="fa fa-comments-o fa-4x"></span>
                        </div>
                        <div class="info">
                            <h3 class="page-header text-center">インタビュー</h3>
                            <h4 class="">ここで聞ける！先輩の本音！</h4>
                            <a href="./interview_top.php" class="btn-mkr"><i class="fa fa-angle-right"></i> インタビューを見る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <aside class="rotat">
        <div class="rotat_inner">
            <h1 class="" id="rec"><i class="fa fa-phone-square"></i> ENTRY／CONTACT <i class="fa fa-envelope"></i></h1>
            <P>エントリー・コンタクト</P>
            <hr class="medium">
            <p class="small"><p>気になったらすぐに応募ください！あなたの第一歩をサポート！</p></p>
            <a href="./access.php" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 今すぐ応募ページへ！</a>
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