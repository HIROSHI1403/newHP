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
                <?php breadcrumbs(2,'リクルート','./recruit_top.php','インタビュー','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="interview_top">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h2 class="">RECRUIT</h2>
                    <hr class="medium">
                    <p class="">採用情報</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="recruit_top">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h2 class="">RECRUIT</h2>
                    <hr class="medium">
                    <p class="">採用情報</p>
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
            <a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 今すぐ応募ページへ！</a>
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