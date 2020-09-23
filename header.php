<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <h1><a class="navbar-brand" href="./index.php">깨끗한 블로그 플러스</a></h1>
        <a href="./index.php" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </a>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">홈 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">카테고리</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./postList.php">모든 글</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./postList.php?ctg=photo">사진</a>
                        <a class="dropdown-item" href="./postList.php?ctg=art">영화/음악</a>
                        <a class="dropdown-item" href="./postList.php?ctg=talk">잡담</a>
                    </div>
                </li>
                <li class="nav-item left">
                    <a class="nav-link" href="./signIn.php">로그인</a>
                </li>
                <li class="nav-item left">
                    <a class="nav-link" href="./signUp.php">회원가입</a>
                </li>
            </ul>
        </div>
    </nav>
</header>