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
	<!-- Vendor Styles -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Block Styles -->
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/gallery-1.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
@include('layouts._header');
<!-- end header -->
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<br>
					<img class="img-circle" src="img/team2.jpg"  height="90px" width="85px"">
					<h3 class="pageTitle">Teacher Nmae</h3>
				</div>
				<div class="col-lg-4">
					<br>
					<h3 class="pageTitle">Dept Nmae</h3>
				</div>
				<div class="col-lg-4">
					<br>
					<h3 class="pageTitle">Subj Nmae</h3>

				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">

			<div class="row">
				<div class="col-md-10">
					<div class="about-logo">
						<h3>Comments</h3>
						<form name="sentMessage" id="contactForm"  novalidate>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control"
									       placeholder="Full Name" id="name" required
									       data-validation-required-message="Please enter your name" />
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
				 <textarea rows="5" cols="50" class="form-control"
				           placeholder="Message" id="message" required
				           data-validation-required-message="Please enter your message" minlength="5"
				           data-validation-minlength-message="Min 5 characters"
				           maxlength="999" style="resize:none"></textarea>
								</div>
							</div>
							<div id="success"> </div> <!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary pull-right">Send</button><br />
						</form>
					</div>
				</div>
				<div class="col-md-2">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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