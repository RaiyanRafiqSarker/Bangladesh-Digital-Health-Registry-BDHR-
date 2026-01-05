
<html>
 <head>
        <title>Patient Regitration</title>
        <link rel="stylesheet" href="../design.css">
 </head>

  <body>
        <h1 class="dotted" style="color: black;" align="Center">Patient Registration</h1>

     <form align="center" method="POST" action="../Controllers/Registration_Check.php">
        <fieldset>
            <legend style="color: red;">Patient Registration Form</legend>
        <table class="tablelayout">
   
            <tr>
            <td><label for="name">Name:</label><br></td>
            <td><input id="username" type="text" name="username" value=""><br></td>
            </tr>

            <tr>
            <td><label for="id">Mobile No:</label><br></td>
            <td><input id="mobileno" type="text" name="mobileno" value=""><br></td>
            </tr>
<br>
            <tr>
            <td><label for="password">Enter your Password:</label><br></td>
            <td><input id="password" type="password" name= "password"><br></td>
            </tr>

            <tr>
             <td><label for="email">Mail Address:</label><br></td>
             <td><input id="email" type="email" name="email" value=""/><br>
            </tr>
            
            <tr>
                <td></td>
            <td>
                
            </td>
            </tr>     
        </table> 
               <button type="submit">Register</button>
                <input type="reset" name="" value="Reload"/>
        </fieldset>
               
      </form>
       
      <script>
        function validateform(event){
            event.preventDefault();//reload when I click reload on browser
        const username = document.getElementById("username").value;
        const mobileno = document.getElementById("mobileno").value;
        const password = document.getElementById("password").value;
        const email = document.getElementById("email").value;
        

        if(username=="" || mobileno=="" || password==""|| email=="") {
                alert("Please fill all the fields.");

                return false;
            }

        else if(password.length<8){
            alert("Password  must be grater than 8 character");

            return false;
        }

        else{

            alert("Patient Registration form submitted Successfully.");

            window.location.href = "Patient_Login.html";
        
        }
        

    }






      </script>
  </body>

  
    <footer>
        <h1 style="color: white;" align="Center"><b>Thanks for your support</b></h1>
    </footer>
</html>