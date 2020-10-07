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
    <title>깨끗한 블로그 - 로그인</title>
</head>

<body>
    <?php
        include "./header.php";
    ?>

    <main id="main">
        <div class="container">
            <h2>로그인</h2>
            <form id="signInForm" action="./signInProcess.php" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="inputEmail">이메일</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter Email" required>
                        <small id="emailHelp" class="form-text text-muted" style="color:red !Important;"></small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">암호</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
                        <small id="passwordHelp" class="form-text text-muted" style="color:red !Important;"></small>
                    </div>
                    <button id="signInBtn" type="submit" class="btn btn-primary">로그인</button>
                </fieldset>
            </form>
        </div>
    </main>

    <?php
        include "./footer.php";
    ?>
    <script src="./resorces/signIn.js"></script>

</body>

</html>