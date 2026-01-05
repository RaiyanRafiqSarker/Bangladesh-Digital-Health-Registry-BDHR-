<?php

    function get_connection(){
    $server="localhost";
    $user="root";
    $password="";
    $db_name="bdhr";

    $conn =   mysqli_connect($server, $user, $password, $db_name);

    return $conn;
}

function insert_to_registration($username, $password, $email, $mobileno){

   $conn = get_connection();
   $phash = password_hash($password,PASSWORD_DEFAULT);
   $sql = "insert into registration (username, password,email, mobileno) values('$username', '$phash','$email' ,'$mobileno')";
      
   if(mysqli_query($conn, $sql)){
            return true;
        }

    return false;
}

function login_check( $mobileno, $password, $email){
    // Step 1: Establish the connection
    $conn = get_connection();

    // Step 2: Prepare the SQL query to fetch the record for the given email or mobile number
    $sql = "SELECT * FROM registration WHERE (mobileno = ? OR email = ?)";

    // Step 3: Prepare and bind parameters to the query (prevent SQL injection)
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $mobileno, $email); // "ss" means two string parameters (mobile and email)

    // Step 4: Execute the query
    $stmt->execute();

    // Step 5: Get the result of the query
    $result = $stmt->get_result();

    // Step 6: Check if any user was found
    if ($result->num_rows > 0) {
        // Fetch the user data from the result
        $user = $result->fetch_assoc();

        // Step 7: Verify if the password matches the stored password (assuming password is stored as plain text)
        if (password_verify($password, $user['password'])) {
            // Step 8: If password matches, return the user data (or any appropriate message)
            return true; // or you can return true to indicate successful login
        } else {
            // Password doesn't match
            return false;
        }
    } else {
        // No user found with the given credentials
        return false;
    }

    // Step 9: Close the statement and connection
    $stmt->close();
    $conn->close();
}

?>