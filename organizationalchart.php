<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
    <link rel="stylesheet" type="text/css" href="./css/ryu_custom_rec.css">
    <style>
    </style>
</head>
<body>
    <?php
    defnavbar(); 
    ?>
	<!-- Header -->
    <section id="breadcrumb_nav">
            <div class="row row-10">
                <?php breadcrumbs(2,'会社案内','./aboutus.php','組織図','','',''); ?>
            </div>
    </section>


    <section id="oc_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">ORGANIZATIONAL CHART</h1>
                    <p class="">組織図</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <a href="./img/oc.jpg" target="_blank">
                <img src="./img/oc.jpg" class="img-responsive" alt="組織図">
            </a>
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