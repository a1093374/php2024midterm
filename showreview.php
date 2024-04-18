<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "reviewer") {
    header("Location: fail.php");
    exit();
}
if (isset($_POST["logout"])) {
    unset($_SESSION["role"]);
    setcookie("userName", "", time() - 3600);
    header("Location: logout.php");
    exit();
}
if (isset($_SESSION["decision"]) && isset($_SESSION["comment"])) {
    $decision = $_SESSION["decision"];
    $comment = $_SESSION["comment"];
} else {
    header("Location: reviewer.php");
    exit();
}
$comment = nl2br($comment);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Review Result</title>
</head>
<body>
    <h1>評審結果</h1>
    <p><strong>論文評審決定:</strong> <?php echo $decision; ?></p>
    <p><strong>論文評論評語:</strong><br> <?php echo $comment; ?></p>
    <form action="" method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>

</html>
