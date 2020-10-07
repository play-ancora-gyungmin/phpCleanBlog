<!DOCTYPE html>
<html lang="ko">
<?php
include 'connect.php';
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./resorces/bootstrap.min.css">
    <link rel="stylesheet" href="./resorces/main.css">
    <title>깨끗한 블로그</title>
</head>

<body>
    <?php
        include "./header.php";
    ?>

    <main id="main">
    </main>
    
    <?php
        include "./footer.php";
    ?>
</body>
    
</html>