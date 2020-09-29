<?php

session_start();
session_destroy();

?>
<script>
    alert("로그아웃 되었습니따라락");
    location.href = "./index.php";
</script>