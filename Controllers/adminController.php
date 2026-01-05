<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple admin credentials (enough for Web Tech project)
    if ($username === "admin" && $password === "admin123") {
        $_SESSION['admin'] = true;
        header("Location: ../View/admindashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Admin Credentials');</script>";
        echo "<script>location.href='../View/adminlogin.php';</script>";
    }
}

?>