<?php
include "../settings/connection.php";
function get_exercise($con)
{
    $query = "SELECT `exerciseID` FROM `userexercises`";
    $result = $con->query($query);
    if ($result) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) {
            $query = "SELECT `exercisename` FROM `recommendations` WHERE `exerciseID` = ?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("i", $row['exerciseID']); // Assuming 'exerciseID' is an integer
            $stmt->execute();
            $result = $stmt->get_result();

            // Fetch the exercise name if there is a result
            if ($result->num_rows > 0) {
                $exercise = $result->fetch_assoc();
                $exerciseName = $exercise['exercisename'];
                echo"<div class='exercise-wrapper'>";
                echo "<div class='exercise' draggable='true' id='$exerciseName' ondragstart='drag(event, '$exerciseName')>$exerciseName</div>";
                echo"</div>";



            }
        }
    }else{
        echo "something went wrong";
    }
}


?>