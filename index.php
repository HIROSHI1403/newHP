<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
</head>
<body>

	<!-- nav-bar -->

	<?php navbar() ?>

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://placehold.jp/1080x500.png" width="100%" alt="...">
				<div class="carousel-caption">
					<h3>TEXTTEXT</h3>
					<p>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
					<button type="button" class="btn btn-primary font-type-1">test button</button>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.jp/1080x500.png" width="100%" alt="...">
				<div class="carousel-caption">
					<h3>TEXTTEXT</h3>
					<p>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
					<button type="button" class="btn btn-primary font-type-1">test button</button>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.jp/1080x500.png" width="100%" alt="...">
				<div class="carousel-caption">
					<h3>TEXTTEXT</h3>
					<p>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
					<button type="button" class="btn btn-primary font-type-1">test button</button>
				</div>
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left glyphicon-menu-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right glyphicon-menu-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- base component -->

	<div class="container-fluid">
		<div class="row row-10">

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					MAIN
				</h1>
				<div class="btn-group btn-group-justified">
					<a href="javascript:void(0);" class="btn btn-primary btn-lg">
						<i class="fa fa-star-o fa-3x fa-spin"></i><br>
						Primary
					</a>
					<a href="javascript:void(0);" class="btn btn-primary btn-lg">
						<i class="fa fa-star-o fa-3x fa-spin"></i><br>
						Primary
					</a>
					<a href="javascript:void(0);" class="btn btn-primary btn-lg">
						<i class="fa fa-star-o fa-3x fa-spin"></i><br>
						Primary
					</a>
					<a href="javascript:void(0);" class="btn btn-primary btn-lg">
						<i class="fa fa-star-o fa-3x fa-spin"></i><br>
						Primary
					</a>
				</div>
			</div>

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					WHAT'S NEW
				</h1>
				<ul class="list-group">
					<li class="list-group-item">
						<h4>TEST TITLE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
					</li>
					<li class="list-group-item">
						<h4>TEST TITLE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
					</li>
					<li class="list-group-item">
						<h4>TEST TITLE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
					</li>
				</ul>
			</div>

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					SOCIAL
				</h1>
				<div class="row row-10">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-twitter-square"></i> Twitter</h3>
							</div>
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-facebook-official"></i> Facebook</h3>
							</div>
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					SITEMAP
				</h1>
			</div>

		</div>
	</div>
	<div class="row well footer-well">
		<div class="col-md-3">
			<h6 class="page-header">Lorem ipsum</h6>
			<ul>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h6 class="page-header">Lorem ipsum</h6>
			<ul>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h6 class="page-header">Lorem ipsum</h6>
			<ul>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h6 class="page-header">Lorem ipsum</h6>
			<ul>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			    <li>Lorem ipsum dolor sit amet</li>
			</ul>
		</div>
	</div>

	<?php tmp_footer_js(); ?>
</body>
</html>