<?php
session_start();

if (isset($_POST['login'])) {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
        $_SESSION['admin'] = true;

        // Redirect to admin dashboard
        header("Location: admindashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Admin Credentials');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<h1 class="dotted" align="center">Admin Login</h1>

<form method="post" align="center">
    <fieldset>
        <legend style="color:red;">Admin Login Panel</legend>

        <table class="tablelayout">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" required></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>
