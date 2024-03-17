<?php
include "../settings/core.php";
include "../functions/workout_fxn.php";
isLoggedIn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- using boxicon (for external icons) -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/schedule.css"> <!-- Link to schedule_workout.css -->
    <link rel="stylesheet" href="../css/Homepage.css">

    <script src="../js/Homepage.js"></script>
	<title>Workout</title>
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
							<a class="active" href="../view/Homepage.php">Home</a>
						</li>

						<li><i class='bx bx-chevron-right' ></i></li>

						<li>
							<a class="active" href="../view/set_goals.php">Set Goals</a>
						</li>

						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="../view/Recommendation.php">Recommendations</a>
						</li>

						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="../view/workout.php">Workout</a>
						</li>
					</ul>
					
					
				</div>
				
			</div>		
		
			<div class="exercise-container" id="box" ondrop="drop(event)" ondragover="allowDrop(event)">
            <?php
            echo get_exercise($con);
			?>
        </div>
            
		<div class="calendar">
                <div class="day" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <span class="day-label">Sunday</span>
                </div>
                <div class="day" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <span class="day-label">Monday</span>
                </div>
                <div class="day" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <span class="day-label">Tuesday</span>
                </div>
                <div class="day" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <span class="day-label">Wednesday</span>
                </div>
                <div class="day" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <span class="day-label">Thursday</span>
                </div>
                <div class="day" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <span class="day-label">Friday</span>
                </div>
                <div class="day" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <span class="day-label">Saturday</span>
                </div>
            </div>
        </main>
    </section>

    <script>
        function allowDrop(event) {
            event.preventDefault();
        }

        function drag(event, id) {
            event.dataTransfer.setData("text", id);
        }

        function drop(event) {
            event.preventDefault();
            var data = event.dataTransfer.getData("text");
            var element = document.getElementById(data);

            if (event.target.classList.contains("day")) {
                event.target.appendChild(element);
            } else if (event.target.id === "box") {
                element.parentNode.removeChild(element);
                document.getElementById("box").appendChild(element);
            }
        }
    </script>
</body>
</html>