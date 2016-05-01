<?php

?>

<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- <script type="text/javascript" src="./js/main.js"></script> -->

	<title>.::Thom's Muffins::.</title>

</head>
<body>
	<?php include "../app/html/navbar.html" ?>

	<div class="row">
		<div class="col-md-1 col-sm-2"></div>
		<div class="content_div col-md-7 col-sm-8">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner"  role="listbox">
					<div class="item active">
						<img src="./images/hiking.jpg" class="img_center" alt="hiking">
					</div>

					<div class="item">
						<img src="./images/bridge_jumping.jpg" class="img_center" alt="jumping">
					</div>

					<div class="item">
						<img src="./images/roomies.JPG" class="img_center" alt="roomies">
					</div>

					<div class="item">
						<img src="./images/the_great_flood.jpg" class="img_center" alt="flood">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>


		</div>
		<div class="col-md-4 col-sm-2"></div>

	</div>


</body>
</html>
