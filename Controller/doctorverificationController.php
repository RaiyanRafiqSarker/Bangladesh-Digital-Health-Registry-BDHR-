<?php
require_once("../Model/DoctorModel.php");

if (isset($_GET['action'], $_GET['id'])) {

    $id = $_GET['id'];

    if ($_GET['action'] === "approve") {
        updateDoctorStatus($id, "Approved");
    }

    if ($_GET['action'] === "reject") {
        updateDoctorStatus($id, "Rejected");
    }

    header("Location: ../View/doctorverification.php");
}
