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
    <title>깨끗한 블로그 - 제목</title>
</head>

<body>
    <?php
        include "./header.php";
    ?>

    <main id="main">
        <div class="container">
            <h3>최근 글</h3>
            <div class="list-item">
                <h2><a href="#">Example</a></h2>
                <p>yyyy.mm.dd / #사진</p>
                <img class="w-75 item-img" src="./resorces/img/sample.jpg"
                    alt="쌓여있는 책">
                <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum</a>
                </p>
                <hr class="my-4">
            </div>
        </div>
    </main>
    
    <?php
        include "./footer.php";
    ?>
</body>
    
</html>