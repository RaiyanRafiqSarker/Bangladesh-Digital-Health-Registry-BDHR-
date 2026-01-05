<?php
include '../Model/db.php';
$Invalid_Message = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //session_start();
        $mobileno = $_POST['mobileno'];
        $password = $_POST['password'];
        $email = $_POST["email"];
       // $otp = $_POST["otp"];

        if( $mobileno=="" || $password==""|| $email=="") {
            echo "Please fill all the fields.";
        }
        else if(strlen($password)<4){
            echo "Password  must be grater than 4 character";
        }
        // else if(strlen($otp)<4){
        //     echo "Enter your OTP Correctly.It must be 4 character.";
        // }
        else{

            $login_status = login_check( $mobileno, $password, $email);

            if($login_status){
                header("Location: ../View/Patient_Dashboard.php");
            }

            else{
               require '../View/Patient_Login.php';
            }


        //    $_SESSION["status"]=true;
        //    $_SESSION["mobileno"]=$mobileno;

        //    $catagory=$_POST["catagory"];
        //    if($catagory=="Patient"){
        //      header("Location:Patient_Dashboard.html");
    
        //    }

        //    else if($catagory=="Doctor"){
        //    header("Location:doctordashboard.html");
        //    }

        //    else{
        //     echo "Catagory is not selected.";
        //    }
        }
    }
    else{
        echo "type if not submited";
    }




?>