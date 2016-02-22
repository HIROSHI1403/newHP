<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
    <style>
    body{
        font-family: 'logotype' !important;
    }
    .purple{
        background:purple;
        color:#FFF;
    }
    .red{
        background:red;
        color:#FFF;
    }
    span.t-caret{
        background:#555;

    }
    </style>
</head>
<body>
	<?php defnavbar(); ?>
	<!-- Header -->
    <header id="top" class="header rec_top">
        <div class="text-vertical-center container-fluid" style="text-align:left;">
            <h1 class="">RYUKOSHA NETWARE Inc.</h1>
            <h2 class="type"><del class="red"><strong>RECRUIT</strong></del><span class="purple"><u>採用情報</u></span><br>
            Making the future better and member together.<br>
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
        <div class="container-fluid">
            <div class="row row-0">
                <div class="col-lg-6">
                    <h2 class="" id=""><i class="fa fa-thumbs-o-up"></i> 新卒</h2>
                    <p class="lead " id="">どこまでも信頼出来る技術と柔軟性で世界を支えるソリューションを提供し続けます</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="" id=""><i class="fa fa-thumbs-o-up"></i> 中途</h2>
                    <p class="lead " id="">どこまでも信頼出来る技術と柔軟性で世界を支えるソリューションを提供し続けます</p>
                </div>
            </div>
        </div>
    </section>

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
    </script>
</body>
</html>