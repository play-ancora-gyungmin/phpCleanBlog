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
            <form action="./signUpProcess.php" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="inputEmail">이메일</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">암호</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordChk">암호 확인</label>
                        <input type="password" class="form-control" id="inputPasswordChk" placeholder="Password Check" required>
                    </div>
                    <div class="form-group">
                        <label for="inputLocal">지역(선택)</label>
                        <input type="text" class="form-control" id="inputLocal" placeholder="Enter City">
                    </div>
                    <button type="submit" class="btn btn-primary">회원가입</button>
                </fieldset>
            </form>
        </div>
    </main>
    
    <?php
        include "./footer.php";
    ?>
</body>
    
</html>