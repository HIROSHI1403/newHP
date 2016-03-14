<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
    <?php tmp_header_meta(); ?>
    <link rel="stylesheet" type="text/css" href="./css/ryu_custom_rec.css">
</head>
<body>
    <?php defnavbar(); ?>
    <section id="breadcrumb_nav">
            <div class="row row-10">
                <?php breadcrumbs(1,'Pマーク','','','','',''); ?>
            </div>
    </section>

    <section id="pmark_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Ｐマーク</h1>
                </div>
            </div>
        </div>
    </section>


    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row row-0 text-left">
                <div class="row">
                    <div class="col-sm-12 font-type-1 text-center">
                        <img src="./img/p.gif" class="img-responsive center-block" alt="Ｐマーク">
                    </div>

                    <div class="col-sm-12 font-type-1 text-left">
                        <ul>
                            <li>認定番号： 第１０８２３０３７(０４)号</li>
                            <li>事業者：株式会社竜巧社ネットウエア</li>
                            <li>所在地：東京都中央区京橋一丁目１４番９号</li>
                            <li>初回認定年月日： 平成２０年９月１１日</li>
                            <li>認定の有効期限： 平成２６年９月２９日～平成２８年９月２８日</li>
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
            <a href="./access.php" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> アクセスページへ！</a>
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