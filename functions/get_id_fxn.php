
<?php
include "../settings/connection.php";
function getallrecommendations($con){
    $query="SELECT * FROM `recommendations`";

    $results= $con->query($query);

    if ($results->num_rows > 0) {
        $rows = $results->fetch_all(MYSQLI_ASSOC);
        return $rows;
        
    } else{
        return "false";
    }
 }
 

function testid(){
    global $con;
    if (!isset($_GET['id'])) {
        $all = getallrecommendations($con);
        echo "<div class='container'>";
        foreach($all as $row){
            echo "<div class ='cat' .>";
                echo"<label>";
                    echo "<input type='checkbox' class='goal-button' value='".$row['exerciseID']."'>";
                    echo "<span>" . $row['exercisename']. "</span> <br>"; 
                echo "</label>";
            echo "</div>"; 
    }
        echo "</div>";
    exit();
    } else {
        
        $work_var = $_GET['id'];
        $work_qry = "SELECT `WorkoutGoalID` FROM `workout` WHERE `WorkoutGoalID` = $work_var ";
        $results = $con->query($work_qry);
        
        if ($results) {
            
            $rows=$results->fetch_all(MYSQLI_ASSOC);
            foreach($rows as $row){
                $work_num = $row['WorkoutGoalID'];
            }
            $recom_qry = "SELECT `exercisename` FROM `recommendations` WHERE `WorkoutGoalID` = $work_num";
            $result = $con->query($recom_qry);
           
            
            if ($result) {
                $all = $result->fetch_all(MYSQLI_ASSOC);
                foreach($all as $row){
                    echo "<button class='goal-button'>". $row['exercisename']. "</button> <br>";

            } 
            echo "<br><br><br>";
            $all = getallrecommendations($con);
            foreach($all as $row){
                echo "<button  class='goal-button '>". $row['exercisename']. "</button> <br>";    
        }}}}}
    ?>

<!-- echo "<input type='checkbox' class='goal-button' value='" . $row['exercisename'] . "'> <br>"; -->
