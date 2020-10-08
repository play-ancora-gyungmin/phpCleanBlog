<?php
require 'connect.php';
session_start();

$inputTitle = $_POST['inputTitle'];
$inputTag = $_POST['inputTag'];
$inputText = $_POST['inputText'];
$inputImg = $_FILES['inputImg'];

$state;
$inputSQuery;

if($inputImg['error']>0){
    $inputSQuery = "insert into `post`(`userid`,`title`,`text`,`tag`) 
    values ('".$_SESSION['id']."','$inputTitle','$inputText','$inputTag')";
    //echo $inputSQuery;
} else{
    $upload_dir = "../upload/"; /** 업로드 위치 **/

    /** 파일 이름 변경 */
    $img_name = $inputImg['name'];
    $img_extens_arr = explode('.',$img_name);
    $img_extens = $img_extens_arr[count($img_extens_arr)-1]; //파일 확장자

    //확장자 제외 파일명 추출
    $i = 0;
    while($i < count($img_extens_arr)-1){
        $img_name_orign .= $img_extens_arr[$i];
        $i++;
    }

    // 업로드 파일명 완성
    $img_name = $img_name_orign."_".$_SESSION['id']."_".date("YmdHis").'.'.$img_extens;
    echo $img_name."<br>";

    if(move_uploaded_file($inputImg['tmp_name'], $upload_dir.$img_name)){
        $inputSQuery = "insert into `post`(`userid`,`title`,`text`,`tag`,`photo`) 
        values ('".$_SESSION['id']."','$inputTitle','$inputText','$inputTag','$img_name')";
        //echo $inputSQuery;
    } else {
        echo '<script> alert("업로드실패"); location.replace("index.php"); </script>';
    }
}

$state = $conn->query($inputSQuery);
$conn->close();
echo '<script> alert("업로드되었습니따라락"); location.replace("index.php"); </script>'

?>