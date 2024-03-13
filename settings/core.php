<?php

//start the session
session_start();



function isLoggedIn(){
    //we will check if the user id session exists
    if(isset($_SESSION['user_id'])){
        return true;
    } 
    else{
        //redirect to login
        header("Location:login.php");
        die();
    }

    }


    





?>