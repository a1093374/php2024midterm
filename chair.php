<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "chair") {
    header("Location:logout.php");
    exit();
}
if (isset($_POST["logout"])) {
    unset($_SESSION["role"]);
    setcookie("userName", "", time() - 3600); 
    header("Location:logout.php"); 
    exit();
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Chair Page</title>
</head>
<body>
    <h1>Welcome Chair!</h1>
    <p>您現在是以chair的身分登入.</p>
    <form action="" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>

