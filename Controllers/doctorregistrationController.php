<?php
require_once("../Model/DoctorModel.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $license = $_POST['license'];

    $fileName = $_FILES['proof']['name'];
    $tmpName  = $_FILES['proof']['tmp_name'];

    $uploadPath = "../uploads/" . $fileName;
    move_uploaded_file($tmpName, $uploadPath);

    $status = "Pending";

    $result = registerDoctor($name, $license, $fileName, $status);

    if ($result) {
        header("Location: ../View/doctorverification.php");
    } else {
        echo "Registration Failed!";
    }
}
