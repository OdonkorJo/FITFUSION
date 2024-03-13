<?php
include "../settings/connection.php";
include "../functions/get_id_fxn.php";

$work_num= testid();
function getRecommendations($work_num){
    global $con;
    $recom_qry = "SELECT `exercisename` FROM `recommendations` WHERE `workoutGoalID` = ?";
    $stmt = $con->prepare($recom_qry);
    $stmt->bind_param("i", $work_num);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
        
    } else{
        echo"false";
    }
 }


 function getallrecommendations($con){
    $query="SELECT `exercisename` FROM `recommendations`";

    $results= $con->query($query);

    if ($results->num_rows > 0) {
        $rows = $results->fetch_all(MYSQLI_ASSOC);
        return $rows;
        
    } else{
        echo"false";
    }
 }
 





?>
