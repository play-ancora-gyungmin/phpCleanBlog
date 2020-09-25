<?php 
include 'connect.php';

$inputEmail=$_POST["inputEmail"];

// 조회 쿼리문 만들기
$sql="SELECT COUNT(*) FROM `user` WHERE email='$inputEmail'";

// 쿼리 DB에 실행하기
$res=$conn->query($sql);

// 쿼리 실행 결과 분기문
if($res->num_rows>0){// 검색결과가 있으면
	$row=$res->fetch_array();//실행결과 가져오기
}

if($row[0]==0){echo "ok";}
else{echo "no";}

$conn->close();

?>