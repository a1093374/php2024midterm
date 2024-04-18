<?php
session_start();
unset($_SESSION["role"]);
setcookie("userName", "", time() - 3600);
session_destroy();
header("refresh:3;url=index.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Logout Page</title>
</head>
<body>
    <center>
        <h1>你已登出</h1>
        <p>三秒後回登入畫面!</p>
    </center>
</body>

</html>
