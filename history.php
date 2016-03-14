<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
    <link rel="stylesheet" type="text/css" href="./css/ryu_custom_rec.css">
</head>
<body>
    <?php
    defnavbar(); 
    ?>
	<!-- Header -->
    <section id="breadcrumb_nav">
            <div class="row row-10">
                <?php breadcrumbs(2,'会社案内','./aboutus.php','沿革','','',''); ?>
            </div>
    </section>


    <section id="history_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">HISTORY</h1>
                    <p class="">沿革</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">

            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th>年月</th>
                        <th>詳細</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="nowarp">平成９年４月</td>
                        <td>東京都中央区茅場町にて営業開始</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成９年８月</td>
                        <td>オペレーションエンジニアリングサービス開始</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成１０年３月</td>
                        <td>業務拡大により東京都中央区日本橋に本社移転</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成１１年１０月</td>
                        <td>ネットワークエンジニアリングサービス開始</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成１２年９月</td>
                        <td>システムエンジニアリングサービス開始</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成１３年６月</td>
                        <td>次世代戦略ソリューションサービス開始</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成１５年１０月</td>
                        <td>業務拡大により東京都中央区京橋に本社移転</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成１７年６月</td>
                        <td>スタッフソリューションサービス開始 (派遣許可番号：般１３－３００８７０)</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成１９年１２月</td>
                        <td>業務拡大により東京都中央区京橋1丁目に本社移転</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成２０年９月</td>
                        <td>日本情報処理開発協会よりプライバシーマーク使用を認定される (認定番号：第１０８２３０３７（０１）号)</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成２４年９月</td>
                        <td>本社において、ISO/IEC27001情報セキュリティマネジメントシステムの認証を取得 (認証番号：MSA-IS-97)</td>
                    </tr>
                    <tr>
                        <td class="nowarp">平成２６年１２月</td>
                        <td>株式会社インターネットイニシアティブに全株式を譲渡し、同社の100％子会社となる。</td>
                    </tr>
                </tbody>
            </table>

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
            <a href="./access.php" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> フォームへ</a>
        </div>
   </aside>

    <?php
    tmp_footer(); 
    ?>

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