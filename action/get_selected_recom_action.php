<?php
include ("../settings/connection.php");
$recommendation="";
if (!isset($_GET["submit"])){
    $recommendation = mysqli_real_escape_string($con, $_GET["value"]);
    echo $recommendation;

}
?>