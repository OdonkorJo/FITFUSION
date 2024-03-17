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
    <link rel="stylesheet" href="../css/Homepage.css">
    <link rel="stylesheet" href="../css/schedule_workout.css"> <!-- Link to schedule_workout.css -->
    
    <title>Schedule Workout</title>
</head>
<body>
    <!-- Sidebar -->
    <section id="Sidebar">
        <a href="#" class="collection">
            <i class='bx bx-dumbbell'></i>
            <span class="text">FitFusion</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="../view/Homepage.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">HOME</span>
                </a>
            </li>
            <li>
                <a href="../view/set_goals.php">
                    <i class='bx bxs-bullseye'></i>
                    <span class="text">SET GOALS</span>
                </a>
            </li>
            <li>
                <a href="../view/Recommendation.php">
                    <i class='bx bxs-select-multiple'></i>
                    <span class="text">RECOMMENDATIONS</span>
                </a>
            </li>
            <li class="active">
                <a href="../view/workout.php">
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">SCHEDULE WORKOUT</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-edit'></i>
                    <span class="text">TRACKER</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="../login/login.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">LOGOUT</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- CONTENT -->
    <section id="content">
        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li><a class="active" href="../view/workout.php">Schedule Workout</a></li>
                    </ul>
                </div>
                <?php if(isset($_SESSION["user_name"])) { ?>
                <h3 class="name"><?php echo $_SESSION["user_name"]?></h3>
                <?php } ?>
            </div>

            <!-- Exercise Buttons -->
            <div class="exercise-container">
				<div class="exercise-container">
					<div class="day" id="box">
                
                    <?php
                    // Array of exercises
					echo get_exercise($con);
                    ?>
               </div>
				</div>
            </div>

            <!-- Drag and Drop Calendar -->
            <div class="calendar">
                <div class="day">
                    <span class="day-label">Sunday</span>
                </div>
                <div class="day">
                    <span class="day-label">Monday</span>
                </div>
                <div class="day">
                    <span class="day-label">Tuesday</span>
                </div>
                <div class="day">
                    <span class="day-label">Wednesday</span>
                </div>
                <div class="day">
                    <span class="day-label">Thursday</span>
                </div>
                <div class="day">
                    <span class="day-label">Friday</span>
                </div>
                <div class="day">
                    <span class="day-label">Saturday</span>
                </div>
            </div>
        </main>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/testschedule.js"></script>
</body>
</html>
