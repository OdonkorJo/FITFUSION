<?php
include "../settings/connection.php";
include "../settings/core.php";
isLoggedIn();
$name=$_SESSION["user_name"];


if(!isset($_POST["submit"])){
    header("Location:../view/workout.php");

}else{
    $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    foreach ($days as $day) {
        if (isset($_POST['selected_exe'][$day])) {
            $selectedExercises = $_POST['selected_exe'][$day]; // Selected exercises for the current day

            // Insert the selected exercises into the database
            foreach ($selectedExercises as $exercise) {
                $query = "INSERT INTO `days`(`user_name`, `_day`, `exerciseID`, `exercise`, `exerciseStatus`) VALUES ('$name', '$day', '$exercise','incomplete')";
                $result = $con->query($query);
                if ($result){
                    header("Location:../view/workout.php");
                }
            }
        }
    }
    // Redirect or display success message as needed
}

?>
    

