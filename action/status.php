<?php
include("../settings/connection.php");

if(!isset($_GET['id'])) {
    header("Location:../view/workout.php");
    exit;
}else{
    $ret_var= $_GET['id'];
    $query = "UPDATE `days` SET `status`='Completed' WHERE `exerciseID` = '$ret_var'";
    $result= $con->query($query);
    if ($result){
        header("Location:../view/workout.php");
    }else{
        echo"sorry, something went wrong";
    }
    
} 
?>