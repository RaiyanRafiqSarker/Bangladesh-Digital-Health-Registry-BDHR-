<?php
session_start();
require_once("../Model/DoctorModel.php");

if (isset($_POST['login'])) {

    $name = $_POST['name'];
    $license = $_POST['license'];

    $result = doctorLogin($name, $license);

    if (mysqli_num_rows($result) == 1) {

        $doctor = mysqli_fetch_assoc($result);

        if ($doctor['status'] == "Approved") {

            $_SESSION['doctor_id'] = $doctor['id'];
            $_SESSION['doctor_name'] = $doctor['name'];

            header("Location: ../View/doctordashboard.php");
        }
        else if ($doctor['status'] == "Pending") {
            echo "<script>alert('Your account is not approved yet');</script>";
            echo "<script>location.href='../View/doctorlogin.php';</script>";
        }
        else {
            echo "<script>alert('Your account has been rejected');</script>";
            echo "<script>location.href='../View/doctorlogin.php';</script>";
        }

    } else {
        echo "<script>alert('Invalid Doctor Name or License No');</script>";
        echo "<script>location.href='../View/doctorlogin.php';</script>";
    }
}
