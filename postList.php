<!DOCTYPE html>
<html lang="ko">
<?php
include 'connect.php';

// make title text
$category = $_GET['ctg'];
function makeTitle($category) {
    $title = '모든글';
    if ($category == 'photo') {
        $title = '사진';
    }elseif ($category == 'art') {
        $title = '영화/음악';
    }elseif ($category == 'talk') {
        $title = '잡담';
    }else {
        $title = '모든글';
    }
    return $title;
}
$title = makeTitle($category);

    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./resorces/bootstrap.min.css">
    <link rel="stylesheet" href="./resorces/main.css">
    <title><?php
        echo "깨끗한 블로그 - ".$title;
    ?></title>
</head>
<body>
    <?php
        include "./header.php";
    ?>

    <main id="main">
        <!-- 최근 글 목록 -->
        <div class="container">
            <h2><?php
                echo $title;
            ?></h2>

            <div class="list-item">
                <h3><a href="#">Example</a></h3>
                <p>yyyy.mm.dd / #사진</p>
                <img class="w-75 item-img" src="https://newsimg.hankookilbo.com/cms/articlerelease/2020/04/21/202004211422083541_3.jpg"
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