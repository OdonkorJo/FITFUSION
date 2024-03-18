<?php
include "../settings/connection.php";
function getallrecommendations($con)
{
    $query = "SELECT * FROM recommendations";

    $results = $con->query($query);

    if ($results->num_rows > 0) {
        $rows = $results->fetch_all(MYSQLI_ASSOC);
        return $rows;
        //return $rows;

    } else {
        return "false";
    }
}



function testid(){
    global $con;
    if (!isset($_GET['id'])) {
        $alls = getallrecommendations($con);
       
        echo "<form action = \"../action/recommendation_action.php\" method ='post'>";
        echo "<div class='grid-container'>";
        foreach ($alls as $row) {
            $exerciseName=$row['exercisename'];
            $image_path = '..//ubuntu@18.133.105.236/var/www/FITFUSION/images/' . strtolower($exerciseName). '.jpg';
            
            echo '<div class="item">';
            echo '<div class="image">';
            echo '<img src="' . $image_path . '">';
            echo '</div>';
            echo "<div class='cat " . $row['exercisename'] . "'>";

            echo"<label>";
            echo "<input type='checkbox' name = 'exerise[]' value= '".$row['exerciseID']."'>";
            echo "<span>" . $row['exercisename']. "</span> <br>"; 
            echo "</label>";
            echo "</div>"; 
            echo '</div>'; // close item div
        }
        echo "</div><br><br>"; // close container div
        echo "<div class='butt'>";
        echo "<button class='bom' type='submit' name='submit'><i class='fa-solid fa-dumbbell fa-rotate-270' style='color:'#0f0000';></i>  Get Fit</button>";
        echo "</div><br><br>";

        echo "</form>";
        
        exit();
    }
     else {

        $work_var = $_GET['id'];
        $work_qry = "SELECT WorkoutGoalID FROM Workout WHERE WorkoutGoalID = $work_var ";
        $results = $con->query($work_qry);

        if ($results) {

            $rows = $results->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $work_num = $row['WorkoutGoalID'];
            }
            $recom_qry = "SELECT * FROM recommendations WHERE WorkoutGoalID = $work_num";
            $result = $con->query($recom_qry);


            if ($result) {
                $all = $result->fetch_all(MYSQLI_ASSOC);
                echo "<form action = \"../action/recommendation_action.php\" method ='post'>";
                echo "<h3 style='font-family:monospace; color:white; font-size:30px;'> Recommended Exercises</h3>";
                echo "<div class='grid-container'>";
                foreach ($all as $row) {
                    $exerciseName=$row['exercisename'];
                    $image_path = '..//ubuntu@18.133.105.236/var/www/FITFUSION/images/' . strtolower($exerciseName). '.jpg';
                    
                    echo '<div class="item">';
                    echo '<div class="image">';
                    echo '<img src="' . $image_path . '"<br>>';
                    echo '</div>';
                    echo "<div class='cat " . $row['exercisename'] . "'>";
        
                    echo"<label>";
                    echo "<input type='checkbox' name = 'exerise[]' value= '".$row['exerciseID']."'>";
                    echo "<span>" . $row['exercisename']. "</span> <br>"; 
                    echo "</label>";
                    echo "</div>"; 
                    echo '</div>'; // close item div
                }echo "</div>";
               
                


            echo "<br><br><br><br>";
            echo "<h3 style='font-family:monospace; color:white; font-size:30px;'>All Exercises</h3>";
            echo "<div class='grid-container'>";
            
            $alls = getallrecommendations($con);
            

            foreach ($alls as $row) {
                $exerciseName=$row['exercisename'];
                $image_path = '..//ubuntu@18.133.105.236/var/www/FITFUSION/images/' . strtolower($exerciseName). '.jpg';
                
                echo '<div class="item">';
                echo '<div class="image">';
                echo '<img src="' . $image_path . '"<br>>';
                echo '</div>';
                echo "<div class='cat " . $row['exercisename'] . "'>";
    
                echo"<label>";
                echo "<input type='checkbox' name = 'exerise[]' value= '".$row['exerciseID']."'>";
                echo "<span>" . $row['exercisename']. "</span> <br>"; 
                echo "</label>";
                echo "</div>"; 
                echo '</div>'; // close item div
            }
          ; // close container div
            echo "<br><br>";
           
            echo "<div class='butt' <br><br>";
            echo "<button class='bom' type='submit' name='submit'><i class='fa-solid fa-dumbbell fa-rotate-270' style='color:'#0f0000';></i>  Get Fit</button>";
            echo "</div>";
            echo "</div><br><br>";
            echo "</form>";
            
        }
        
        }}}


    ?>