<?php
include "../settings/core.php";
isLoggedIn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/setgoals.css">
    <title>Set Goals</title>
</head>
<body>
    <section id="Sidebar">
        <a href="#" class="collection">
            <i class='bx bx-dumbbell'></i>
            <span class="text">FitFusion</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="../view/Homepage.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">HOME</span>
                </a>
            </li>
            <li class="active">
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
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">LOGOUT</span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <main>
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
							<a class="active" href="../set_goals.php">Set Goal</a>
						</li>
					</ul>
					
				</div>
				<h3 class="name"> <?php echo $_SESSION["user_name"]?></h3>
				
				
				
			</div>

            <div class="set-goals-page">
                <h2>Set Your Fitness Goals <br><br></h2>
                <div class="goal-buttons">
                    <a href="../view/Recommendation.php?id=1">
                    <button class="goal-button" name="lose_fat">Lose Fat</button>
                </a>

                <a href="../view/Recommendation.php?id=2">
                    <button class="goal-button" name="build_muscle">Build Muscle</button>
                </a>

                <a href="../view/Recommendation.php?id=3">
                    <button class="goal-button" name="stamina">Improve Stamina/Cardio</button>
                </a>
                </div>
            </div>
        </main>
    </section>

    <script src="../js/Homepage.js"></script>
</body>
</html>
