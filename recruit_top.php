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
    <header id="top" class="header rec_top" style="background-attachment: fixed;">
        <div class="text-vertical-center container-fluid" style="text-align:left;">
            <h1 class="">RYUKOSHA NETWARE Inc.</h1>
            <h2 class="type"><del class="red"><strong>RECRUIT</strong></del><span class="purple">採用情報</span><br>
            Making the <del class="red">未来</del>future.<br><del class="def">自分の未</del><small class="def">自分の未来をつくる。</small>
            </h2>
            <br>
            <a href="#recruit_top" class="btn btn-dark btn-lg chaffle" data-lang="en"><i class="fa fa-arrow-down"></i> MORE</a>
        </div>
    </header>
    <!-- <section id="about" class="about">
        <div class="container-fluid">
            <div class="row row-0">
                <div class="col-lg-6 text-center">
                    <h2 class="font-type-1" id="">「これからのIT時代に、システム技術者となる人材を世に送り出そう」</h2>
                    <p class="lead font-type-1" id="">どこまでも信頼出来る技術と柔軟性で世界を支えるソリューションを提供し続けます</p>
                </div>
                <div class="col-lg-6 text-center">
                    <h2 class="font-type-1" id="">「これからのIT時代に、システム技術者となる人材を世に送り出そう」</h2>
                    <p class="lead font-type-1" id="">どこまでも信頼出来る技術と柔軟性で世界を支えるソリューションを提供し続けます</p>
                </div>
            </div>
        </div>
    </section> -->
    <section id="breadcrumb_nav">
        <!-- <div class="container-fluid text-center"> -->
            <div class="row row-10">
                <?php breadcrumbs(1,'リクルート','','','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <?php tmp_rec_nav(); ?>
    <section>
        <div class="container" id="recruit_top">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h2 class="">RECRUIT</h2>
                    <hr class="medium">
                    <p class="">採用情報</p>
                    <p class="small text-left marker_yellow_hoso msg-rotate"><i class="fa fa-arrow-down"></i> インタビューや募集要項を閲覧できます！CLICK！</p>
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="recruit-menu" role="tablist">
                        <!-- <ul class="nav nav-tabs nav-justified" id="recruit-menu" role="tablist"> -->
                            <li class="dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <h4><i class="fa fa-list-ul"></i> MENU <small><メニュー></small> <span class="caret"></span></h4>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation" class="active"><a href="#message" aria-controls="message" role="tab" data-toggle="tab"><i class="fa fa-bookmark-o fa-fw"></i> メッセージ</a></li>
                                    <li role="presentation"><a href="#top-messages" aria-controls="top-messages" role="tab" data-toggle="tab"><i class="fa fa-comment-o fa-fw"></i> 代表メッセージ</a></li>
                                    <li role="presentation"><a href="#interview" aria-controls="interview" role="tab" data-toggle="tab"><i class="fa fa-comments-o fa-fw"></i> インタビュー</a></li>
                                    <li role="presentation"><a href="#study" aria-controls="study" role="tab" data-toggle="tab"><i class="fa fa-laptop fa-fw"></i> 教育・研修</a></li>
                                    <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab"><i class="fa fa-thumbs-o-up fa-fw"></i> 新卒</a></li>
                                    <li role="presentation"><a href="#career" aria-controls="career" role="tab" data-toggle="tab"><i class="fa fa-thumbs-up fa-fw"></i> 中途</a></li>
                                    <li role="presentation"><a href="#requirements" aria-controls="requirements" role="tab" data-toggle="tab"><i class="fa fa-list-alt fa-fw"></i> 各種（新卒・中途）募集要項</a></li>
                                </ul>
                            </li>
                            <!-- <li role="presentation"><a href="#message" aria-controls="message" role="tab" data-toggle="tab">メッセージ</a></li>
                            <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">新卒</a></li>
                            <li role="presentation"><a href="#career" aria-controls="career" role="tab" data-toggle="tab">中途</a></li>
                            <li role="presentation" class="active"><a href="#top-messages" aria-controls="top-messages" role="tab" data-toggle="tab">代表メッセージ</a></li>
                            <li role="presentation"><a href="#interview" aria-controls="interview" role="tab" data-toggle="tab">インタビュー</a></li> -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="message" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">若さと発想の集合体、だから毎日エキサイティング。</h2>
                                    <p class="lead">君の才能を輝かそう！いろんなフィールドが揃っています。</p>
                                    <div class="col-md-6 margin10">
                                        <img src="./img/pc1.jpg" alt="IT　採用" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h1>個性を磨く！君を磨く！</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <div class="text">
                                            <div class="content-text">
                                                <h3 class="lead">
                                                <i class="fa fa-lightbulb-o"></i> 今、ここに決める価値がある。
                                                </h3>
                                                <p class="">竜巧社ネットウエアの仕事はさまざま。例えば本社においてのシステム企画・開発。プログラマーから始まって、システムエンジニアまで、それぞれの能力に応じてお客様が求める最適のシステム開発を担う。あるいはお客様の要望に応じて、お客さまのシステム部署で運用業務をお手伝いする事も有る。ネットワーク監視や障害対応、ヘルプデスクと、その内容は多岐に渡ります。自分の能力、志向に応じて、いろんな業務を選択出来る竜巧社ネットウエアの仕事。新卒、未経験者でも、初期導入教育~キャリアサポートまで一貫した研修システムを備えているから安心です。</p>
                                                <p>未経験から経験者まで幅広い人材が、それぞれに適した方向性、自身の興味や目標によってスキルを身に付け、キャリアアップをしている環境が弊社の魅力です。この業界に経験のある方は今までのキャリアを生かしつつ、更なる成長を目指し、未経験の方は分からない事があれば何でも先輩社員に聞いて下さい。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="top-messages" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">代表メッセージ</h2>
                                    <p class="lead">「これからのIT時代に、システム技術者となる人材を世に送り出そう」</p>
                                    <div class="col-md-6 margin10">
                                        <div class="">
                                            <div class="">
                                                <h1 class="page-header top">
                                                愛を基本とし<br>技術を基礎に<br>進歩を目的とす<br>
                                                </h1>
                                                <p class="text-right text-muted">社訓</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <img src="./img/ceo2.jpg" alt="竜巧社ネットウエア井上雅之社長" class="img-responsive">
                                        <div class="carousel-caption">
                                            <!-- <h1></h1> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <img src="./img/ceo.jpg" alt="竜巧社ネットウエア井上雅之社長" class="img-responsive">
                                        <div class="carousel-caption">
                                            <!-- <h1></h1> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <div class="">
                                            <div class="text-left">
                                                <h3 class="page-header">
                                                   設立。そして、これから。
                                                </h3>
                                                <p class="">これからのIT時代に、システム技術者となる人材を世に送り出そう。」人材開発と教育事業で培った経験を活かし、社員0名から「竜巧社ネットウエア」は設立されました。</p>
                                                <p>設立当初から今まで一貫して私は経営理念でもある「愛を持って人に接する」ということを自分自身、又社員一同に対して唱えております。その結果、社員1人から始まり、友が友を呼びいつしか組織として大きく成長することができました。</p>
                                                <p>今まさに若い社員と経験豊かな社員が共に柔軟な頭脳を持ち合わせ、新鮮且つ斬新なアイデアを形にして行く果てしない可能性と果敢に挑む姿勢で事業活動を盛り上げ、夢を実現しようとしています。</p>
                                                <p>当社の経営理念及び社員一丸となった仕事への意欲、ならびにお客様に対しての感謝の気持ちが少しでも皆様に伝わることが出来たなら幸いです。</p>
                                                <h6 class="text-right">
                                                    <i class="fa fa-pencil"></i> 代表取締役社長 / 井上 雅之
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="interview" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">インタビュー</h2>
                                    <p class="lead">社員のインタビューや仕事の紹介をまとめています。</p>
                                    <div class="col-md-6 margin10">
                                        <img src="./img/mrk3.jpg" alt="IT　採用" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h1>ここで聞ける本音！</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <div class="text">
                                            <div class="content-text">
                                                <h3 class="">
                                                    実際どうよ？そんな話をしてくれました。
                                                </h3>
                                                <p class="lead">各現場で活躍している方々のインタビューを掲載しています。</p>
                                            </div>
                                        </div>
                                        <h3 class="page-header text-left"><i class="fa fa-comments-o"></i> 詳しくはこちらのリンクより！</h3>
                                        <p class=""><a href="./Interview_top.php" class="btn-mkr"><i class="fa fa-angle-right"></i> 詳しく見てみる</a></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="study" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header"><i class="fa fa-laptop"></i> 教育・研修</h2>
                                    <p class="lead">先輩からのOJTはもちろん、社内だけでなく外部のセミナーや研修も充実！</p>
                                    <div class="col-md-6 margin10">
                                        <img src="./img/study3.jpg" alt="IT　採用" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h1><i class="fa fa-desktop"></i> ここまでやれる！学べる！</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <div class="text">
                                            <div class="content-text">
                                                <h3 class="">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    初心者からベテランまで満足！
                                                </h3>
                                                <p class="lead">竜巧社ネットウエアでは、社員一人ひとりの能力を最大限発揮できるように教育研修制度に力を入れております。</p>
                                            </div>
                                        </div>
                                        <h3 class="page-header text-left"><i class="fa fa-external-link"></i> 詳しくはこちらのリンクより！</h3>
                                        <p class=""><a href="javascript:void(0);" class="btn-mkr"><i class="fa fa-angle-right"></i> 詳しく見てみる</a></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="new" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">新卒</h2>
                                    <p class="lead">これからのＩＴ業界にはあなたの力が必要です！スピードとパワーを誇る竜巧社ネットウエアで共に働いてみませんか！</p>
                                    <div class="col-md-6 margin10">
                                        <img src="./img/new2.jpg" alt="IT　採用" class="img-responsive">
                                        <div class="carousel-caption">
                                            <!-- <h1><i class="fa fa-thumbs-up"></i> 経験・未経験問いません！</h1> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <div class="text">
                                            <div class="content-text">
                                                <h3 class="">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    君と世界の”FUTURE”をここで創る！
                                                </h3>
                                                <p class="lead">竜巧社ネットウエアでは、教育環境やOJT等に力を入れています。社会人教育から技術教育まで多岐にわたる成長を実感できます！一緒に君の将来（”FUTURE”）と世の中の未来（”FUTURE”）ここで創造していきましょう！</p>
                                            </div>
                                        </div>
                                        <h3 class="page-header text-left"><i class="fa fa-external-link"></i> 詳しくはこちらのリンクより！</h3>
                                        <p class=""><a href="javascript:void(0);" class="btn-mkr"><i class="fa fa-angle-right"></i> 詳しく見てみる</a></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="career" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">中途</h2>
                                    <p class="lead">経験者なら夢をかなえるフィールドが揃っています。未経験者の方でもＩＴスペシャリストへの道が開けます。</p>
                                    <div class="col-md-6 margin10">
                                        <img src="./img/career3.jpg" alt="IT　採用" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h1><i class="fa fa-thumbs-up"></i> 経験・未経験問いません！</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <div class="text">
                                            <div class="content-text">
                                                <h3 class="">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    初心者からベテランまで満足！
                                                </h3>
                                                <p class="lead">竜巧社ネットウエアでは、社員一人ひとりの能力を最大限発揮できるように教育研修制度に力を入れております。</p>
                                            </div>
                                        </div>
                                        <h3 class="page-header text-left"><i class="fa fa-external-link"></i> 詳しくはこちらのリンクより！</h3>
                                        <p class=""><a href="javascript:void(0);" class="btn-mkr"><i class="fa fa-angle-right"></i> 詳しく見てみる</a></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="requirements" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">各種（新卒・中途）募集要項</h2>
                                    <p class="lead">各種求人媒体の掲載も随時しております！</p>
                                    <div class="col-md-6 margin10">
                                        <div class="box" id="relation1">
                                            <div class="box-icon">
                                                <span class="fa fa-thumbs-o-up fa-4x"></span>
                                            </div>
                                            <div class="info">
                                                <h3 class="page-header text-center">新卒採用</h3>
                                                <h4 class="">集まれ！若いチカラ！</h4>
                                                <a href="" class="btn-mkr"><i class="fa fa-angle-right"></i> 詳細を確認する</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 margin10">
                                        <div class="box" id="relation2">
                                            <div class="box-icon">
                                                <span class="fa fa-thumbs-up fa-4x"></span>
                                            </div>
                                            <div class="info">
                                                <h3 class="page-header text-center">中途採用</h3>
                                                <h4 class="">経験・未経験問いません！</h4>
                                                <a href="" class="btn-mkr"><i class="fa fa-angle-right"></i> 詳細を確認する</a>
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
                                                        <img src="http://placehold.jp/500x150.png" class="img-responsive img-center" alt="求人媒体">
                                                        <p>LINK</p>
                                                    </div>
                                                    <div class="col-md-6 margin10 text-center">
                                                        <img src="http://placehold.jp/500x150.png" class="img-responsive img-center" alt="求人媒体">
                                                        <p>LINK</p>
                                                    </div>
                                                    <div class="col-md-6 margin10 text-center">
                                                        <img src="http://placehold.jp/500x150.png" class="img-responsive img-center" alt="求人媒体">
                                                        <p>LINK</p>
                                                    </div>
                                                    <div class="col-md-6 margin10 text-center">
                                                        <img src="http://placehold.jp/500x150.png" class="img-responsive img-center" alt="求人媒体">
                                                        <p>LINK</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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