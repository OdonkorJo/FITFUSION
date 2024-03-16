<?php

//start the session
session_start();

//unsetting the two session id in login
unset($_SESSION['user_id']);


// Redirect to login_view page 
header("Location:../login/login.php");
exit();

