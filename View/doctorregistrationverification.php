<!DOCTYPE html>
<html>
<head>
    <title>Doctor Registration & Verification</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<h1 class="dotted" align="center">Doctor Registration & Verification</h1>

<form align="center"
      action="../Controllers/DoctorRegistrationController.php"
      method="post"
      enctype="multipart/form-data">

    <fieldset>
        <legend style="color:red;">Doctor Verification Form</legend>

        <table class="tablelayout">

            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name" required></td>
            </tr>

            <tr>
                <td><label>License No:</label></td>
                <td><input type="text" name="license" required></td>
            </tr>

            <tr>
                <td><label>License Proof:</label></td>
                <td>
                    <input type="file" name="proof"
                           accept=".jpg,.png,.jpeg,.pdf" required>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Submit</button>
                    <input type="reset" value="Reload">
                    <button type="button" onclick="window.location.href='doctorlogin.php'">Back </button>
           
                </td>
            </tr>

        </table>
    </fieldset>
</form>

</body>
</html>
