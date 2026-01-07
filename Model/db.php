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

    $conn = get_connection();
    $sql = "SELECT * FROM registration WHERE (mobileno = ? OR email = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $mobileno, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

    $stmt->close();
    $conn->close();
}

?>