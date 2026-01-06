<!DOCTYPE html>
<html>
<head>
    
    <title>Data Monitoring & Audit</title>
    <link rel="stylesheet" href="../datamonitoring.css">
    
</head>

<body>

    <h1 class="dotted" align="center">Data Monitoring & Audit</h1>

    <form align="center">
        <fieldset>
            <legend style="color: red;">Audit Log Panel</legend>

            <table class="tablelayout">

                <tr>
                    <td><label for="filterUser">Filter by User:</label></td>
                    <td>
                        <select id="filterUser">
                            <option value="">All Users</option>
                            <option>Doctor</option>
                            <option>Admin</option>
                            <option>Lab Technician</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label for="filterAction">Filter by Action:</label></td>
                    <td>
                        <select id="filterAction">
                            <option value="">All Actions</option>
                            <option>Record Updated</option>
                            <option>Report Uploaded</option>
                            <option>Account Verified</option>
                            <option>Login</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><button type="button" onclick="applyFilter()">Apply Filter</button></td>
                </tr>

                <tr>
                    <td><b>User</b></td>
                    <td><b>Action</b></td>
                    <td><b>Time</b></td>
                    <td><b>Details</b></td>
                </tr>

                <tr>
                    <td>Doctor</td>
                    <td>Record Updated</td>
                    <td>2025-02-10 09:30</td>
                    <td><button type="button" onclick="viewDetails('Record updated for patient ID-20251')">View</button></td>
                </tr>

                <tr>
                    <td>Admin</td>
                    <td>Account Verified</td>
                    <td>2025-02-09 14:22</td>
                    <td><button type="button" onclick="viewDetails('Doctor license LIC-88371 verified')">View</button></td>
                </tr>

                <tr>
                    <td>Lab Technician</td>
                    <td>Report Uploaded</td>
                    <td>2025-02-08 11:05</td>
                    <td><button type="button" onclick="viewDetails('Blood test report uploaded for ID-20252')">View</button></td>
                </tr>

            </table>

        </fieldset>
    </form>

    <script>
       
        function applyFilter() {
            const user = document.getElementById("filterUser").value;
            const action = document.getElementById("filterAction").value;

            if (user === "" && action === "") {
                alert("Showing all logs.");
            } else if (user !== "" && action === "") {
                alert("Filter applied: User = " + user);
            } else if (user === "" && action !== "") {
                alert("Filter applied: Action = " + action);
            } else {
                alert("Filter applied: User = " + user + ", Action = " + action);
            }
        }

        function viewDetails(text) {
            alert(text);
        }
    </script>

</body>

<footer>
        <h1 style="background-color: black; color: white;" align="Center"><b>Thanks for your support</b></h1>
</footer>

</html>
