
<?php
include "../settings/core.php";
isLoggedIn();
include "../functions/get_id_fxn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="../css/recommendation.css">
	
    <script src="../js/Homepage.js"></script>
	<title>Dashboard</title>
</head>
<body>
<!-- Sidebar -->
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
				<a href="../view/workout.php">
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">TRACK WORKOUT</span>
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





<section id="content">
	
<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					
					<ul class="breadcrumb">
						<li><a href="#">Dashboard</a></li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li><a class="active" href="../view/Homepage.php">Home</a></li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li><a class="active" href="../view/set_goals.php">Set Goals</a></li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li><a class="active" href="../view/Recommendation.php">Recommendations</a></li>
					</ul>
					
				</div>
				
				</div>
			</main>
			<div>
				<?php echo testid();?>
			</div>
				 

            
</section>


		

	


			
				
			
				
				

				
</body>
</html>


