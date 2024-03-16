<?php
//include a connection file
include "../settings/connection.php";

//collection of form data
if(isset($_POST["regform"])){
    $first_name = mysqli_real_escape_string( $con, $_POST["firstName"]);
    $last_name = mysqli_real_escape_string( $con, $_POST["lastName"]);
    $email = mysqli_real_escape_string( $con, $_POST["email"]);
    $dob = mysqli_real_escape_string( $con, $_POST["dob"]);
    $gender = mysqli_real_escape_string( $con, $_POST["sex"]);
    $password = mysqli_real_escape_string( $con, $_POST["password"]);
    $confirmpassword = mysqli_real_escape_string( $con, $_POST["confirmPassword"]);
    
    
    if($password != $confirmpassword){
        header("Location:../login/register.php");
        exit();
    }
     
     $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

     $sql_query = "INSERT INTO fituser (fName, lName,dateOfBirth,sex,email,emailPassword,registrationDate) VALUE ('$first_name','$last_name','$dob','$gender','$email','$encrypted_password',Now())";

     if ($con->query($sql_query) === true) {
         //redirect to login page
         echo "Success!";
         header("Location:../login/login.php");

    } 
     else {
        //echo error 
        header("Location:../login/register.php");
        echo "Error: " ;
    }

    //close database connection
    $con->close();

}








?>



