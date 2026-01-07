<!DOCTYPE html>
<html>
<head>
    
    <title>Upload Lab Test Reports</title>
    <link rel="stylesheet" href="../testreports.css">
    
</head>

<body>

    <h1 class="dotted" align="center">Upload Lab Test Reports</h1>

    <form align="center" onsubmit="uploadReport(event)">
        <fieldset>
            <legend style="color: red;">Test Report Upload</legend>

            <table class="tablelayout">

                <tr>
                    <td><label for="patientId">Patient ID:</label></td>
                    <td><input id="patientId" type="text" placeholder="Enter patient ID"></td>
                </tr>

                <tr>
                    <td><label for="testType">Test Type:</label></td>
                    <td>
                        <select id="testType">
                            <option value="">Select Test</option>
                            <option>Blood Test</option>
                            <option>Urine Test</option>
                            <option>X-Ray</option>
                            <option>MRI</option>
                            <option>CT Scan</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label for="testFile">Upload Report:</label></td>
                    <td><input type="file" id="testFile"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Upload</button>
                        <input type="reset" value="Clear">
                    </td>
                </tr>

            </table>

        </fieldset>
    </form>

    <script>
        function uploadReport(event) {
            event.preventDefault();

            const patientId = document.getElementById("patientId").value;
            const testType = document.getElementById("testType").value;
            const fileInput = document.getElementById("testFile");

            if (patientId.length === 0) {
                alert("Patient ID is required.");
                return;
            }
            if (testType === "") {
                alert("Please select a test type.");
                return;
            }
            if (fileInput.files.length === 0) {
                alert("Please upload a test report file.");
                return;
            }

            alert("Test Report Uploaded Successfully.");
        }
    </script>

</body>

<footer>
        <h1 style="background-color: black; color: white;" align="Center"><b>Thanks for your support</b></h1>
</footer>

</html>
