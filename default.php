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
                <a href="#" onclick = $("#menu-close").click(); ><i class="fa fa-home"></i> トップ</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); ><i class="fa fa-leanpub"></i> 会社案内</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); ><i class="fa fa-list-alt"></i> 事業案内</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); ><i class="fa fa-thumbs-o-up"></i> 採用情報</a>
            </li>
            <li>
                <a href="#" onclick = $("#menu-close").click(); ><i class="fa fa-map-signs"></i> アクセス・コンタクト</a>
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
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 経営理念</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 組織図</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 沿革</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 会社案内</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">事業案内</h3>
							<ul class="list-unstyled footerul contents">
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> システム基盤部</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> システム開発部</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> システム運用部</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> サービスサポート部</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">採用案内</h3>
							<ul class="list-unstyled footerul contents">
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 採用トップ</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 新卒採用</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 中途採用</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> トップメッセージ</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> インタビュー</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 募集要項</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 特集・特記事項</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">アクセス・コンタクト</h3>
							<ul class="list-unstyled footerul contents">
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> お問い合わせ</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> エントリー（応募）</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> メール（mail）</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 電話（TEL）</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 所在地・地図</a></li>
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
									<a href="#"><img src="./img/p.jpg" class="img-responsive footer-img" alt="Pマーク　個人情報保護方針"></a>
									<a  href="#"><i class="fa fa-angle-double-right"></i> 個人情報保護方針</a>
								</li>
								<li>
									<a href="#"><img src="./img/isms.png" class="img-responsive footer-img" alt="ISMS　情報セキュリティ基本方針"></a>
									<a  href="#"><i class="fa fa-angle-double-right"></i> 情報セキュリティ方針</a>
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
									<a href="#"><img src="./img/IIJLogo.jpg" class="img-responsive footer-img" alt="IIJ　株式会社インターネットイニシアティブ"></a>
									<a  href="#"><i class="fa fa-angle-double-right"></i> Internet Initiative Japan Inc. 株式会社インターネットイニシアティブ</a>
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
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> 社員限定サイト</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh page-header">弊社LOGO</h3>
							<ul class="list-unstyled footerul contents">
								<img src="./img/rnw_logo_W4.jpg" class="img-responsive footer-img-logo" alt="RYUKOSHA NETWARE Inc．株式会社 竜巧社ネットウエア">
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

?>