<?php

function getConnection() {
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbName = "bdhr";

    $conn = mysqli_connect($server, $user, $password, $dbName);

    if (!$conn) {
        die("Database connection failed");
    }

    return $conn;
}

/* =========================
   Database Functions
   ========================= */

function getAppointments() {
    $conn = getConnection();
    $sql = "SELECT * FROM appointments";
    return mysqli_query($conn, $sql);
}

function getReports() {
    $conn = getConnection();
    $sql = "SELECT * FROM reports";
    return mysqli_query($conn, $sql);
}


function searchPatient($patientId) {
    $conn = getConnection();
    $sql = "SELECT * FROM patients WHERE patient_id='$patientId'";
    return mysqli_query($conn, $sql);
}
function getPatientReports($patientId) {
    $conn = getConnection();
    $sql = "SELECT * FROM reports WHERE patient_id = '$patientId'";
    return mysqli_query($conn, $sql);
}


?>
