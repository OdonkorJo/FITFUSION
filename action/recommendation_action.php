<?php
include "../settings/connection.php";
//include "../functions/get_id_fxn.php";

$execrise="";
if (!isset($_POST["submit"])){
    header("Location:../view/Recommendation.php?msg=please select exerise");
}else{
    if(isset($_POST["exerise"])){
        foreach($_POST['exerise'] as $exerciseID) {
            $user="INSERT INTO userexercises (userid, exerciseID, workoutGoalID, userStatus) VALUES (1, $exerciseID, (SELECT workoutGoalID FROM recommendations WHERE exerciseID = $exerciseID), 'incomplete')";
            $result= $con->query($user);}
        if($result){
            header("Location:../view/workout.php");
        }
        else{
            header("Location:../view/Recommendation.php?msg=please select exerise");
            }

    }
    }





?>