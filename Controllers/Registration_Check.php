<?php
include '../Model/db.php';

$success_message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobileno'];

    if(empty($username) || empty($password) || empty($email) || empty($mobile)){
        $success_message = "All fields are required!";
    } else {
        if(insert_to_registration($username, $password, $email, $mobile)){
           header("Location: ../View/Patient_Login.php");
           exit();
        } else {
            $success_message = "Registration Unsuccessful!";
        }
    }
}
else{
    require '../View/Patient_Registration.php';
}
?>
