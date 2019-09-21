<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Assignment 02: Smash Website</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<body class="container">
		<div class="header">
		<div class="container1">
		<header>
			<a href="index.php">
				<img src="images/seattle.jpeg" alt="seattle">
				<h1>Team Seattle</h1>
			</a>
			<p>Hello World! Welcome to our smash website! Junting Chen is our Information Architect, Jialin Huo is our Visual Designer, and Jennifer is our Technical Coder. Click on the links to learn more.</p>
		</header>
		
		</div><!--.container1-->

		</div><!--.header-->

		<main class="area">
			<div class="vanessa">
				<a href="vanessa.php">
				<img src="images/vanessa.jpg" alt="Vanessa Acevedo" style="width: 95%">
				<p>Vanessa</p>
				</a>
			</div>
			
			<div class="alyssa">
				<a href="alyssa.php">
				<img src="images/alyssa.jpg" alt="Alyssa Nelson" style="width: 95%">
				<p>Alyssa</p>
				</a>
			</div>
			<div class="kat">
				<a href="kat.php">
				<img src="images/kat.jpg" alt="Kat Fuss" style="width: 95%">
				<p>Kat</p>
				</a>
			</div>
		</main>


	<?php include "inc/main-nav.inc"; ?>
	<?php include "inc/footer.inc"; ?>