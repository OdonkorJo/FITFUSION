<?php
include "../functions/workout_fxn.php";
include "../functions/display.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track workout</title>
    <link href="../css/schedule_workout.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/recommendation.css">
</head>
<body>


    <section id="Sidebar">
        <a href="#" class="collection">
            <i class='bx bx-dumbbell'></i>
            <span class="text">FitFusion</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
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
            <li>
                <a href="../view/workout.php">
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">TRACK WORKOUT</span>
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
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="../view/Homepage.php">Home</a>
                        </li>

                        <li><i class='bx bx-chevron-right'></i></li>

                        <li>
                            <a class="active" href="../view/set_goals.php">Set Goals</a>
                        </li>

                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="../view/Recommendation.php">Recommendations</a>
                        </li>

                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="../view/workout.php">Track Workout</a>
                        </li>
                        
                    </ul>

                </div>

            </div>
        </main>

        <div id="schedule">
            <button id="add">Schedule</button>
        </div>


        <form action="../action/schedule_action.php" method="post" id="FormContainer">
            <div class="schedule">

                <?php
                echo get_exercise($con);

                ?>

            </div>
            <br><br>

            <button type="submit" name="submit" id="submitBtn">Schedule</button><br><br>
            <button id="closeFormBtn">Cancel</button><br><br>
        </form>

        <div>
            <?php
            echo display($con);
            ?>
            <div>
    </section>



    <script>

        document.getElementById("schedule").addEventListener("click", function () {
            // Display the chore form container as a modal
            var formContainer = document.getElementById("FormContainer");
            formContainer.style.display = "block";
            // Set a higher z-index to make sure the form appears on top of the table
            formContainer.style.zIndex = "9999";
            // Reset the rowIndex in dataset
            document.getElementById("submitBtn").dataset.rowIndex = "";
        })

        // Close Form Button Click Event
        document.getElementById("closeFormBtn").addEventListener("click", function () {
            // Hide the chore form container
            document.getElementById("FormContainer").style.display = "none";
        });





    </script>




</body>

</html>