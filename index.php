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
        <!-- 인트로 배너 -->
        <div class="container jumbotron intro-box">
            <h1>개끗한 블로그!</h1>
            <p class="lead">이 블로그는 매우 깨끗합니다!</p>
            <hr class="my-4">
            <p>오히려 좋아.</p>
        </div>

        <!-- 최근 글 목록 -->
        <div class="container">
            <h2>최근 글</h2>
            <div class="list-item">
                <h3><a href="#">Example</a></h3>
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