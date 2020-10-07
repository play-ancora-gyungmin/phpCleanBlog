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
    <title>깨끗한 블로그 - 글쓰기</title>
</head>

<body>
    <?php
        include "./header.php";
    ?>

    <main id="main">
        <div class="container">
            <h2>글쓰기</h2>
            <form id="signInForm" action="./postProcess.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="form-group">
                        <label for="inputTitle">제목</label>
                        <input type="text" class="form-control" id="inputTitle" name="inputTitle"
                            placeholder="Enter Title" required>
                        <small id="titleHelp" class="form-text text-muted" style="color:red !Important;"></small>
                    </div>
                    <div class="form-group">
                        <label for="inputTag">태그</label>
                        <select class="form-control" id="inputTag" name="inputTag">
                            <option value="talk">잡담</option>
                            <option value="art">음악/영화</option>
                            <option value="photo">사진</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputText">내용</label>
                        <textarea class="form-control" id="inputText" name="inputText" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputImg">이미지 업로드</label>
                        <input type="file" accept="image/*" class="form-control-file" id="inputImg" mane="inputImg" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">이미지 파일을 업로드 하세요.</small>
                    </div>
                    <button id="uploadBtn" type="submit" class="btn btn-primary">업로드</button>
                </fieldset>
            </form>
        </div>
    </main>

    <?php
        include "./footer.php";
    ?>
</body>

</html>