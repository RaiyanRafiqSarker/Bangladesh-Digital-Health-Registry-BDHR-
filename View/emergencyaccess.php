<!DOCTYPE html>
<html>
<head>
    
    <title>Emergency Access Request</title>
    <link rel="stylesheet" href="../style.css">
    
</head>

<body>

    <h1 class="dotted" align="center">Emergency Access</h1>

    <form align="center" onsubmit="requestEmergency(event)">
        <fieldset>
            <legend style="color: red;">Request Emergency Access</legend>

            <table class="tablelayout">

                <tr>
                    <td><label for="reason">Reason:</label></td>
                    <td>
                        <textarea id="reason" placeholder=""></textarea>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Request Access</button>
                        <input type="reset" value="Clear">
                    </td>
                </tr>

            </table>

        </fieldset>
    </form>

    <script>
        function requestEmergency(event) {
            event.preventDefault();

            const reason = document.getElementById("reason").value.trim();

            if (reason.length === 0) {
                alert("Please provide a reason for emergency access.");
                return;
            }

            alert("Emergency Access Request Sent.");
        }
    </script>

</body>

<footer>
    <h1 style="background-color: black; color: white;" align="Center"><b>Thanks for your support</b></h1>
</footer>

</html>
