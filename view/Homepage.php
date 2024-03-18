<?php
include "../settings/core.php";
isLoggedIn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- using boxicon (for external icons) -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/Homepage.css">
	
    <script src="../js/Homepage.js"></script>
	<title>Dashboard</title>
</head>
<body>
<!-- creation of the sidebar -->
	<section id="Sidebar">
		<a href="#" class="collection">
			<i class='bx bx-dumbbell'></i>
			<span class="text">FitFusion</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="../view/Homepage.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">HOME</span>
				</a>
			</li>
			<li>
				<a href="../view/set_goals.php">
					<i class='bx bxs-bullseye' ></i>
					<span class="text">SET GOALS</span>
				</a>
			</li>
			<li>
				<a href="../view/Recommendation.php">
					<i class='bx bxs-select-multiple' ></i>
					<span class="text">RECOMMENDATIONS</span>
				</a>
			</li>
			<li>
				<a href="view/workout.php">
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">TRACK WORKOUT</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="LandingPage.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">LOGOUT</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- END OF THE SIDEBAR -->
    <!-- CODE WORKS UP TO HERE! -->




<!-- CONTENT -->
<section id="content">
	<!-- NAVBAR -->
	<!-- <nav></nav> -->

<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="../view/Homepage.php">Home</a>
						</li>
						

					</ul>
					
				</div>
			</div>
			
			
			<div class="home-text">
				<h1>Welcome to <span id="fit">FitFusion</span></h1>
				<h2>Transform your body, Transform your life!</h2>
				<a href="../view/set_goals.php"class="btn">Let's Get Started</a>
			</div>
		
		</main>
</section>


		

	


			
				
			
				
				

				
</body>
</html>