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
                <?php breadcrumbs(1,'情報セキュリティ方針','','','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="privacy_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">SECURITY POLICY</h1>
                    <p class="">情報セキュリティ方針</p>
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
                    <div class="col-sm-12">
                        <h4 class="page-header">情報セキュリティ方針</h4>
                    </div>
                    <div class="col-sm-12 font-type-1">
                        <p>
                            当社は、情報処理サービス企業としての社会的責任を認識し、当社業務において入手した情報資産の機密性、完全性及び可用性の維持に努め、JISQ27001及び関係諸法を遵守することを徹底いたします。以上のことを企業活動の理念として徹底するために、以下の方針をもって、情報セキュリティに万全を尽くします。
                        </p>
                    </div>

                    <div class="col-sm-12 font-type-1 text-left">
                        <ol>
                            <li>顧客情報及び社員情報の機密性の維持を最優先に情報セキュリティ対策を実施します。</li>
                            <li>情報資産に対する体系的なリスクアセスメント及びリスクマネジメントに基づき、適切な管理目的及び管理策を設定します。</li>
                            <li>情報の取扱に関する法令その他の規制、契約上の義務を遵守します。</li>
                            <li>情報セキュリティを実現するための情報セキュリティマネジメントシステムを策定し、教育訓練、監督を徹底し、 従業員への浸透・遵守をはかります。さらに社会環境、法改正等に対応し、情報セキュリティマネジメントシステムの 改定及び継続的改善を実施します。</li>
                        </ol>
                    </div>

                    <div class="col-sm-12 font-type-1 text-right">
                        <ul class="list-unstyled">
                            <li>制定年月日：平成23年12月1日</li>
                            <li>最終改定年月日：平成26年11月12日</li>
                            <li>株式会社　竜巧社ネットウエア</li>
                            <li>代表取締役　井上 雅之</li>
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