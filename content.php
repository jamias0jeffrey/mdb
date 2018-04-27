<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Header!</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

	<?php
		require_once "header1.php"
	?>

	<!-- Card -->
	<div class="card card-cascade wider reverse">

		<!-- Card image -->
		<div class="view overlay">
			<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Card image cap">
			<a href="#!">
				<div class="mask rgba-white-slight"></div>
			</a>
		</div>

		<!-- Card content -->
		<div class="card-body text-center">

			<!-- Title -->
			<h4 class="card-title"><strong>My adventure</strong></h4>
			<!-- Subtitle -->
			<h6 class="font-weight-bold indigo-text py-2">Photography</h6>
			<!-- Text -->
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
			</p>

			<!-- Linkedin -->
			<a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
			<!-- Twitter -->
			<a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
			<!-- Dribbble -->
			<a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

		</div>

	</div>
	<!-- Card -->

	<?php
		include_once "footer.php"
	?>

</body>
</html>