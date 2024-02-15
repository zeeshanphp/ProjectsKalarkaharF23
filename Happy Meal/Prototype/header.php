<!DOCTYPE html>
<html>

<head>
	<title>HAPPY MEAL</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<style>
		body {
			font-family: "Montserrat", sans-serif;
			font-optical-sizing: auto;
		}

		ul li a {
			color: rgba(160, 85, 146, 1);
		}

		.bg-red {

			background-color: blueviolet;
		}
	</style>
</head>

<body>

	<div class="container-fluid px-0">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-fill py-2 bg-primary">
					<li class="nav-item br ml-3"><a href="index.php" class="nav-link active text-white">HOME</a></li>
					<li class="nav-item br ml-3"> <a href="https://www.google.com" class="nav-link active text-white">Google</a> </li>
					<?php if (empty($_SESSION['userId'])) { ?>
						<li class="nav-item br ml-3"><a href="Admin/" class="nav-link text-white">ADMIN PANNEL</a></li>
						<li class="nav-item br ml-3"><a href="login.php" class="nav-link text-white">LOGIN</a></li>
						<li class="nav-item br ml-3"><a href="register.php" class="nav-link text-white">REGISTER</a></li>

					<?php } else { ?>
						<li class="nav-item br ml-3"><a href="logout.php" class="nav-link text-white">LOGOUT</a></li>
					<?php
					} ?>

				</ul>

			</div>
		</div>
	</div>