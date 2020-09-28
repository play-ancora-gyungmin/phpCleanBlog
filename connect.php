<?php
$servername = "localhost";
$username = "root";
$password = "111111";
$dbname = "firstdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "DB연결에 실패하였습니다.: ".$conn->connect_error;
} 

/* 유니코드 관리 */
$conn->query("set session character_set_connection=utf8;");
$conn->query("set session character_set_results=utf8;");
$conn->query("set session character_set_client=utf8;");
?>