<!DOCTYPE html>
<html>
<head>
    <title>Doctor Login</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<h1 class="dotted" align="center">Doctor Login</h1>

<form align="center"
      action="../Controllers/DoctorLoginController.php"
      method="post">

    <fieldset>
        <legend style="color:red;">Login Panel</legend>

        <table class="tablelayout">

            <tr>
                <td><label>Doctor Name:</label></td>
                <td><input type="text" name="name" required></td>
            </tr>

            <tr>
                <td><label>License No:</label></td>
                <td><input type="text" name="license" required></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit" name="login">Login</button>
                    &nbsp;
                    <!-- Refresh Button -->
                    <button type="reset">Refresh</button>
                </td>
            </tr>

            <!-- Registration Link -->
            <tr>
                <td colspan="2" align="center" style="padding-top:15px;">
                    <a href="doctorregistrationverification.php">
                        New Doctor? Register Here
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
