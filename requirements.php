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
                                <div class="row row-10">

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-briefcase fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">仕事内容</h4>
                                                    <p class="text-left text-muted">システムエンジニア、プログラマ、ネットワークエンジニア、システム運用オペレータ、ヘルプデスク（一般事務）</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-shield fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">資格</h4>
                                                    <p class="text-left text-muted">専門卒、高専卒、短大卒、大卒</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-briefcase fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">仕事内容</h4>
                                                    <p class="text-left text-muted">システムエンジニア、プログラマ、ネットワークエンジニア、システム運用オペレータ、ヘルプデスク（一般事務）</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-money fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">給与</h4>
                                                    <p class="text-left text-muted">初任給（基本給のみ各手当含まず）</p>
                                                    <p class="text-left text-muted">専門・高専・短大卒：基本給１７万３千円</p>
                                                    <p class="text-left text-muted">大卒：基本給１８万３千円</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-map-marker fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">勤務地</h4>
                                                    <p class="text-left text-muted">東京都内および近郊</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-clock-o fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">勤務時間</h4>
                                                    <p class="text-left text-muted">平日9:00〜18:00</p>
                                                    <p class="text-left text-muted">シフト勤務の場合（例）17:00〜翌日午前10:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-gift fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">待遇</h4>
                                                    <p class="text-left text-muted">諸手当：通勤手当（全額）、家族手当、住宅手当、役職手当、夜勤手当、他</p>
                                                    <p class="text-left text-muted">昇給：年１回（４月）</p>
                                                    <p class="text-left text-muted">賞与：年３回（７月、１２月、期末）</p>
                                                    <p class="text-left text-muted">福利厚生：各種社会保険、東京都情報サービス産業健康保険組合加盟、合格祝金制度(情報処理試験) 、通信教育奨励制度</p>
                                                    <p class="text-left text-muted">その他：各種同好会、社員旅行、健康保険組合保養所、提携施設の利用他</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-sun-o fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">休日休暇</h4>
                                                    <p class="text-left text-muted">週休２日制（土曜日・日曜日）、祝日、年末年始、有給休暇、リフレッシュ休暇（最長３日間）、その他特別休暇</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-list-ol fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">選考</h4>
                                                    <p class="text-left text-muted">書類選考<i class="fa fa-caret-right fa-fw"></i>面接<i class="fa fa-caret-right fa-fw"></i>適正テスト</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-thumbs-o-up fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">応募方法</h4>
                                                    <p class="text-left text-muted">下のボタンから応募ページへアクセスしてください。</p>
                                                    <p class="text-left text-muted"><a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 応募</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-envelope-o fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">お問い合わせ</h4>
                                                    <p class="text-left text-muted">下のボタンからお問い合わせページへアクセスしてください。</p>
                                                    <p class="text-left text-muted"><a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> お問い合わせ</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="career_tab">
                                <h3 class="page-header">中途採用</h3>
                                <div class="row row-10">
                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-briefcase fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">仕事内容</h4>
                                                    <p class="text-left text-muted">
                                                        <ol class="text-left">
                                                            <li>運用技術者：運用オペレーター、ヘルプデスク</li>
                                                            <li>ネットワーク技術者：ネットワーク設計、構築、保守、監視運用</li>
                                                            <li>開発技術者：業務アプリ系、制御系、DB系等</li>
                                                        </ol>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-shield fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">資格</h4>
                                                    <p class="text-left text-muted">
                                                        <ol class="text-left">
                                                            <li><span class="lead">未経験者可</span class="lead">
                                                                <ul class="list-unstyled">
                                                                    <li>運用オペレーター：汎用機、オープン系運用経験者歓迎</li>
                                                                    <li>ヘルプデスク：コールセンタや営業支援などの経験者歓迎</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="lead">未経験者可</span class="lead">
                                                                <ul class="list-unstyled">
                                                                    <li>ネットワーク技術の知識、Ciscoルータのコンフィグ設計・設定投入、リモートメンテナンス操作等の経験者、CCNA取得者歓迎</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span class="lead">アプリケーション開発経験者</span class="lead">
                                                                <ul class="list-unstyled">
                                                                    <li>C/C++/Java/XML 他言語経験者、Web系アプリケーション、ORACLEデータベース、チームリーダー経験者歓迎</li>
                                                                </ul>
                                                            </li>
                                                        </ol>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-briefcase fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">仕事内容</h4>
                                                    <p class="text-left text-muted">システムエンジニア、プログラマ、ネットワークエンジニア、システム運用オペレータ、ヘルプデスク（一般事務）</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-money fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">給与</h4>
                                                    <p class="text-left text-muted">初任給（基本給のみ各手当含まず）</p>
                                                    <p class="text-left text-muted">専門・高専・短大卒：基本給１７万３千円</p>
                                                    <p class="text-left text-muted">大卒：基本給１８万３千円</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-map-marker fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">勤務地</h4>
                                                    <p class="text-left text-muted">東京都内および近郊</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-clock-o fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">勤務時間</h4>
                                                    <p class="text-left text-muted">平日9:00〜18:00</p>
                                                    <p class="text-left text-muted">シフト勤務の場合（例）17:00〜翌日午前10:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-gift fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">待遇</h4>
                                                    <p class="text-left text-muted">諸手当：通勤手当（全額）、家族手当、住宅手当、役職手当、夜勤手当、他</p>
                                                    <p class="text-left text-muted">昇給：年１回（４月）</p>
                                                    <p class="text-left text-muted">賞与：年３回（７月、１２月、期末）</p>
                                                    <p class="text-left text-muted">福利厚生：各種社会保険、東京都情報サービス産業健康保険組合加盟、合格祝金制度(情報処理試験) 、通信教育奨励制度</p>
                                                    <p class="text-left text-muted">その他：各種同好会、社員旅行、健康保険組合保養所、提携施設の利用他</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-sun-o fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">休日休暇</h4>
                                                    <p class="text-left text-muted">週休２日制（土曜日・日曜日）、祝日、年末年始、有給休暇、リフレッシュ休暇（最長３日間）、その他特別休暇</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-list-ol fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">選考</h4>
                                                    <p class="text-left text-muted">書類選考<i class="fa fa-caret-right fa-fw"></i>面接<i class="fa fa-caret-right fa-fw"></i>適正テスト</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-thumbs-o-up fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">応募方法</h4>
                                                    <p class="text-left text-muted">下のボタンから応募ページへアクセスしてください。</p>
                                                    <p class="text-left text-muted"><a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> 応募</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 margin0">
                                        <div class="well margin0">
                                            <div class="media">
                                                <div class="media-left media-top">
                                                    <i class="media-object fa fa-envelope-o fa-fw fa-4x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading text-left page-header">お問い合わせ</h4>
                                                    <p class="text-left text-muted">下のボタンからお問い合わせページへアクセスしてください。</p>
                                                    <p class="text-left text-muted"><a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> お問い合わせ</a></p>
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

        $('#ap-menu a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
    </script>
</body>
</html>