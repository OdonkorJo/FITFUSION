<?php
include "../settings/connection.php";
include "../settings/core.php";



if (!isset($_POST["submit"])){
    header("Location:../view/Recommendation.php?msg=please select exerise");
}else{
    if(isset($_POST["exerise"])){

        $userid = $_SESSION["user_name"];
        foreach($_POST['exerise'] as $exerciseID) {
            $user = "INSERT INTO userExercises (userid, exerciseID, workoutGoalID, userStatus) 
            VALUES ((SELECT `userID` FROM `fitUser` WHERE `fName` = '$userid'), 
                    $exerciseID, 
                    (SELECT workoutGoalID FROM recommendations WHERE exerciseID = $exerciseID), 
                    'incomplete')";
               $result= $con->query($user);}
        if($result){
            header("Location:../view/workout.php");
        }
          

    }else{
        
        header("Location:../view/Recommendation.php?msg=please select exercise");
       
        }
    }





?>