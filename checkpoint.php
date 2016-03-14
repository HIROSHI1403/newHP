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
                <?php breadcrumbs(2,'アクセス','./access.php','個人情報の取り扱いについて','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="ch_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">個人情報の取り扱いについて</h1>
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
                    <div class="col-sm-12 font-type-1 text-center">
                        <p class="text-muted">下記の項目にご同意いただけましたか？</p>
                        <div class="btn-group btn-group-justified lead">
                            <a href="https://ws.formzu.net/dist/S41011385/" class="btn btn-dark"><i class="fa fa-fw fa-check-square-o"></i> 同意する</a>
                            <a href="./access.php" class="btn btn-wire"><i class="fa fa-fw fa-times"></i> 同意しない</a>
                        </div>
                    </div>

                    <div class="col-sm-12 font-type-1 text-left">
                        <h2>お問合せ時・採用選考時について</h2>
                        <p class="">株式会社竜巧社ネットウエアでは、お問合せ時・採用選考時に貴方からご提供いただく個人情報を下記の通り取扱わせていただきます。なお、個人情報をご提供いただけない場合は、選考の対象外となる場合がありますのでご了承ください。情報を入力される前に下記内容に同意された場合にのみ、情報入力画面に進むことができます。同意される場合は、画面最下行の「同意する」ボタンをクリックしてお進みください。 なお、エントリー画面は、ＳＳＬ暗号化通信によって保護されています。</p>
                        <ol>
                            <li class="list-padding10">利用目的
                                <ul class="list-unstyled">
                                    <li>履歴書、職務経歴書などの採用応募者の個人情報は、採用応募者との連絡及び採用選考に利用し、それ以外の目的で利用することは一切ありません。</li>
                                </ul>
                            </li>
                            <li class="list-padding10">個人情報の取扱い
                                <ul class="list-unstyled">
                                    <li>採用応募者の個人情報は、当社の責任で厳重に管理致します。辞退・不採用の場合、原則として履歴書・職務経歴書などはご本人に返却致します。当方での廃棄（シュレッダ）をご希望の場合は、お申し付けください。</li>
                                </ul>
                            </li>
                            <li class="list-padding10">第三者への提供
                                <ul class="list-unstyled">
                                    <li>4.共同利用又は5.個人情報の取扱いの委託に該当する場合、法令で認められる場合を除き、ご本人の事前の同意なく、個人情報を第三者へ提供することはありません。</li>
                                </ul>
                            </li>
                            <li class="list-padding10">共同利用
                                <ul class="list-unstyled">
                                    <li>ご提供いただいた個人情報は、共同利用することはございません。</li>
                                </ul>
                            </li>
                            <li class="list-padding10">個人情報の取扱いの委託
                                <ul class="list-unstyled">
                                    <li>当社が定める水準を満たしている委託先に個人情報の取扱いを委託することがあります。委託先とは機密保持契約を交わし、委託する個人情報の安全管理が図られるよう、委託先に対する必要、かつ、適切な監督を行います。</li>
                                </ul>
                            </li>
                            <li class="list-padding10">開示等手続き
                                <ul class="list-unstyled">
                                    <li>ご本人より個人情報の利用目的の通知、開示、個人情報の内容が事実と異なるときの訂正・追加又は削除、個人情報の利用の停止、消去又は第三者への提供の停止（以下「開示等」という）を求められた場合には、適切、かつ迅速に対応致します。開示等の請求は下記個人情報相談窓口までお申し付けください。</li>
                                </ul>
                            </li>
                            <li class="list-padding10">苦情及び相談
                                <ul class="list-unstyled">
                                    <li>個人情報のお取扱い等に関する苦情及びご相談につきましては、適切、かつ、迅速に対応致します。下記個人情報相談窓口までお申し付けください。
                                        <ul class="list-unstyled text-center point-list">
                                            <li>株式会社　竜巧社ネットウエア</li>
                                            <li>個人情報相談窓口</li>
                                            <li>TEL：03-5159-0600</li>
                                            <li>E-Mail <a href="mailto:privacy@ryukoshanw.co.jp">privacy@ryukoshanw.co.jp</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-padding10">管理者代理
                                <ul class="list-unstyled">
                                    <li>MS事務局 TEL：03-5159-0600</li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                    <div class="col-sm-12 font-type-1 text-center">
                        <p class="text-muted">以上の項目にご同意いただけましたか？</p>
                        <div class="btn-group btn-group-justified lead">
                            <a href="https://ws.formzu.net/dist/S41011385/" class="btn btn-dark"><i class="fa fa-fw fa-check-square-o"></i> 同意する</a>
                            <a href="./access.php" class="btn btn-wire"><i class="fa fa-fw fa-times"></i> 同意しない</a>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <a href="#" onclick="javascript:window.history.back(-1);return false;" class="btn btn-dark"><i class="fa fa-reply"></i> 戻る</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

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