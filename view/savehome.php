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
				<a href="#">
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">SCHEDULE WORKOUT</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-edit' ></i>
					<span class="text">TRACKER</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="../login/login.php" class="logout">
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
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<!-- <div id="box">  -->
			
				<ul class="box-info">
					<li>
						<a id= "pro" href="">
						<span class="text">
							
							<h3>YOUR GOALS</h3>
							
						</span></a>
					</li>
					<li>
						
						<span class="text">
							<a id= "pro" href="">
							<h3>TRACK</h3>
						</span></a>
					</li>
					<li>
						<span class="text">
							<a id= "pro" href="../view/Recommendation.php">
							<h3>RECOMMENDATIONS</h3>
						</span></a>
					</li>
				</ul>

				

				
</body>
</html>