<?php

    require('../model/signup_database.php');

    $userName = $id = $password = $email = $dob = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST["userName"];
        $id = $_POST["id"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $flag=signUpReg($userName , $id , $password , $email , $dob);
        if($flag){
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/labtask3/view/login.php',true,303);
            exit;
        }
        else{
            echo "Error";
        }
    }
?>