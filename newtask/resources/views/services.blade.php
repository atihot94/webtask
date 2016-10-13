<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>InLine Hosting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />

	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
@include('layouts._header');
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<br>
				<img class="img-circle" src="img/team2.jpg"  height="85px" width="85px">
				<h3 class="pageTitle">Teacher Nmae</h3>
			</div>
			<div class="col-lg-4">
				<br>
				<h3 class="pageTitle">Dept Nmae</h3>

			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container content">
<div class="row">
		<div class="col-sm-10">
			<br><br><br><br><br><br><br><br>
			<div class="col-md-4 info-blocks">
				<i class="icon-info-blocks fa fa-bell-o"></i>
				<div class="info-blocks-in">
					<br>
					<h3><a href="{{url("/portfolio")}}"><br>Mathmatics</h3>
				</div>
			</div>
			<div class="col-md-3 info-blocks">
				<i class="icon-info-blocks fa fa-hdd-o"></i>
				<div class="info-blocks-in">
					<br>
					<h3><a href="{{url("/portfolio")}}"><br>Chemistry</h3>
				</div>
			</div>
			<div class="col-md-3 info-blocks">
				<i class="icon-info-blocks fa fa-lightbulb-o"></i>
				<div class="info-blocks-in">
					<br>
					<h3><a href="{{url("/portfolio")}}"><br>Physics</h3>
				</div>
			</div>

			<!-- </div>
			 End Info Blcoks -->


		<!-- Info Blcoks
		<div class="row">-->
			<br>
			<div class="col-md-4 info-blocks">
				<i class="icon-info-blocks fa fa-code"></i>
				<div class="info-blocks-in">
					<br>
					<h3><a href="{{url("/portfolio")}}"><br>Computer Sciense</h3>
				</div>
			</div>
			<div class="col-md-3 info-blocks">
				<i class="icon-info-blocks fa fa-compress"></i>
				<div class="info-blocks-in">
					<br>
					<h3><a href="{{url("/portfolio")}}"><br>Urdu </h3>
				</div>
			</div>
			<div class="col-md-3 info-blocks">
				<i class="icon-info-blocks fa fa-html5"></i>
				<div class="info-blocks-in">
					<br>
					<h3><a href="{{url("/portfolio")}}"><br>English</h3>
				</div>
			</div>
			<!-- End Info Blcoks -->
		</div>
	<div class="col-md-2">
		<br><br><br><br><br><br><br><br><br>
		<div style="background-color:grey;color:white;height:200px;width:250px;">
			<br><br><br><br><br><br><br><br>
			<label>charts</label>
			<br><br><br><br><br><br><br><br>
		</div>

	</div>

</div>


	</div>
</section>

@include('layouts._footer');
</body>
</html>