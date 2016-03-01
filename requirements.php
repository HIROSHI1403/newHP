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
                <?php breadcrumbs(2,'リクルート','./recruit_top.php','募集要項','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="ap_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">REQUIREMENTS</h1>
                    <p class="">各種募集要項</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="ap_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">共に成長し、実感する！</h1>
                    <hr class="large">
                    <p class="lead ">あなたが活躍できるステージで一緒に成長しませんか？私達はあなたを待っています！</p>
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
                    <div class="offer offer-warning">
                        <div class="shape">
                            <div class="shape-text">
                                <i class="fa fa-star fa-spin"></i>
                            </div>
                        </div>
                        <div class="offer-content">
                            <h3 class="lead">
                                各種募集要項
                            </h3>
                            <p>
                                未経験から経験者まで幅広い人材が、それぞれに適した方向性、自身の興味や目標によってスキルを身に付け、キャリアアップをしている環境が弊社の魅力です。この業界に経験のある方は今までのキャリアを生かしつつ、更なる成長を目指し、未経験の方は分からない事があれば何でも先輩社員に聞いて下さい。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h2 class="page-header">新卒／中途　募集要項</h2>
                </div>
                <div class="col-lg-12 margin10">
                    <div class="panel with-nav-tabs nav nav-tabs panel-warning border-solid">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs" id="ap-menu">
                                <li class="active"><a href="#new_tab" data-toggle="tab"><span class="lead"><i class="fa fa-thumbs-o-up"></i> 新卒</span></a></li>
                                <li><a href="#career_tab" data-toggle="tab"><span class="lead"><i class="fa fa-thumbs-up"></i> 中途</span></a></li>
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="new_tab">
                                <h3 class="page-header">新卒採用</h3>
                            </div>
                            <div class="tab-pane fade" id="career_tab">
                                <h3 class="page-header">中途採用</h3>
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

        $('#ap-menu a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
    </script>
</body>
</html>