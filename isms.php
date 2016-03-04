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
                <?php breadcrumbs(1,'ISMS','','','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="privacy_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">ISMS</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="container" id="news_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">新着情報を掲載しています。</h1>
                    <hr class="large">
                    <p class="lead ">詳細があればCLICKできます。</p>
                </div>
            </div>
        </div>
    </section> -->

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row row-0 text-left">
                <div class="row">
                    <div class="col-sm-12 font-type-1 text-center">
                        <img src="./img/isms.png" class="img-responsive center-block" alt="ISMS">
                    </div>

                    <div class="col-sm-12 font-type-1 text-left">
                        <p class="text-left">JIS Q 27001:2014(ISO/IEC 27001:2013)</p>
                        <ul>
                            <li>認証番号：MSA-IS-97</li>
                            <li>事業者：株式会社竜巧社ネットウエア</li>
                            <li>所在地：東京都中央区京橋一丁目１４番９号</li>
                            <li>対象組織：本社</li>
                            <li>対象事業：システム運用保守監視、システム開発、ネットワーク・サーバ構築及び派遣に関する管理</li>
                            <li>認証日：２０１２年９月２４日</li>
                            <li>有効期限：２０１８年９月２３日</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 text-center">
                        <a href="#" onclick="javascript:window.history.back(-1);return false;" class="btn btn-dark"><i class="fa fa-reply"></i> 戻る</a>
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