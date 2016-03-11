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
                <?php breadcrumbs(1,'アクセス','','','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="access_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">ACCESS CONTACT</h1>
                    <p class="">アクセス・コンタクト</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="access_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">お問い合わせや新卒中途、地図等を掲載しています。</h1>
                    <hr class="large">
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row row-20 text-right">

                <div class="col-sm-6">
                    <h2 class="font-type-1 text-center">CONTACT・APPLY</h2>
                    <hr class="medium">
                    <p class="lead font-type-1 text-center">お問い合わせ・新卒中途応募</p>
                    <p class="samll font-type-1 text-center text-muted">様々なお問い合わせはこちら！</p>
                    <a href="#" class="btn btn-dark btn-lg btn-block"><i class="fa fa-paper-plane-o"></i> お問い合わせ・応募する</a>
                </div>
                <div class="col-sm-6">
                    <h2 class="font-type-1 text-center">ACCESS</h2>
                    <hr class="medium">
                    <p class="lead font-type-1 text-center">お問い合わせ先</p>
                    <p class="samll font-type-1 text-center text-muted">直接お問い合わせしていただけます</p>
                    <table class="table table-hover table-responsive">
                        <tbody class="text-left">
                            <tr>
                                <th>電話</th>
                                <td><i class="fa fa-phone fa-fw"></i></td>
                                <th><a class="btn btn-dark btn-block btn-xs" href="tel:0351590600">03-5159-0600／採用担当：尾身（おみ）</a></th>
                            </tr>
                            <tr>
                                <td>メール</td>
                                <td><i class="fa fa-envelope-o fa-fw"></i></td>
                                <td><a class="btn btn-dark btn-block btn-xs" href="meilto:info@ryukoshanw.co.jp">info@ryukoshanw.co.jp</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-sm-12">
                    
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="map">
            <h1 class="page-header text-center" id="">MAP</h1>
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="pointer-events:none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6481.969377492912!2d139.772358!3d35.677379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be285dd2e8d%3A0xdfe2b11600bb0911!2z77yI5qCq77yJ56uc5ben56S-44ON44OD44OI44Km44Ko44Ki!5e0!3m2!1sja!2sus!4v1455521350021"></iframe>
            <br />
            <small>
                <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6481.969377492912!2d139.772358!3d35.677379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be285dd2e8d%3A0xdfe2b11600bb0911!2z77yI5qCq77yJ56uc5ben56S-44ON44OD44OI44Km44Ko44Ki!5e0!3m2!1sja!2sus!4v1455521350021"></a>
            </small>
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
            <p class="small"><p>フォームへ移動します。</p></p>
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