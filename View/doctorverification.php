<?php
require_once("../Model/DoctorModel.php");
$doctors = getAllDoctors();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Verification (Admin)</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<h1 class="dotted" align="center">Doctor Verification</h1>

<form align="center">
    <fieldset>
        <legend style="color: red;">Admin Verification Panel</legend>

        <table class="tablelayout">

            <tr>
                <th>Name</th>
                <th>License No</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($doctors)) { ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['license_no']; ?></td>

                <td class="<?php
                    if ($row['status'] == 'Approved') echo 'approved';
                    else if ($row['status'] == 'Rejected') echo 'rejected';
                ?>">
                    <?php echo $row['status']; ?>
                </td>

                <td>
                    <?php if ($row['status'] == 'Pending') { ?>
                        <a href="../Controller/DoctorVerificationController.php?action=approve&id=<?php echo $row['id']; ?>">
                            <button type="button">Approve</button>
                        </a>
                        <br><br>
                        <a href="../Controller/DoctorVerificationController.php?action=reject&id=<?php echo $row['id']; ?>">
                            <button type="button">Reject</button>
                        </a>
                    <?php } else { ?>
                        <b>Done</b>
                    <?php } ?>
                </td>
            </tr>

            <?php } ?>

        </table>
    </fieldset>
</form>

</body>

<footer>
    <h1 style="background-color:black;color:white;" align="center">
        <b>Thanks for your support</b>
    </h1>
</footer>

</html>
