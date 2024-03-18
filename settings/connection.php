<?php
$servername = "localhost";
$username = "root";
$password="cs341webtech";
$dbname="FitFusion";


//create connection
$con = new mysqli($servername,$username,$password,$dbname) or die("could not connect database");


if ($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

 //echo "Connected successfully";

?> 


