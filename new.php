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
                <?php breadcrumbs(2,'リクルート','./recruit_top.php','新卒採用','','',''); ?>
            </div>
    </section>

    <section id="new_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">NEW GRADUATES</h1>
                    <p class="">新卒採用</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="new_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">集まれ！若いチカラ！</h1>
                    <hr class="large">
                    <p class="lead ">これからのＩＴ業界にはあなたの力が必要です！スピードとパワーを誇る竜巧社ネットウエアで共に働いてみませんか！</p>
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
                    <div class="offer offer-success">
                        <div class="shape">
                            <div class="shape-text">
                                <i class="fa fa-star fa-spin"></i>
                            </div>
                        </div>
                        <div class="offer-content">
                            <h3 class="lead">
                                君と世界の”FUTURE”をここで創る！
                            </h3>
                            <p>
                                私たち竜巧社ネットウエアは平均年齢２０代後半という若い会社です。その可能性は無限大。日々技術の向上と、新しいビジネスの創造に努めています。一人一人がプロとして自立し、責任をもって自らの職務を全うする・・・そんな会社を目指しています。社風は自由で活発。元気いっぱいの若いパワーとしなやかな感性が満ち溢れています。エキサイティングでやりがいのある毎日を過ごしたい君。私たちと一緒に成長していきませんか！
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h2 class="page-header">新卒募集要項／インタビュー</h2>
                </div>
                <div class="col-lg-6 margin10">
                    <div class="box" id="relation1">
                        <div class="box-icon">
                            <span class="fa fa-thumbs-o-up fa-4x"></span>
                        </div>
                        <div class="info">
                            <h3 class="page-header text-center">新卒募集要項</h3>
                            <h4 class="">集まれ！若いチカラ！</h4>
                            <a href="./requirements.php" class="btn-mkr"><i class="fa fa-angle-right"></i> 募集要項へ</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin10">
                    <div class="box" id="relation4">
                        <div class="box-icon">
                            <span class="fa fa-comments-o fa-4x"></span>
                        </div>
                        <div class="info">
                            <h3 class="page-header text-center">インタビュー</h3>
                            <h4 class="">ここで聞ける！先輩の本音！</h4>
                            <a href="./interview_top.php" class="btn-mkr"><i class="fa fa-angle-right"></i> インタビューを見る</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 margin10">
                    <div class="box" id="relation3">
                        <div class="box-icon box-icon-color1">
                            <span class="fa fa-newspaper-o fa-4x"></span>
                        </div>
                        <div class="info">
                            <h3 class="page-header text-center">各種求人媒体</h3>
                            <h4 class="">詳細は各リンクをクリックしてください！</h4>
                            <div class="row row-10">
                                <div class="col-md-6 margin10 text-center">
                                    <div align="center">
                                        <a href="https://job.rikunabi.com/2017/company/top/r163681040/" target="new">
                                            <img src="https://job.rikunabi.com/2017/static/common/contents/logos/rikunabi/image/rn_logo_b.gif" width="200" height="40" border="0" class="img-responsive img-center">
                                        </a><br>
                                        <a href="https://job.rikunabi.com/2017/company/top/r163681040/" target="new">
                                            リクナビの弊社画面へ
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 margin10 text-center">
                                    <div align="center">
                                        <a href="https://job.rikunabi.com/2017/company/entry/r163681040/B001/" target="new">
                                            <img src="https://job.rikunabi.com/2017/static/common/contents/logos/rikunabi/image/rn_logo_b.gif" width="200" height="40" border="0" class="img-responsive img-center">
                                        </a><br>
                                        <a href="https://job.rikunabi.com/2017/company/entry/r163681040/B001/" target="new">
                                            リクナビの弊社画面へ
                                        </a>
                                    </div>
                                </div>
                            </div>
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