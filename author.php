<html>
<head>
    <meta charset="utf-8">
    <title>Author Page</title>
</head>
<body>
    <h1>Author您好，歡迎進入論文投稿網頁</h1>
    <form action="" method="post">
        <p>論文標題:</p><input type="text" name="title" required><br>
        <p>作者姓名:</p><input type="text" name="authorName" required><br>
        <p>作者Email:</p><input type="email" name="authorEmail" required><br>
        <p>論文摘要:</p><textarea name="abstract" rows="8" cols="50" required></textarea><br>
         <input type="submit" name="submit" value="提交">
    </form>
    <form action="" method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "author") {
    header("Location: fail.php");
    exit();
}
if (isset($_POST["logout"])) {
    unset($_SESSION["role"]);
    setcookie("userName", "", time() - 3600);
    header("Location: index.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $authorName = $_POST["authorName"];
    $authorEmail = $_POST["authorEmail"];
    $abstract = $_POST["abstract"];
    $_SESSION["paper"] = [
        "title" => $title,
        "authorName" => $authorName,
        "authorEmail" => $authorEmail,
        "abstract" => $abstract
    ];
    header("Location: showpaper.php");
    exit();
}
?>

