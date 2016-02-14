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


//デフォルト
function tmp_header_meta(){
	echo<<<EOT
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/ryu_custom.css">
EOT;
}

function tmp_footer_js(){
	echo<<<EOT
	<script src="./js/jquery-2.2.0.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
EOT;
}

?>