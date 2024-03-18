<?php
include "../settings/connection.php";
include "../settings/core.php";

isLoggedIn();

$name = $_SESSION["user_name"];
function get_exercise($con)
{
    $name = $_SESSION["user_name"];
    $query = "SELECT `exerciseID`, `exercisename` FROM `recommendations` WHERE `exerciseID` IN (SELECT `exerciseID` FROM `userexercises` WHERE `userID` = (SELECT `userID` FROM `fituser` WHERE `fname` = '$name'))";
    $result = $con->query($query);
    
    if ($result) {
        $exercises = $result->fetch_all(MYSQLI_ASSOC);

        $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        // Loop through each day
        foreach ($days as $day) {
            echo "<h4>$day</h4>";
            echo "<div class='day'>";
            
            // Display exercises for the current day
            foreach ($exercises as $exercise) {
                echo "<label class=''>";
                echo "<input type='checkbox' name='selected_exe[$day][]' value='" . $exercise["exercisename"] . "'>";
                echo "<span>" . $exercise["exercisename"] . "</span><br>";
                echo "</label>";
            }
            
            echo "</div>"; // Close day container
        }
    } else {
        echo "Error executing SQL query: " . $con->error;
    }
}

?>