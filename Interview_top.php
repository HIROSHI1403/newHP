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
    <section id="interview_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">INTERVIEW</h1>
                    <p class="">社員の声＜インタビュー＞</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="interview_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">社員のインタビュー内容を掲載しています！</h1>
                    <hr class="large">
                    <p class="lead ">何気ない話や、仕事の話、実は「◯◯です！」なんて話も掲載しています！</p>
                </div>
            </div>
        </div>
    </section>
    <?php tmp_rec_nav(); ?>
    <section>
        <div class="container" id="interview_top_main">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">現場で活躍する先輩たち</h1>
                    <hr class="medium">
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview1">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview2">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview2">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview3">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview3">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview4">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview4">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview5">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview5">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview6">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview6">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview7">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview7">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview8">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview8">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview9">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview9">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview10">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview10">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview11">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview11">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 margin10 text-center hover14 column">
                        <a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#interview12">
                            <figure><img src="http://placehold.jp/800x600.png" class="img-responsive img-center" alt="求人媒体"></figure>
                        </a>
                        <p>LINK</p>
                    </div>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="interview12">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="row row-10">
                                    <div class="col-sm-4">
                                        <img src="http://placehold.jp/800x600.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-7">
                                        <h4 class="page-header">name</h4>
                                        <p>text</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-link text-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
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