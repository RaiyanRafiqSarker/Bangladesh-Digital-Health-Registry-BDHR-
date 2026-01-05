<?php
include("../Model/db.php");

if (isset($_POST['action'])) {

    /* =====================
       VIEW APPOINTMENTS
       ===================== */
    if ($_POST['action'] === "appointments") {
        $result = getAppointments();

        echo "<h2>Appointments</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Doctor</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['patient_name']}</td>
                    <td>{$row['appointment_date']}</td>
                    <td>{$row['doctor_name']}</td>
                  </tr>";
        }
        echo "</table>";
    }

    /* =====================
       VIEW REPORTS
       ===================== */
    if ($_POST['action'] === "reports") {
        $result = getReports();

        echo "<h2>Reports</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Patient ID</th>
                    <th>Type</th>
                    <th>Date</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['patient_id']}</td>
                    <td>{$row['report_type']}</td>
                    <td>{$row['report_date']}</td>
                  </tr>";
        }
        echo "</table>";
    }

    /* =====================
       SEARCH PATIENT
       ===================== */
    if ($_POST['action'] === "search") {

    $pid = $_POST['patient_id'];

    // get ONLY that patient's reports
    $result = getPatientReports($pid);

    echo "<h2>Patient Reports</h2>";

    if (mysqli_num_rows($result) > 0) {

        echo "<table border='1'>
                <tr>
                    <th>Patient ID</th>
                    <th>Report Type</th>
                    <th>Report Date</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['patient_id']}</td>
                    <td>{$row['report_type']}</td>
                    <td>{$row['report_date']}</td>
                  </tr>";
        }

        echo "</table>";

    } else {
        echo "<p>No reports found for Patient ID: <b>$pid</b></p>";
    }
}

}
?>
