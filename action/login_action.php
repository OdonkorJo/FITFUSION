<?php
session_start();
include("../settings/connection.php");

$useremail = $userpassword ="";
if (!isset($_POST["submit"])) {
    die("There is an error"); // or handle the case where submit is not set
} else {
    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM fituser WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $useremail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        echo "User not registered or incorrect username";
        
    } else {
        $row = $result->fetch_assoc();
        // Verify password
        if (!password_verify($userpassword, $row["emailPassword"])) {
            echo "Incorrect password or username";
            
        } else {

            $_SESSION["user_id"] = $row["userID"];
            $_SESSION["user_name"]=$row["fName"];
                        // Redirect with success message
            header("Location:../view/Homepage.php?msg=success");
            exit(); // Prevent further execution
        }
    }
}
?>