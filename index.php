<?php require_once "./default.php" ?>

<!DOCTYPE html>
<html>
<head>
	<?php tmp_header_meta(); ?>
</head>
<body>

	<!-- nav-bar -->

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand font-type-1" href="javascript:void(0);">RYUKOSHA NEWWARE</a>
			</div>
		</div>
	</nav>

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
				<img src="http://placehold.jp/1080x315.png" width="100%" alt="...">
				<div class="carousel-caption">
					<h3>TEXTTEXT</h3>
					<p>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
					<button type="button" class="btn btn-primary font-type-1">test button</button>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.jp/1080x315.png" width="100%" alt="...">
				<div class="carousel-caption">
					<h3>TEXTTEXT</h3>
					<p>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
					<button type="button" class="btn btn-primary font-type-1">test button</button>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.jp/1080x315.png" width="100%" alt="...">
				<div class="carousel-caption">
					<h3>TEXTTEXT</h3>
					<p>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
					<button type="button" class="btn btn-primary font-type-1">test button</button>
				</div>
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- base component -->

		<div class="row row-10">

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					MAIN
				</h1>
				<div class="container-fluid">

				</div>
			</div>

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					WHAT'S NEW
				</h1>
				<div class="container-fluid">

				</div>
			</div>

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					SOCIAL
				</h1>
				<div class="container-fluid">

				</div>
			</div>

			<div class="col-md-12">
				<h1 class="page-header font-type-1">
					SITEMAP
				</h1>
				<div class="container-fluid">

				</div>
			</div>

		</div>


	<?php tmp_footer_js(); ?>
</body>
</html>