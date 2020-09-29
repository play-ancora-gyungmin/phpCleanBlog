<?php

include './connect.php';

$inputEmail = $_POST["inputEmail"];
$inputName = $_POST["inputName"];
$inputPassword = $_POST["inputPassword"];
$inputLocal = $_POST["inputLocal"];

/*
echo $inputEmail."<br>";
echo $inputName."<br>";
echo $inputPassword."<br>";
echo $inputLocal."<br>";
*/

$state;
$incodedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);

$inputSQuery = "insert into `user`(`email`,`name`,`password`,`local`) 
values ('$inputEmail','$inputName','$incodedPassword','$inputLocal')";

echo $inputSQuery."<br>";

$state = $conn->query($inputSQuery);

/*
if ($state == TRUE){
    echo "<br>성공";
} else {
    echo "<br>실패: ".$conn->error;
}
*/

$conn->close();

?>