<?php
require_once("db.php");

function registerDoctor($name, $license, $proof, $status) {

    $conn = getConnection();

    $sql = "INSERT INTO doctors
            (name, license_no, license_proof, status)
            VALUES
            ('$name','$license','$proof','$status')";

    return mysqli_query($conn, $sql);
}
function getAllDoctors() {
    $conn = getConnection();
    $sql = "SELECT * FROM doctors";
    return mysqli_query($conn, $sql);
}

function updateDoctorStatus($id, $status) {
    $conn = getConnection();
    $sql = "UPDATE doctors SET status='$status' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function doctorLogin($name, $license) {
    $conn = getConnection();
    $sql = "SELECT * FROM doctors 
            WHERE name='$name' AND license_no='$license'";
    return mysqli_query($conn, $sql);
}
