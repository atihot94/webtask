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
			{{Form::open(['url'=>url('search'),'method'=>'post',
         'id'=>'search-teacher'])}}
			<div class="col-md-3 aligncenter">

				<div class="form-group">
					<label style=color:white for="country">Department</label>
					<br><br><br><br><br><br><br><br>
					{{ Form::select('department',  $departmentList,isset($inputs)?$inputs['department']:null  , array('id' => 'department','class'=>"form-control"))}}

				</div>
			</div>
			<div class="col-md-3 aligncenter">
				<div class="form-group">
					<label style=color:white for="Teacher">Teacher Name</label>
					<br><br><br><br><br><br><br><br>
					{{ Form::text('teacher',isset($inputs)?$inputs['teacher']:null  , array('id' => 'teacher-name','class'=>"form-control"))}}
				</div>
			</div>
			<div class="col-md-3 aligncenter">
				<div class="form-group">
					<label style=color:white for="submit">Search</label>
					<br><br><br><br><br><br><br><br>
					<input class="form-control" style=background-color:gray type="submit" value="submit" width="34">
				</div>
			</div>
			{{form::close()}}
		</div>
</section>

<section id="content">

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">

					<thead>
					@if(isset($departments))
						@foreach($departments as $department)
								<tr>
						<th><a href="{{url("services")}}"></a>Department: {{$department->department_name}}</th>
					</tr>
					@foreach($department->teachers as $teacher)
					<tr>
						<td><a href="{{url("services")}}">{{$teacher->teacher_name}}</td>

					</tr>
						@endforeach
					@endforeach
					@endif
					</thead>
					<tbody>


					</tbody>
				</table>
				<br>
			</div>
		</div>
</section>
@include('layouts._footer');
<!--footer ens here-->
</body>
</html>