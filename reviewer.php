<html>
<head>
    <meta charset="utf-8">
    <title>Reviewer Page</title>
</head>
<body>
    <h1>Reviewer您好，歡迎進入論文評論網頁</h1>
    <form action="" method="post">
        <p>論文評審決定:</p>
        <input type="radio" id="accept" name="decision" value="Accept" required>
        <label for="accept">Accept</label><br>
        <input type="radio" id="minor" name="decision" value="Minor Revision">
        <label for="minor">Minor Revision</label><br>
        <input type="radio" id="major" name="decision" value="Major Revision">
        <label for="major">Major Revision</label><br>
        <input type="radio" id="reject" name="decision" value="Reject">
        <label for="reject">Reject</label><br>
        <p>論文評論評語:</p>
        <textarea name="comment" rows="4" cols="50" required></textarea><br>
        <input type="submit" name="submit" value="提交">
    </form>
    <form action="" method="post">
        <input type="submit" name="logout" value="登出">
    </form>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "reviewer") {
    header("Location: fail.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["decision"]) && isset($_POST["comment"])) {
        $_SESSION["decision"] = $_POST["decision"];
        $_SESSION["comment"] = $_POST["comment"];
        header("Location: showreview.php");
        exit();
    }
}
if (isset($_POST["logout"])) {
    unset($_SESSION["role"]);
    setcookie("userName", "", time() - 3600); 
    header("Location: logout.php"); 
    exit();
}
?>


