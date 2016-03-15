<?php
//default PHP


//固定文字列
//CONST関数が使えないため（PHP4.4.7）すべて変数で定義します。
//DEFINEは使いたくない。（呼び出しがめんどくさい）

//大文字で定義します。


// ================================================
// 	デフォルトテンプレート
// ================================================



// file --> def.php



// ================================================
// 	デフォルトテンプレート
// ================================================


//タイトル関連
$DEF_title = '竜巧社ネットウエア';
$title_main = $DEF_title.' TOP';


// パンくずリスト（breadcrumbs）
function breadcrumbs($int0_3,$name1,$name1_url,$name2,$name2_url,$name3,$name3_url){

	if ($int0_3 == 0) {
		echo<<<EOT
			<div class="btn-group btn-breadcrumb">
				<a href="./index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
			</div>
EOT;
	}

	if ($int0_3 == 1) {
		echo<<<EOT
			<div class="btn-group btn-breadcrumb">
				<a href="./index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
	            <a href="javascript:void(0);" class="btn btn-default disabled">{$name1}</a>
	        </div>
EOT;
	}

	if ($int0_3 == 2) {
		echo<<<EOT
			<div class="btn-group btn-breadcrumb">
				<a href="./index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
	            <a href="{$name1_url}" class="btn btn-default">{$name1}</a>
	            <a href="javascript:void(0);" class="btn btn-default disabled">{$name2}</a>
	        </div>
EOT;
	}

	if ($int0_3 == 3) {
		echo<<<EOT
			<div class="btn-group btn-breadcrumb">
				<a href="./index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
	            <a href="{$name1_url}" class="btn btn-default">{$name1}</a>
	            <a href="{$name2_url}" class="btn btn-default">{$name2}</a>
	            <a href="javascript:void(0);" class="btn btn-default disabled">{$name3}</a>
	        </div>
EOT;
	}

	if($int0_3 > 3){
		echo<<<EOT
			<div class="btn-group btn-breadcrumb">
				<a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i>NONE</a>
			</div>
EOT;
	}
}


//デフォルト
function tmp_header_meta(){
	global $DEF_title;
	echo<<<EOT
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="./favicon.ico">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="株式会社 竜巧社ネットウエア">
    <link rel="apple-touch-icon-precomposed" href="./apple-touch-icon-precomposed.png">

	<meta name=description content="株式会社 竜巧社ネットウエアのホームページです。採用情報（新卒・中途）を初め社員インタビュー内容会社案内、アクセス、エントリー・お問合せ、様々な情報を掲載しております。">
	<title>{$DEF_title}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" href="./css/ryu_custom.css">
EOT;
}

function tmp_footer_js(){
	echo<<<EOT
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="./js/jquery.inview.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.bgswitcher.js"></script>
	<script src="./js/jquery.chaffle.min.js"></script>
	<script src="./js/ryu_custom.js"></script>
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-39858353-1', 'auto');
		  ga('send', 'pageview');
	</script>
EOT;
}

//ナビバー
function navbar(){
	echo<<<EOT
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand font-type-1" href="javascript:void(0);">RYUKOSHA NETWARE</a>
			</div>
		</div>
	</nav>
EOT;
}

function defnavbar(){
	echo<<<EOT
	<!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i> MENU</a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="javascript:void(0);"  onclick = $("#menu-close").click(); >竜巧社ネットウエア</a>
            </li>
            <li>
                <a href="./index.php" onclick = $("#menu-close").click(); ><i class="fa fa-home"></i> トップ</a>
            </li>
            <li>
                <a href="./aboutus.php" onclick = $("#menu-close").click(); ><i class="fa fa-leanpub"></i> 会社案内</a>
                <ul class="list-unstyled">
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./managementphilosophy.php"><i class="fa fa-caret-right"></i> 経営理念</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./organizationalchart.php"><i class="fa fa-caret-right"></i> 組織図</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./history.php"><i class="fa fa-caret-right"></i> 沿革</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./companyprofile.php"><i class="fa fa-caret-right"></i> 会社概要</a></li>
                </ul>
            </li>
            <li>
                <a href="./businessguide.php" onclick = $("#menu-close").click(); ><i class="fa fa-list-alt"></i> 事業案内</a>
                <ul class="list-unstyled">
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./businessguide.php#b1"><i class="fa fa-caret-right"></i> システム基盤部</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./businessguide.php#b2"><i class="fa fa-caret-right"></i> システム開発部</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./businessguide.php#b3"><i class="fa fa-caret-right"></i> システム運用部</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./businessguide.php#b4"><i class="fa fa-caret-right"></i> サービスサポート部</a></li>
                    <!-- <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./businessguide.php#b5"><i class="fa fa-caret-right"></i> 営業部</a></li> -->
                </ul>
            </li>
            <li>
                <a href="./recruit_top.php" onclick = $("#menu-close").click(); ><i class="fa fa-thumbs-o-up"></i> 採用情報</a>
                <ul class="list-unstyled">
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./interview_top.php"><i class="fa fa-caret-right"></i> 社員の声</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./traininganddevelopment.php"><i class="fa fa-caret-right"></i> 教育研修</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./new.php"><i class="fa fa-caret-right"></i> 新卒採用</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./midcareer.php"><i class="fa fa-caret-right"></i> 中途採用</a></li>
                    <li style="text-indent:3em; color:#999;"><a onclick=$("#menu-close").click(); href="./requirements.php"><i class="fa fa-caret-right"></i> 募集要項</a></li>
                </ul>
            </li>
            <li>
                <a href="./access.php" onclick = $("#menu-close").click(); ><i class="fa fa-map-signs"></i> アクセス・コンタクト</a>
            </li>
        </ul>
    </nav>
EOT;
}

//フッター

function tmp_footer(){
	echo<<<EOT
	<footer class="footer bg-footer">
        <div class="container-fluid">
            <div class="row row-10">
				<div class="col-sm-12 text-center">
						<h2 class="font-type-1" id="sitemap">SITE MAP</h2>
						<hr class="medium">
						<p class="small font-type-1">サイトマップ</p>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">会社案内</h3>
							<ul class="list-unstyled footerul contents">
								<li><a  href="./managementphilosophy.php"><i class="fa fa-angle-double-right"></i> 経営理念</a></li>
								<li><a  href="./organizationalchart.php"><i class="fa fa-angle-double-right"></i> 組織図</a></li>
								<li><a  href="./history.php"><i class="fa fa-angle-double-right"></i> 沿革</a></li>
								<li><a  href="./companyprofile.php"><i class="fa fa-angle-double-right"></i> 会社案内</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">事業案内</h3>
							<ul class="list-unstyled footerul contents">
								<li><a  href="./businessguide.php#b1"><i class="fa fa-angle-double-right"></i> システム基盤部</a></li>
								<li><a  href="./businessguide.php#b2"><i class="fa fa-angle-double-right"></i> システム開発部</a></li>
								<li><a  href="./businessguide.php#b3"><i class="fa fa-angle-double-right"></i> システム運用部</a></li>
								<li><a  href="./businessguide.php#b4"><i class="fa fa-angle-double-right"></i> サービスサポート部</a></li>
								<!-- <li><a  href="./businessguide.php#b5"><i class="fa fa-angle-double-right"></i> 営業部</a></li> -->
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">採用案内</h3>
							<ul class="list-unstyled footerul contents">
								<li><a  href="./recruit_top.php"><i class="fa fa-angle-double-right"></i> 採用トップ</a></li>
								<li><a  href="./new.php"><i class="fa fa-angle-double-right"></i> 新卒採用</a></li>
								<li><a  href="./midcareer.php"><i class="fa fa-angle-double-right"></i> 中途採用</a></li>
								<li><a  href="./interview_top.php"><i class="fa fa-angle-double-right"></i> インタビュー</a></li>
								<li><a  href="./requirements.php"><i class="fa fa-angle-double-right"></i> 各募集要項</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">アクセス・コンタクト</h3>
							<ul class="list-unstyled footerul contents">
								<li><a  href="./access.php"><i class="fa fa-angle-double-right"></i> お問い合わせ</a></li>
								<li><a  href="./access.php"><i class="fa fa-angle-double-right"></i> エントリー（応募）</a></li>
								<li><a  href="./access.php"><i class="fa fa-angle-double-right"></i> メール（mail）</a></li>
								<li><a  href="./access.php"><i class="fa fa-angle-double-right"></i> 電話（TEL）</a></li>
								<li><a  href="./access.php"><i class="fa fa-angle-double-right"></i> 所在地・地図</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 footerdiv"></div>
				<div class="col-sm-8">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">セキュリティ</h3>
							<ul class="list-unstyled footerul list-inline contents">
								<li>
									<a href="http://privacymark.jp/"><img src="./img/p.jpg" class="img-responsive footer-img" alt="Pマーク　個人情報保護方針"></a>
									<a href="./privacy.php"><i class="fa fa-angle-double-right"></i> 個人情報保護方針</a>
								</li>
								<li>
									<a href="./isms.php"><img src="./img/isms.png" class="img-responsive footer-img" alt="ISMS　情報セキュリティ基本方針"></a>
									<a href="./securitypolicy.php"><i class="fa fa-angle-double-right"></i> 情報セキュリティ方針</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">親会社（Parent company）</h3>
							<ul class="list-unstyled footerul list-inline contents">
								<li>
									<a href="http://www.iij.ad.jp/"><img src="./img/IIJLogo.jpg" class="img-responsive footer-img" alt="IIJ　株式会社インターネットイニシアティブ"></a>
									<a href="http://www.iij.ad.jp/"><i class="fa fa-angle-double-right"></i> Internet Initiative Japan Inc. 株式会社インターネットイニシアティブ</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-8">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header"><i class="fa fa-lock"></i> 社員限定</h3>
							<ul class="list-unstyled footerul contents">
								<li><a href="./staff_only/login.php/"><i class="fa fa-angle-double-right"></i> 社員限定サイト</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-4" itemscope itemtype="http://www.ryukoshanw.co.jp/">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">弊社（ロゴ）</h3>
							<ul class="list-unstyled footerul contents">
								<img src="./img/rnw_logo_W4.jpg" class="img-responsive footer-img-logo" alt="RYUKOSHA NETWARE Inc．株式会社 竜巧社ネットウエア">
								<a href="#"><span itemprop="name">株式会社 竜巧社ネットウエア</span></a>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 footerdiv"></div>
				<div class="col-sm-12 text-center">
					Copyright (C) 2005-2015 RYUKOSHA NETWARE Inc. All Rights Reserved.
				</div>
            </div>
        </div>
    </footer>
EOT;
}

//リクルートページメニュー

function tmp_rec_nav(){
	echo<<<EOT
	<aside>
        <div class="container" id="rec_top_links">
            <div class="row row-0 text-center">
                <div class="col-lg-12">
                    <p class="small"><i class="fa fa-link"></i> LINKS</p>
                </div>
                <div class="col-xs-2">
                    <div class="list-group">
                        <a href="./interview_top.php" class="list-group-item" data-toggle="tooltip" data-placement="top" title="インタビューや社員の一日を載せています！">
                            <h5 class="list-group-item-heading"><i class="fa fa-comments-o"></i></h5>
                            <p class="list-group-item-text small text-muted">社員の声</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group">
                        <a href="./traininganddevelopment.php" class="list-group-item" data-toggle="tooltip" data-placement="top" title="弊社の教育や研修について概要を載せています！">
                            <h5 class="list-group-item-heading"><i class="fa fa-laptop fa-fw"></i></h5>
                            <p class="list-group-item-text small text-muted">教育研修</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group">
                        <a href="./new.php" class="list-group-item" data-toggle="tooltip" data-placement="top" title="新卒採用のリンクです！">
                            <h5 class="list-group-item-heading"><i class="fa fa-thumbs-o-up"></i></h5>
                            <p class="list-group-item-text small text-muted">新卒採用</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group">
                        <a href="./midcareer.php" class="list-group-item" data-toggle="tooltip" data-placement="top" title="中途採用のリンクです！">
                            <h5 class="list-group-item-heading"><i class="fa fa-thumbs-up"></i></h5>
                            <p class="list-group-item-text small text-muted">中途採用</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group">
                        <a href="./requirements.php" class="list-group-item" data-toggle="tooltip" data-placement="top" title="新卒・中途の募集要項です！">
                            <h5 class="list-group-item-heading"><i class="fa fa-list-alt"></i></h5>
                            <p class="list-group-item-text small text-muted">募集要項</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group">
                        <a href="./access.php" class="list-group-item" data-toggle="tooltip" data-placement="top" title="このホームページからでも応募可能です！">
                            <h5 class="list-group-item-heading"><i class="fa fa-paper-plane-o"></i></h5>
                            <p class="list-group-item-text small text-muted">応募する</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12">
	                <a href="./recruit_top.php" class="btn btn-dark btn-xs">
	                	<i class="fa fa-caret-square-o-left"></i> 採用TOP
	                </a>
                </div>
            </div>
        </div>
    </aside>
EOT;
}






?>