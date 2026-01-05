<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"] ?? "";
    $license = $_POST["license"] ?? "";
    $proof = $_FILES["proof"]["name"] ?? "";

    if ($name == "" || $license == "" || $proof == "") {
        echo "<script>alert('Please fill all the fields & upload license proof.');</script>";
    } 
    else {
        echo "<script>alert('Doctor Verification Submitted Successfully!');</script>";
    }
}
?>
