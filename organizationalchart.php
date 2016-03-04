<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
    <link rel="stylesheet" type="text/css" href="./css/ryu_custom_rec.css">
    <style>

   /* Varaibles - config */
/* SCSS*/
body {
  background: #F5EEC9;
}

.content {
  font-family: Verdana;
  font-size: 14px;
  position: relative;
}
.content * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.org-chart {
  display: block;
  clear: both;
  margin-bottom: 30px;
  position: relative;
  /**
  * For IE 6/7 only
  * Include this rule to trigger hasLayout and contain floats.
  */
  /* Box colors */
  /* 1 column */
  /* 2 column */
  /* 3 column */
  /* DEPARTMENTS COLUMNs */
}
.org-chart.cf:before, .org-chart.cf:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}
.org-chart.cf:after {
  clear: both;
}
.org-chart.cf {
  *zoom: 1;
}
.org-chart ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
.org-chart ul li {
  position: relative;
}
.org-chart ul li span {
  display: block;
  border: 3px solid orange;
  text-align: center;
  overflow: hidden;
  text-decoration: none;
  color: black;
  font-size: 12px;
  box-shadow: 4px 4px 9px -4px rgba(0, 0, 0, 0.4);
  -webkit-transition: all linear .1s;
  -moz-transition: all linear .1s;
  transition: all linear .1s;
  background: #92D4A8;
  padding: 4px;
}
.org-chart .lvl-b {
  background: green;
  color: #92D4A8;
}
.org-chart .board {
  width: 70%;
  margin: 0 auto;
  display: block;
  position: relative;
}
.org-chart .board:before {
  content: "";
  display: block;
  position: absolute;
  height: 600px;
  width: 0px;
  border-left: 2px solid orange;
  margin-left: 49%;
  top: 20px;
}
.org-chart ul.columnOne {
  height: 90px;
  position: relative;
  width: 100%;
  display: block;
  clear: both;
}
.org-chart ul.columnOne li {
  width: 30%;
  margin: 0px auto;
  top: 20px;
}
.org-chart ul.columnTwo {
  position: relative;
  width: 100%;
  display: block;
  height: 90px;
  clear: both;
}
.org-chart ul.columnTwo li:first-child {
  width: 30%;
  float: left;
}
.org-chart ul.columnTwo li {
  width: 30%;
  float: right;
}
.org-chart ul.columnTwo:before {
  content: "";
  display: block;
  position: relative;
  width: 80%;
  height: 10px;
  border-top: 2px solid orange;
  margin: 0 auto;
  top: 40px;
}
.org-chart ul.columnThree {
  position: relative;
  width: 100%;
  display: block;
  clear: both;
}
.org-chart ul.columnThree li:first-child {
  width: 30%;
  float: left;
  margin-left: 0;
}
.org-chart ul.columnThree li {
  width: 30%;
  margin-left: 5%;
  float: left;
}
.org-chart ul.columnThree li:last-child {
  width: 30%;
  float: right;
  margin-left: 0;
}
.org-chart ul.columnThree:before {
  content: "";
  display: block;
  position: relative;
  width: 80%;
  height: 10px;
  border-top: 2px solid orange;
  margin: 0 auto;
  top: 40px;
}
.org-chart .departments {
  width: 100%;
  display: block;
  clear: both;
}
.org-chart .departments:before {
  content: "";
  display: block;
  width: 85%;
  height: 22px;
  border-top: 2px solid orange;
  border-left: 2px solid orange;
  border-right: 2px solid orange;
  margin: 0 auto;
  top: 0px;
}
.org-chart .department {
  border-left: 2px solid orange;
  width: 13.2%;
  float: left;
  margin: 0px 4px;
}
.org-chart .department:after {
  content: "";
  position: absolute;
  display: block;
  width: 10px;
  height: 22px;
  border-left: 2px solid orange;
  left: 50%;
  top: -22px;
}
.org-chart .department:first-child:after {
  display: none;
}
.org-chart .department:last-child:after {
  display: none;
}
.org-chart .department.central {
  background: #F5EEC9;
}
.org-chart .department.central:after {
  display: none;
}
.org-chart .department span {
  border-left: 1px solid orange;
}
.org-chart .department li {
  padding-left: 25px;
  border-bottom: 2px solid orange;
  height: 80px;
}
.org-chart .department li span {
  background: #92D4A8;
  top: 38px;
  position: absolute;
  z-index: 1;
  width: 95%;
  height: auto;
  vertical-align: middle;
  right: 0px;
  line-height: 14px;
  border: 3px solid orange;
}
.org-chart .department .sections {
  margin-top: -20px;
}

/* MEDIA QUERIES */
@media all and (max-width: 767px) {
  .org-chart .board {
    margin: 0px;
    width: 100%;
  }
  .org-chart .departments:before {
    border: none;
  }
  .org-chart .department {
    float: none;
    width: 100%;
    margin-left: 0;
    background: #F5EEC9;
    margin-bottom: 40px;
  }
  .org-chart .department:before {
    content: "";
    display: block;
    position: absolute;
    width: 15px;
    height: 60px;
    border-left: 2px solid orange;
    z-index: 1;
    top: -45px;
    left: 0%;
    margin-left: -2px;
  }
  .org-chart .department:after {
    display: none;
  }
  .org-chart .department:first-child:before {
    display: none;
  }
}
/*--------- TO BE REMOVED FROM YOUR CSS --*/
/* this is just to display the behaviour of responsive on codepen */
.responsive-content {
  width: 767px;
  margin: 0px auto;
}
.responsive-content .org-chart .board {
  margin: 0px;
  width: 100%;
}
.responsive-content .org-chart .departments:before {
  border: none;
}
.responsive-content .org-chart .department {
  float: none;
  width: 100%;
  margin-left: 0;
  background: #F5EEC9;
  margin-bottom: 40px;
}
.responsive-content .org-chart .department:before {
  content: "";
  display: block;
  position: absolute;
  width: 15px;
  height: 60px;
  border-left: 2px solid orange;
  z-index: 1;
  top: -45px;
  left: 0%;
  margin-left: -2px;
}
.responsive-content .org-chart .department:after {
  display: none;
}
.responsive-content .org-chart .department:first-child:before {
  display: none;
}


    </style>
</head>
<body>
    <?php
    // defnavbar(); 
    ?>
	<!-- Header -->
    <section id="breadcrumb_nav">
        <!-- <div class="container-fluid"> -->
            <div class="row row-10">
                <?php breadcrumbs(1,'会社案内','./aboutus.php','組織図','','',''); ?>
            </div>
        <!-- </div> -->
    </section>
    <section id="oc_top" class="padding-top50">
        <div class="container">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">ORGANIZATIONAL CHART</h1>
                    <p class="">組織図</p>
                    <a href="#" onclick="javascript:window.history.back(-1);return false;" class="btn btn-lg btn-dark"><i class="fa fa-reply"></i> 戻る</a>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="container" id="oc_top_message">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <h1 class="" id="">社内組織図を掲載しています</h1>
                    <hr class="large">
                </div>
            </div>
        </div>
    </section> -->

    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="content">
                <figure class="org-chart cf">
                    <div class="board ">
                        <ul class="columnOne">
                            <li>
                                <span>
                                    <br>
                                    <strong>代表取締役</strong>
                                    <br>
                                    <br>
                                </span>
                            </li>
                        </ul>
                        <ul class="columnOne">
                            <li>
                                <span>
                                    <br>
                                    <strong>取締役</strong>
                                    <br>
                                    <br>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <ul class="departments ">
                        <li class="department ">
                            <span class="lvl-b">
                                <br>
                                <strong>監査役</strong>
                                <br>
                                <br>
                            </span>
                            <ul class="sections">
                                <li class="section">
                                    <span>
                                        <br>
                                        <strong>事業推進本部</strong>
                                        <br>
                                        <br>
                                    </span>
                                </li>
                                <li class="section">
                                    <span>
                                        <br>
                                        <strong>管理本部</strong>
                                        <br>
                                        <br>
                                    </span>
                                </li>
                                <li class="section">
                                    <span>
                                        <br>
                                        <strong>Position Name</strong>
                                        <br>Name Surname
                                        <br>BB
                                    </span>
                                </li>
                                <li class="section">
                                    <span>
                                        <br>
                                        <strong>Position Name</strong>
                                        <br>Name Surname
                                        <br>BB
                                    </span>
                                </li>
                                <li class="section">
                                    <span>
                                        <br>
                                        <strong>Position Name</strong>
                                        <br>Name Surname
                                        <br>BB
                                    </span>
                                </li>
                            </ul>
                        </ul>
            </li>
            </ul>
            </figure>
            <p>
            This is an updated version of "Responsive Organization Chart" from <a href="http://codepen.io/siiron/">Ronny Siikaluoma</a>'s Pen <a href="http://codepen.io/siiron/pen/aLkdE/">Responsive Organization Chart</a>.
            </p>
            </div>

        </div>
    </section>


    <!-- <aside class="callout2">
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
            <a href="javascript:(0);" class="btn btn-dark btn-lg chaffle" data-lang="ja-hiragana"><i class="fa fa-angle-right"></i> フォームへ</a>
        </div>
   </aside> -->

    <?php
    // tmp_footer(); 
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