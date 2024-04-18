<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "author") {
    header("Location: fail.php");
    exit();
}
if (isset($_POST["logout"])) {
    unset($_SESSION["role"]);
    setcookie("userName", "", time() - 3600);
    header("Location: logout.php"); 
    exit();
}
if (isset($_SESSION["paper"])) {
    $paper = $_SESSION["paper"];
} else {
    header("Location: author.php");
    exit();
}
$abstract = nl2br($paper["abstract"]);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Show Paper</title>
</head>
<body>
    <h1>確定頁面</h1>
    <p><strong>論文標題:</strong> <?php echo $paper["title"]; ?></p>
    <p><strong>作者姓名:</strong> <?php echo $paper["authorName"]; ?></p>
    <p><strong>作者Email:</strong> <?php echo $paper["authorEmail"]; ?></p>
    <p><strong>論文摘要:</strong><br> <?php echo $abstract; ?></p>
    <form action="" method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>

</html>
