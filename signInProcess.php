<?php

include 'connect.php';

if (isset($_POST['inputEmail'])) {

    $inputEmail = $_POST['inputEmail'];
    $inputPassword = $_POST['inputPassword'];

    $state;
    $inputSQuery = "SELECT `email`,`name`,`password` FROM user WHERE email='$inputEmail'";
    $state = $conn->query($inputSQuery);
    $userValue = $state->fetch_assoc();

    $hashPassword = $userValue['password'];
    if(password_verify($inputPassword, $hashPassword)){
        session_start();
        $_SESSION['email']=$inputEmail;
        $_SESSION['name']=$userValue['name'];
        //echo "성공...";
    } else {
        echo "Failed";
    }   
} 



?>