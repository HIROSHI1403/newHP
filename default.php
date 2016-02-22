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
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >竜巧社ネットウエア</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>
EOT;
}

//フッター

function tmp_footer(){
	echo<<<EOT
	<footer>
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
							<h3 class="footerh">会社案内</h3>
							<ul class="list-unstyled footerul">
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Regular Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Test & Discussion</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Fast Track T & D</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh">事業案内</h3>
							<ul class="list-unstyled footerul">
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Regular Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Test & Discussion</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Fast Track T & D</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh">採用案内</h3>
							<ul class="list-unstyled footerul">
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Regular Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Test & Discussion</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Fast Track T & D</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li class="">
							<h3 class="footerh">アクセス・コンタクト</h3>
							<ul class="list-unstyled footerul">
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Regular Batch</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Test & Discussion</a></li>
								<li><a  href="#"><i class="fa fa-angle-double-right"></i> Fast Track T & D</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					
				</div>
				<div class="col-sm-4">
					
				</div>
				<div class="col-sm-4">
					
				</div>
				<div class="col-sm-12 text-center">
					Copyright (C) 2005-2015 RYUKOSHA NETWARE Inc. All Rights Reserved.
				</div>
            </div>
        </div>
    </footer>
EOT;
}

?>