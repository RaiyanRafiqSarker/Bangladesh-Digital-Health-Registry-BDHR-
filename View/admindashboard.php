<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: adminlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<h1 class="dotted" align="center">Admin Dashboard</h1>

<form align="center">
    <fieldset>
        <legend style="color:red;">Admin Control Panel</legend>

        <table class="tablelayout">

            <tr>
                <td>Doctor Verification</td>
                <td>
                    <a href="doctorverification.php">
                        <button type="button">Open</button>
                    </a>
                </td>
            </tr>

            <tr>
                <td>Manage Admission</td>
                <td>
                    <a href="manageadmission.php">
                        <button type="button">Open</button>
                    </a>
                </td>
            </tr>

            <tr>
                <td>Upload Test Reports</td>
                <td>
                    <a href="uploadtestreports.php">
                        <button type="button">Open</button>
                    </a>
                </td>
            </tr>

            <tr>
                <td>Data Monitoring</td>
                <td>
                    <a href="datamonitoring.php">
                        <button type="button">Open</button>
                    </a>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <a href="adminlogin.php">
                       
                        <button type="button" >Logout </button>
           
                    </a>
                </td>
            </tr>

        </table>
    </fieldset>
</form>

</body>

<footer>
    <h1 style="background:black;color:white;" align="center">
        Thanks for your support
    </h1>
</footer>

</html>
