<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>InLine Hosting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="et-line-font/style.css" />
	<!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
	<link href="css/style.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

@include('layouts._header')
		<!-- end header -->
<section id="banner">

	<!-- Slider -->
	<div id="main-slider" class="flexslider">
		<ul class="slides">
			<li>
				<img src="img/slides/1.jpg" alt="" />
				<div class="flex-caption">
					<h3>Cloud Hosting</h3>
					<p>Doloribus perferquam</p>

				</div>
			</li>
			<li>
				<img src="img/slides/2.jpg" alt="" />
				<div class="flex-caption">
					<h3>Fiber Internet</h3>
					<p>Consectetur  provident</p>

				</div>
			</li>
		</ul>
	</div>
	<!-- end slider -->

</section>
<section id="call-to-action-2">
	<div class="container">
		<div class="row">
			<div class="col-md-3 aligncenter">
				<div class="form-group">
					<label style=color:white for="country">Department</label>
					<br><br><br><br><br><br><br><br>
					<select class="form-control">
						<option>Computer Sciense</option>
						<option>Pre-Engineering</option>
						<option>Biology</option>
					</select>
				</div>
			</div>
			<div class="col-md-3 aligncenter">
				<div class="form-group">
					<label style=color:white for="Teacher">Teacher Name</label>
					<br><br><br><br><br><br><br><br>
					<input class="form-control"type="text" name="teacher name" size="34">
				</div>
			</div>
			<div class="col-md-3 aligncenter">
				<div class="form-group">
					<label style=color:white for="submit">Search</label>
					<br><br><br><br><br><br><br><br>
					<input class="form-control" style=background-color:gray type="button" value="submit" width="34">
				</div>
			</div>
		</div>
</section>

<section id="content">

	<div class="container">
		<div class="row">
			<div class="col-md-3 aligncenter">
			@foreach($teachers as $teacher)
				<h3>{{$teachers->teacher_name}}</h3>
				<h3>{{$teachers->email}}</h3>
				<br>
			@endforeach
				</div>
		</div>
</section>
@include('layouts._footer');
<!--footer ens here-->
</body>
</html>