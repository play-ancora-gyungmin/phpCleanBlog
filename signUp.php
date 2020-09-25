<!DOCTYPE html>
<html lang="ko">
<?php
include 'connect.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./resorces/bootstrap.min.css">
    <link rel="stylesheet" href="./resorces/main.css">
    <title>깨끗한 블로그 - 회원가입</title>
</head>

<body>
    <?php
        include "./header.php";
    ?>

    <main id="main">
        <div class="container">
            <h2>회원가입</h2>
            <form action="./signUpProcess.php" method="post" id="signUpForm">
                <fieldset>
                    <div class="form-group">
                        <label for="inputEmail">이메일</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter Email" required>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">암호</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" minlength="8" maxlength="12" required>
                        <small id="passwordHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordChk">암호 확인</label>
                        <input type="password" class="form-control" id="inputPasswordChk" name="inputPasswordChk" placeholder="Password Check" minlength="8" maxlength="12" required>
                        <small id="passwordChkHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="inputLocal">지역(선택)</label>
                        <input type="text" class="form-control" id="inputLocal" name="inputLocal" placeholder="Enter City">
                    </div>
                    <button id="signUpBtn" type="submit" class="btn btn-primary">회원가입</button>
                </fieldset>
            </form>
        </div>
    </main>
    
    <?php
        include "./footer.php";
    ?>
    <script src="./resorces/signUp.js"></script>
</body>
    
</html>