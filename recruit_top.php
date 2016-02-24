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
    <header id="top" class="header rec_top">
        <div class="text-vertical-center container-fluid" style="text-align:left;">
            <h1 class="">RYUKOSHA NETWARE Inc.</h1>
            <h2 class="type"><del class="red"><strong>RECRUIT</strong></del><span class="purple">採用情報</span><br>
            Making the <del class="red">未来</del>future.<br><del class="def">自分の未</del><small class="def">自分の未来をつくる。</small>
            </h2>
            <br>
            <a href="#" class="btn btn-dark btn-lg chaffle" data-lang="en"><i class="fa fa-arrow-down"></i> 新卒</a>
            <br>
            <a href="#" class="btn btn-dark btn-lg chaffle" data-lang="en"><i class="fa fa-arrow-down"></i> 中途</a>
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
    <section>
        <div class="container" id="new_career_top">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h2 class="font-type-1">RECRUIT</h2>
                    <hr class="medium">
                    <p class="small font-type-1">採用情報</p>
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" id="recruit-menu" role="tablist">
                            <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">新卒</a></li>
                            <li role="presentation"><a href="#career" aria-controls="career" role="tab" data-toggle="tab">中途</a></li>
                            <li role="presentation" class="active"><a href="#top-messages" aria-controls="top-messages" role="tab" data-toggle="tab">代表メッセージ</a></li>
                            <li role="presentation"><a href="#interview" aria-controls="interview" role="tab" data-toggle="tab">インタビュー</a></li>
                            <li role="presentation"><a href="#entry" aria-controls="entry" role="tab" data-toggle="tab">応募</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="new" style="margin-top:10px;">
                                <div class="row row-10">
                                    <div class="col-md-12">
                                        <img src="http://placehold.jp/1800x150.png" class="img-responsive rectop_img" alt="採用">
                                    </div>
                                    <h2 class="page-header">新卒</h2>
                                    <p>これからのＩＴ業界にはあなたの力が必要です！スピードとパワーを誇る竜巧社ネットウエアで共に働いてみませんか！</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="career" style="margin-top:10px;">
                                <div class="col-md-12">
                                        <img src="http://placehold.jp/1800x150.png" class="img-responsive rectop_img" alt="採用">
                                    </div>
                                <div class="row row-10">
                                    <h2 class="page-header">中途</h2>
                                    <p>経験者なら夢をかなえるフィールドが揃っています。未経験者の方でもＩＴスペシャリストへの道が開けます。</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade active in" id="top-messages" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">代表メッセージ</h2>
                                    <p class="lead">「これからのIT時代に、システム技術者となる人材を世に送り出そう」</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="interview" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">インタビュー</h2>
                                    <p>社員のインタビューや仕事の紹介をまとめています。</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="entry" style="margin-top:10px;">
                                <div class="row row-10">
                                    <h2 class="page-header">エントリー・コンタクト</h2>
                                    <p>気になったらすぐに応募ください！あなたの第一歩をサポート！</p>
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Checkbox
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                                                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Radios</label>
                                                <div class="col-lg-10">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                            Option one is this
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                            Option two can be something else
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="select" class="col-lg-2 control-label">Selects</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" id="select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    <br>
                                                    <select multiple="" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-10 col-lg-offset-2">
                                                    <button type="reset" class="btn btn-default">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
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