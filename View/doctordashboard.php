<!DOCTYPE html>
<html>
<head>
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<h1 class="dotted" align="center">Doctor Dashboard</h1>

<form align="left" action="../Controller/doctordashboardController.php" method="post">
    <fieldset>
        <legend style="color: red;" align="center">Dashboard Overview</legend>

        <table class="tablelayout">

            <tr>
           
            <td><label>Doctor Actions:</label></td>
            <td>

            <select id="doctorAction">
            <option value="">-- Select Action --</option>
            <option value="updatediagnosisprescription.php">
                Update Diagnosis & Prescription
            </option>
            <option value="accesslabreports.php">
                Access Lab Reports
            </option>
            <option value="emergencyaccess.php">
                Emergency Access
            </option>
            </select>

            <br><br>

        <button type="button" onclick="goToAction()">Go</button>
        </td>
        </tr>


            <tr>
                <td><label>Enter Patient ID:</label></td>
                <td>
               
                <input type="text" name="patient_id" placeholder="Enter Patient ID" required> 
                <br><br>
                <button type="submit" name="action" value="search">Search</button>
    
            </td>

            </tr>

            <tr>
                <td><label>Upcoming Appointments:</label></td>
                <td>
                    <button type="submit" name="action" value="appointments">
                        View Appointments
                    </button>
                </td>
            </tr>

            <tr>
                <td><label>Patient Reports:</label></td>
                <td>
                    <button type="submit" name="action" value="reports">
                        View Reports
                    </button>
                </td>
            </tr>

            <tr>
                <td><label>Daily Auto Refresh:</label></td>
                <td><span>Every 24 Hours</span></td>
            </tr>

            <tr>
                <td><label>Manual Refresh:</label></td>
            <td>
                <button type="button" onclick="location.reload()">Refresh</button>
            </td>
            </tr>

        </table>
    </fieldset>
</form>
<script>
function goToAction() {
    const page = document.getElementById("doctorAction").value;
    if (page === "") {
        alert("Please select an action");
        return;
    }
    window.location.href = page;
}
</script>

</body>

<footer>
    <h1 style="background-color: black; color: white;" align="center">
        <b>Thanks for your support</b>
    </h1>
</footer>

</html>
